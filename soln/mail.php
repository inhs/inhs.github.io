<?php 

$recepient = "anthem.jaff@gmail.com";
$sitename = "Только твои метры";

$name = $_POST["name"];
$phone = $_POST["phone"];
$message = "Имя: $name \nПароль: $phone";

$pagetitle = "Поступила заявка с сайта \"$sitename\"";
$m = mail($recepient, $pagetitle, $message, "Content-type: text/plain; charset=\"utf-8\"\n From: $recepient");
if ($m) {
	echo 1;
}
else {
	echo 0;
}
?>