<?php 
$currency 2 = '&#8377; '; //Currency Character or code 3 
$db_username = 'dbcao';
$db_password = 'dbCao@123';
$db_name = 'toy_store'; 
 $db_host = 'db';
 $shipping_cost = 1.50; //shipping cost 
 $taxes = array( 'VAT' => 12,
 				'Service Tax'=>5);
 $mysqli = new mysqli($db_host, $db_username, $db_password, $db_name);
 if ($mysqli->connect_error) {
 	die('Error: ('. $mysqli->connect_errno.') '. $mysqli->connect_error); 
 }
  ?>