<?php

namespace controllers;

class userController{
    private $user;

	public function __construct() {
		$this->user = new \models\userModel;
    }
    
	public function index() {
		$data = $this->user->getAll();
		view("users/index.php", $data);
	}

	public function data($id="") {
		$this->user->userId = $id;
		$this->user->name = $_POST["inputName"];
		$this->user->email = $_POST["inputEmail"];
		$this->user->phoneNumber = $_POST["inputPhoneNumber"];
	}

	public function add() {
		if(isset($_POST["event"])) {
			$this->data();
			$_SESSION["msj"] = ($this->user->add())
				? "¡usuario registrado exitosamente!"
				: "usuario no registrado";
			header("location: ".URL_BASE."/");
			exit;
		}

		view("users/index.php");	
	}

	public function edit($id) {
		$this->user->userId=$id;

		if(isset($_POST["event"])) {
			$this->data($id);
			$_SESSION["msj"] = ($this->user->edit())
				? "¡usuario modificado exitosamente!"
				: "usuario no modificado";
			header("location: ".URL_BASE."/edit/user/".$id);
			exit;
		}

		$data = $this->user->getOne();
		view("users/index.php", $data);
	}

	public function delete($id) {
		$this->user->userId=$id;
		$_SESSION["msj"] = ($this->user->delete())
			? "¡usuario eliminado exitosamente!"
			: "usuario no eliminado";
		header("location: ".URL_BASE."/");
	}

	public static function e404() {
		view("error404.php"	);
	}
}
?>
