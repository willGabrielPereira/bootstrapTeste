<?php
$nome = $_POST['name'];
$fone = $_POST['phone'];
$email = $_POST['mail'];

$html = "<h1 class='display-2'>Olá ".$nome."!</h1>"
        . "<p'>Recebemos o seu pedido de contato<br>Assim que possível iremos te contatar por um dos seguintes meios:<br>"
        . "Telefone: ".$fone."<br>"
        . "Email: ".$email."</p>";

echo $html;