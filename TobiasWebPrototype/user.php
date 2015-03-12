<?php

include_once('connection.php')

class User {

	private $db;

	public function __construct() {
		$this->db = new Connection();
		$this->db =$this->db->dbConnect();
	}

	public function Login($name, $pass) {
		if(!empty($name) && !empty($pass)) {
			$st = $this->db->prepare("select * from login where name = ? and pass = ?;");
			$st->bindParam(1, $name);
			$st->bindParam(2, $pass);
			$st->execute();

			if($st->rowCount() == 1) {
				echo "User verified, access granted.";
			} else {
				echo "Incorrect username or password";
			}

		} else {
			echo "Tast inn brukernavn og passord";
		}
	}

}