<?php

if (isset($_POST["name"]) ) { 

	// Формируем массив для JSON ответа
    $result = array(
    	'name' => $_POST["name"]
    ); 

    // Переводим массив в JSON
   echo   json_encode($result); 
}

?>
 