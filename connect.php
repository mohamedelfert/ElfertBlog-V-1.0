<?php

$dsn = "mysql:host=localhost;dbname=elfertblog";
$user = "root";
$pass = "";
$options = array(
    PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8'
);

try{

    $conn = new PDO($dsn,$user,$pass,$options);

} catch (Exception $e){

    echo '
	    	<div class="alert alert-danger">
	            <span class="glyphicon glyphicon-info-sign"></span> 
	            <h3>Failed To Connect To MySQL : { ' . $e->getMessage() . ' }</h3>
	        </div>
        ';

}