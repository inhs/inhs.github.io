<?php

$recepient = "wsmile0419@gmail.ru";
$sitename = "White&Smile";
$name = trim($_POST["name"]);
$email = trim($_POST["email"]);
$phone = trim($_POST["phone"]);
$message = "Имя: $name \nПочта: $email \nПароль: $phone";

$pagetitle = "Поступила заявка с сайта \"$sitename\"";
mail($recepient, $pagetitle, $message, "Content-type: text/plain; charset=\"utf-8\"\n From: $recepient");
echo $message;
?>