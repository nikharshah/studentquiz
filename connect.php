<?php
class Connect {
	private $host = "localhost";
	private $user = "root";
	private $password = "";
	private $database = "stud_quiz";
	private $conn;
	
	function __construct() {
		$this->conn = $this->connectDB();
	}
