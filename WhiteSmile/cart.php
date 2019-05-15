<?php

$recepient = "wsmile0419@gmail.ru";
$sitename = "White&Smile";
$obj = json_decode($_POST["obj"], true);
$name = $_POST['name'];
$phone = $_POST['phone'];
$address = $_POST['address'];
$message = "";
$message .= "Имя " .$name ."\n";
$message .= "Номер телефона " .$phone ."\n";
$message .= "Адрес доставки " .$address ."\n";
$pagetitle = "Поступила заявка с сайта \"$sitename\"";
foreach ($obj as $key) {
	$message .= $key["name"] ." - ".$key["price"]."\n";
}

$pagetitle = "Поступила заявка с сайта \"$sitename\"";
mail($recepient, $pagetitle, $message, "Content-type: text/plain; charset=\"utf-8\"\n From: $recepient");


?>