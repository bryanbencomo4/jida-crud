<?php
	namespace Models;
	
	class userModel {
		private $db;
		public $userId, $name, $email, $phoneNumber, $createdAt, $updatedAt;

		public function __construct() {
			$this->db = new \core\database;
		}

		public function add() {
			$statement = "INSERT INTO users (name, email, phone_number, created_at, updated_at) VALUES (?,?,?, NOW(), NOW());";
			$values = array($this->name, $this->email, $this->phoneNumber);

			$this->db->prepare($statement);
			return $this->db->execute($values);
		}

		public function getOne() {
			$statement = "SELECT id, name, email, phone_number, created_at, updated_at FROM users WHERE id = ?;";
			$values = array($this->userId);
			
			$this->db->prepare($statement);
			$data = $this->db->execute(array($this->userId));
			
			foreach ($data as $val) { $d = $val; }
			return $d;
		}

		public function getAll() {
			$statement = "SELECT id, name, email, phone_number, created_at, updated_at FROM users;";
			
			$this->db->prepare($statement);
			$data = $this->db->execute();
			
			foreach ($data as $val) { $d[]=$val; }
			return $d;
		}

		public function edit() {
			$statement = "UPDATE users SET name=?,email=?,phone_number=?,updated_at=NOW() WHERE id = ?;";
			$this->db->prepare($statement);
			return $this->db->execute(array($this->name, $this->email, $this->phoneNumber, $this->userId));
		}

		public function delete(){
			$this->db->prepare("DELETE FROM users WHERE id = ?;");
			return $this->db->execute(array($this->userId));
		}
	}
?>