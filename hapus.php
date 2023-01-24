<?php

require_once('koneksiDb.php');
parse_str(file_get_contents('php://input'), $value);

$noFilm = $value['noFilm'];

$query = "DELETE FROM filmkekinian WHERE noFilm='$noFilm' ";
$sql = mysqli_query($db_connect, $query);

if($sql){
	echo json_encode(array('message' => 'data tos kahapus!'));		
}else{
	echo json_encode(array('message' => 'data te acan dihapus!'));
}

?>