<?php

include_once 'action.php';

if ($_POST['mode'] == "contato") {

    $conec = Conn::instance("localhost", "root", "");
    $contato = new Contato($_POST['name'], $_POST['phone'], $_POST['mail']);

    $sql = $contato->insert();
    $fetch = $conec->runSql($sql);

    $html = "<h1 class='display-2'>Olá " . $contato->getNome() . "!</h1>"
            . "<p>Recebemos o seu pedido de contato<br>Assim que possível iremos te contatar por um dos seguintes meios:<br>"
            . "Telefone: " . $contato->getFone() . "<br>"
            . "Email: " . $contato->getEmail() . "</p>";

    echo $html;
} else if ($_POST['mode'] == "cadastro") {
    $cadastro = new Client($_POST['name'] . " " . $_POST['lastName'], $_POST['phone'], $_POST['mail'], $_POST['user'], $_POST['password']);
    $cadastro->setRepetir($_POST['repeat']);

    if (!is_null($erro = $cadastro->apto())) {
        $html = "<h1 class='display-2'>Houve algum erro!</h1>"
                . "<p>$erro<br>Favor tente novamente.</p>";
        echo $html;
    } else {
        $conec = Conn::instance("localhost", "root", "");
        $sql = $cadastro->insert();
        $fetch = $conec->runSql($sql);

        $html = "<h1 class='display-2'>Olá " . $cadastro->getNome() . "!</h1>"
                . "<p>Seu cadastro foi completado com sucesso!</p>";

        echo $html;
    }
}