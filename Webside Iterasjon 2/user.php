<?php

include_once("connection.php");

class User{

	private $db;

	public function __construct(){
		$this->db = new Connection();
		$this->db = $this->db->dbConnect();
	}

	public function oliibe14($username, $password) {
		if(!empty($username) && !empty($password)) {
			$st = $this->db->prepare("select * from user where Email=? and Password=?");
			$st->bindParam(1, $username);
			$st->bindParam(2, $password);
			$st->execute();

			if($st->rowCount() == 1) {
				session_start();
				$_SESSION['logged_in'] = "1";
				$_SESSION['username'] = $username;
				header("Location: personerOgProsjektor.php");
			} else {
				header("Location: index.html");
			}
		}
	}


}

?>