<?php
require_once 'App.php';
require_once 'MySqlDB.php';
require_once 'SqlLiteDB.php';
require_once 'RESTDb.php';

// WHEN YOU WANT TO CHANGE YOUR DATABASE
$app = new App(
	// new MySqlDb()
	new SqlLiteDB()
	// new RESTDb()
);

$app->db->getOrders();
$app->db->getOrderById(1);
$app->db->createOrder([]);
$app->db->updateOrder(1, []);
$app->db->deleteOrder(1);
