<?php

require_once('koneksiDb.php');
parse_str(file_get_contents('php://input'), $value);

$noFilm = $value['noFilm'];
$txt = $value['txt'];

$query = "UPDATE filmkekinian SET txt='$txt' WHERE noFilm='$noFilm' ";
$sql = mysqli_query($db_connect, $query);

if($sql){
	echo json_encode(array('message' => 'data tos diupdate!'));		
}else{
	echo json_encode(array('message' => 'data te acan diupdate!'));
}

?>