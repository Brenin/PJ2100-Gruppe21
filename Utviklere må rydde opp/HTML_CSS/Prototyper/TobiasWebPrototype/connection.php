// <?php

class Connection {

	public function dbConnect() {
		return new PDO("mysql:host=mysql.nith.no;dbname=oliibe14", "oliibe14", "oliibe14");
	}
}

?>