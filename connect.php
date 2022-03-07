<?php

$con = new mysqli('localhost','root','','crudoperation'); //Assim, podemos usar a extensão mysqli do php para realizar a conexão! Então, ao desenvolver uma query com a extensão mysqli temos algo como: <? php $mysqli = new mysqli("localhost", "usuario", "senha", "database");

if(!$con){
    die(mysqli_error($con));
}

/*if($con){
    echo "Connection successful";
}else{
    die(mysqli_error($con));
}*/