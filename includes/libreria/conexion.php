<?php
function conexion(){
	
	$conn=new PDO("mysql:host=localhost;dbname=udemy","alejandro","3424");
	$conn->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
	
	return $conn;
}
?>