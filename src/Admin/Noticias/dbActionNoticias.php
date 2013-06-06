<?php
include_once $_SERVER['DOCUMENT_ROOT'].'/src/db_loader.php';

global $db;

$accion = $_GET['action'];

if ($accion == "guardar"){
	if (isset($_GET['id']) && $_GET['id'] != ''){
		$id = $_GET['id'];
		$titulo = $_POST['titulo'];
		$resumen = mysql_real_escape_string($_POST['resumen']);
		$fecha = $_POST['fecha'];
		$cuerpo = mysql_real_escape_string($_POST['cuerpo']);
		$imagen = $_POST['imagen'];
		
		$query = 'UPDATE noticias SET';
		$query .= " titulo = '$titulo',";
		$query .= " resumen = '$resumen',";
		$query .= " fecha = '$fecha',";
		$query .= " cuerpo = '$cuerpo',";
		$query .= " imagen = '$imagen'";
		$query .= " WHERE id = $id";
		
		$db->query($query);
		
		header("Location: /content-admin/noticias");
		
	}else{
		$titulo = $_POST['titulo'];
		$resumen = mysql_real_escape_string($_POST['resumen']);
		$fecha = $_POST['fecha'];
		$cuerpo = mysql_real_escape_string($_POST['cuerpo']);
		$imagen = $_POST['imagen'];
		
		$query = "INSERT INTO noticias (titulo, resumen, fecha, cuerpo, imagen)";
		$query .= " VALUES ('$titulo', '$resumen', '$fecha', '$cuerpo', '$imagen')";
		
		$db->query($query);
		
		header("Location: /content-admin/noticias");
	}
}

if ($accion == "borrar"){
	$id = $_GET['id'];
	$query = "DELETE FROM noticias where id = $id";
	$db->query($query);
	
	header("Location: /content-admin/noticias");
}