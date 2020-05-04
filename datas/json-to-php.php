<?php

$jsonString='{"name":"Katiuscia Moreira","age":35,"married":false}';
$phpArray=json_decode($jsonString);
echo $phpArray->name;

?>