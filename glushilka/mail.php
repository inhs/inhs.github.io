<?php

$text = $_POST["text"];
mail('anthem.jaff@gmail.com', "text here", $text);
echo "Your query is complete";

?>