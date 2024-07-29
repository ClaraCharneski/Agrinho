<?php

$name = addslashes($_POST['name']);
$mail = addslashes($_POST['mail']);
$fone = addslashes($_POST['fone']);
$question = addslashes($_POST['question']);

$for = "charneskimariaclara@gmail.com";
$message = "Dúvidas - Agronomia High-Tech";

$body = "Nome: " . $name . "\n" . "E-mail: " . $mail . "\n" . "Telefone: " . $fone . "\n" . "Dúvida: " . $question;

?>