<?php
require_once 'DatabaseInterface.php';
class MySqlDB implements DatabaseInterface
{
	public function getOrders(): array
	{
		echo "Calling method: " . __METHOD__ . "n/";
		return [];
	}

	public function getOrderById(int $id)
	{
		echo "Calling method: " . __METHOD__ . "n/";
	}
	public function createOrder(array $data): bool
	{
		echo "Calling method: " . __METHOD__ . "n/";
		return true;
	}
	public function updateOrder(int $id, array $data): bool
	{
		echo "Calling method: " . __METHOD__ . "n/";
		return true;
	}
	public function deleteOrder(int $id): bool
	{
		echo "Calling method: " . __METHOD__ . "n/";
		return true;
	}
}