<?php

include_once 'action.php';

if ($_POST['mode'] == "contato") {

    $contato = new Contato($_POST['name'], $_POST['phone'], $_POST['mail']);


    $html = "<h1 class='display-2'>Olá " . $contato->getNome() . "!</h1>"
            . "<p'>Recebemos o seu pedido de contato<br>Assim que possível iremos te contatar por um dos seguintes meios:<br>"
            . "Telefone: " . $contato->getFone() . "<br>"
            . "Email: " . $contato->getEmail() . "</p>";

    $html .= $contato->insert() . "<br>";
    $html .= $contato->delete() . "<br>";
    $html .= $contato->update() . "<br>";
    $html .= $contato->select();

    echo $html;
}else if($_POST['mode'] == "cadastro"){
    $cadastro = new Client($_POST['name']." ".$_POST['lastName'], $_POST['phone'], $_POST['mail'], $_POST['user'], $_POST['password']);
    $cadastro->setRepetir($_POST['repeat']);
}