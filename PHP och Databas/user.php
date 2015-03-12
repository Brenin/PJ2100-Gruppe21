<?php

include_once("loginPDO.php");

class User{

	private $db;

	public function __construct(){
		$this->db = new Connection();
		$this->db = $this->db->dbConnect();
	}

	public function westerdals($Student_ID, $Password) {
		if(!empty($Student_ID) && !empty($Password)) {
			$st = $this->db->prepare("select * from user where Student_ID=? and Password=?");
			$st->bindParam(1, $Student_ID);
			$st->bindParam(2, $Password);
			$st->execute();

			if($st->rowCount() == 1) {
				echo "User verified, Access granted.";
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