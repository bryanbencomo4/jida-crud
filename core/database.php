<?php

namespace core;

require_once("spdo.php");

class DATABASE {
	private $db, $resource;

	public function __construct(){
		$this->db = spdo::singleton();
	}

	public function __destruct(){
		$this->db->__destruct();
	}

	public function prepare($sql){
		try{
			$this->resource = $this->db->prepare($sql);
		}catch(PDOException $e){
			echo $e->getCode();
		}
	}

	public function execute($array=Array()){
		try{
			$this->resource->execute($array);
		}catch(PDOException $e){
			$this->errores($e->getCode(),$e->getMessage());
		}
		return $this->resource;
	}

	public function fetchAll(){
		try{
			return $this->resource->fetchAll();
		}catch(PDOException $e){
			echo $e->getCode();
		}
	}

	public function query($sql){
		try{
			return $this->db->query($sql);
		}catch(PDOException $e){
			echo $e->getCode();
		}
	}
}
?>
