<?php
include '../../control/ConteudoControl.php';
header('Content-Type: application/json');

$conteudoControl = new ConteudoControl();

foreach($conteudoControl->findAll() as $valor){
	echo json_encode($valor);
}
?>