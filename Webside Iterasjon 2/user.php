<?php

include_once("connection.php");

class User{

	private $db;

	public function __construct(){
		$this->db = new Connection();
		$this->db = $this->db->dbConnect();
	}

	public function oliibe14($Email, $Password) {
		if(!empty($Email) && !empty($Password)) {
			$st = $this->db->prepare("select * from user where Email=? and Password=?");
			$st->bindParam(1, $Email);
			$st->bindParam(2, $Password);
			$st->execute();

			if($st->rowCount() == 1) {
				session_start();
				$_SESSION['logged_in'] = "1";
				header("Location: romOversikt.php");
			} else {
				echo "Incorrect username or Password.";
			}
		}
		else {
			echo "Please enter username and password";
		}
	}


}

?>