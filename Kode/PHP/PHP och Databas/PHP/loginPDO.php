<?php

class Connection {

	public function dbConnect() {
		return new PDO("mysql:host=home.nith.no;dbname=oliibe14", "oliibe14", "oliibe14");
	}
}