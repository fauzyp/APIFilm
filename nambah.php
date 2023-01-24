<?php

require_once('koneksiDb.php');

$txt = $_POST['txt'];

$query = "INSERT INTO filmkekinian(txt) VALUES ('$txt')";
$sql = mysqli_query($db_connect, $query);

if($sql){
	echo json_encode(array('message' => 'parantos ditambihkeun'));		
}else{
	echo json_encode(array('message' => 'data te acan di tambihkeun'));
}

?>