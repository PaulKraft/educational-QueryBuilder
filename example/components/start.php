<?php
//including libraries  
include "config.php";
include 'QueryBuilder.php';
include 'Connection.php';

// create database connection
// and QueryBuilder object
// inject the config array into the database connection, then return the pdo object
// inject the pdo object into the QueryBuilder construct 

$db = new QueryBuilder(
		Connection::make($config["database"])
	);






?> 
