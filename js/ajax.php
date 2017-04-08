<?php

$data = array();
$curl = $_POST['curl'];

$conn = mysql_connect('localhost', 'root', 'password');
$db = mysql_select_db('skyway', $conn);

$sql = " INSERT INTO REGIS VALUES (" . $curl .")";
$res = mysql_query($sql, $conn);

mysql_close($conn);

?>
