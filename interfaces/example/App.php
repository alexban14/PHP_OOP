<?php
require_once 'DatabaseInterface.php';

class App
{
	public $db;

	public function __construct(DatabaseInterface $db)
	{
		$this->db = $db;
	}
}