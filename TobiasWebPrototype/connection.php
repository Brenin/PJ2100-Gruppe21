<?php

class Connection {

	public function dbConnect() {
		return new PDO("mysql:host=localhost; dbname=login", "root", "");
	}
}

?>