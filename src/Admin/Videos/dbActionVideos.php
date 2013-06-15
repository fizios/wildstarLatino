<?php
include_once $_SERVER['DOCUMENT_ROOT'].'/src/db_loader.php';

global $db;

$accion = $_GET['action'];

if ($accion == "guardar"){
	if (isset($_GET['id']) && $_GET['id'] != ''){
		$id = $_GET['id'];
		$nombre = $_POST['nombre'];
		$youtubeId = $_POST['youtube-id'];
		
		$query = 'UPDATE videos SET';
		$query .= " nombre = '$nombre',";
		$query .= " youtube_id = '$youtubeId' ";
		$query .= " WHERE id = $id";
		
		$db->query($query);
		
		header("Location: /content-admin/videos");
		
	}else{
		$nombre = $_POST['nombre'];
		$youtubeId = $_POST['youtube-id'];
		
		$query = "INSERT INTO videos (nombre, youtube_id)";
		$query .= " VALUES ('$nombre', '$youtubeId')";
		
		$db->query($query);
		
		header("Location: /content-admin/videos");
	}
}

if ($accion == "borrar"){
	$id = $_GET['id'];
	$query = "DELETE FROM videos where id = $id";
	$db->query($query);
	
	header("Location: /content-admin/videos");
}