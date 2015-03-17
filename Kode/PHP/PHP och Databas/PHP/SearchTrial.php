<?php

$db = new PDO('mysql:host=localhost;dbname=westerdals', 'root', '');
$sql = 'SELECT Room_ID, Student_ID from rooms';

foreach ($db->query($sql) as $row) {
	echo $row['Room_ID']. " - ".$row['Student_ID']. "<br>";
}

$db = NULL;
?>