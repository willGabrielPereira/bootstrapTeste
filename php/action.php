<?php
   
//    CONEXÃO COM MYSQL PDO
class Conn{
    private static $conn;
    
    private $connection;
    private $server;
    private $user;
    private $password;
    
    public static function instance($server, $user, $password){
        if(!isset(self::$conn)){
            self::$conn = new Conn($server, $user, $password);
        }
        return self::$conn;
    }
    
    private function __construct($server, $user, $password) {
        $connection = new PDO("mysql:host=$server;dbname=myDB", $user, $password);
        $this->server = $server;
        $this->user = $user;
        $this->password = $password;
        
        $connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    }
    
    public function __destruct() {
        $this->connection = null;
    }
            
    function getConnection() {
        return $this->connection;
    }
    function getServer() {
        return $this->server;
    }
    function getUser() {
        return $this->user;
    }
    function getPassword() {
        return $this->password;
    }
    function setConnection($connection) {
        $this->connection = $connection;
    }
    function setServer($server) {
        $this->server = $server;
    }
    function setUser($user) {
        $this->user = $user;
    }
    function setPassword($password) {
        $this->password = $password;
    }
    
    //    SET ACTION=READ TO RETURN FETCH
    public function runSql($sql, $action=""){
        $this->connection->exec($sql);
        
        if ($action == "read"){
            return $this->connection->setFetchMode(PDO::FETCH_ASSOC);
        }
        
        return lastId(); // TRATAR RETORNO 
    }

    public function lastId(){
        return $this->connection->lastInsertId();
    }
}

//    OBJ CONTATO
class Contato{
    private $id;
    private $nome;
    private $fone;
    private $email;
    
    function __construct($nome, $fone, $email, $id="") {
        $this->id = $id;
        $this->nome = $nome;
        $this->fone = $fone;
        $this->email = $email;
    }
    
    function getId() {
        return $this->id;
    }
    function setId($id) {
        $this->id = $id;
    }
    function getNome() {
        return $this->nome;
    }
    function getFone() {
        return $this->fone;
    }
    function getEmail() {
        return $this->email;
    }
    function setNome($nome) {
        $this->nome = $nome;
    }
    function setFone($fone) {
        $this->fone = $fone;
    }
    function setEmail($email) {
        $this->email = $email;
    }

    function insert(){
        $sql = "INSERT INTO contato (`nome`, `fone`, `email`) VALUES ('$this->nome', '$this->fone', '$this->email');";
        return $sql;
    }
    
    function delete(){
        $sql = "DELETE contato WHERE id = $this->id;";
        return $sql;
    }
    
    function update(){
        $sql = "UPDATE contato SET `nome` = '$this->nome', `fone` = '$this->fone', `email` = '$this->email' WHERE id = $this->id;";
        return $sql;
    }
    
    function select($id=""){
        if(strlen($id)<=0){
            $sql = "SELECT * FROM contato;";
        }else{
            $sql = "SELECT * FROM contato WHERE id = $id;";
        }
        return $sql;
    }

    //    RETURN ARRAY
    static function bdToObj($fetch){
        // TODO
        // TRATAR RETORNO DO BD
    }
}

//    OBJ CLIENT
class Client{
    private $id;
    private $nome;
    private $fone;
    private $email;
    private $usuario;
    private $senha;
    private $repetir;
    
    function __construct($nome, $fone, $email, $usuario, $senha, $id="") {
        $this->id = $id;
        $this->nome = $nome;
        $this->fone = $fone;
        $this->email = $email;
        $this->usuario = $usuario;
        $this->senha = $senha;
    }
    private static function nullInstance(){
        return new Client(null, null, null, null, null, null);
    }
            
    function getId() {
        return $this->id;
    }
    function getNome() {
        return $this->nome;
    }
    function getFone() {
        return $this->fone;
    }
    function getEmail() {
        return $this->email;
    }
    function getUsuario() {
        return $this->usuario;
    }
    function getSenha() {
        return $this->senha;
    }
    function setId($id) {
        $this->id = $id;
    }
    function setNome($nome) {
        $this->nome = $nome;
    }
    function setFone($fone) {
        $this->fone = $fone;
    }
    function setEmail($email) {
        $this->email = $email;
    }
    function setUsuario($usuario) {
        $this->usuario = $usuario;
    }
    function setSenha($senha) {
        $this->senha = $senha;
    }
    function getRepetir() {
        return $this->repetir;
    }
    function setRepetir($repetir) {
        $this->repetir = $repetir;
    }
    

    function criptografia(){
        $this->senha = sha1($this->senha);
    }

    function insert(){
        $sql = "INSERT INTO client (`nome`, `fone`, `email`, `usuario`, `senha`) VALUES ('$this->nome', '$this->fone', '$this->email', '$this->usuario', '$this->senha');";
        return $sql;
    }
    
    function delete(){
        $sql = "DELETE client WHERE id = $this->id;";
        return $sql;
    }
    
    function update(){
        $sql = "UPDATE client SET `nome` = '$this->nome', `fone` = '$this->fone', `email` = '$this->email', `usuario` = '$this->usuario', `senha` = '$this->senha' WHERE id = $this->id;";
        return $sql;
    }
    
    function select($id=""){
        if(strlen($id)<=0){
            $sql = "SELECT * FROM client;";
        }else{
            $sql = "SELECT * FROM client WHERE id = $id;";
        }
        return $sql;
    }
    
    function log(){
        $sql = "SELECT * FROM client WHERE `senha` = '$this->senha' AND (`usuario`=$this->usuario OR `email`='$this->email');";
        return $sql;
    }
    static function login($user, $senha){
        $client = Client::nullInstance();
        $client->setSenha($senha);
        $client->setUsuario($user);
        $client->setEmail($user);
        
        $client->criptografia();
        
        $con = Conn::instance("localhost", "root", "");
        $bd = $con->runSql($client->log(), "read");
        
        $ant = bdToObj($bd);
        
        if(count($ant)<1){
            return false;
        }
        return $ant[0];
        
    }
    
    //    RETURN ARRAY
    static function bdToObj($fetch){
        // TODO
        // TRATAR RETORNO DO BD
    }

}