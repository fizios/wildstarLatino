<?php
include_once $_SERVER['DOCUMENT_ROOT'].'/src/db_loader.php';

global $db;

$accion = $_GET['action'];

if ($accion == "guardar"){
	if (isset($_GET['id']) && $_GET['id'] != ''){
		$id = $_GET['id'];
		
		$titulo = $_POST['titulo'];
		$url = $_POST['url'];
		
		$categorias = $_POST['categoria'];
		$subcategorias = $_POST['subcategoria'];
		
		$query = 'UPDATE imagenes SET';
		$query .= " titulo = '$titulo',";
		$query .= " url = '$url' ";
		$query .= " WHERE id = $id";
		
		$db->query($query);
		
		$db->query("DELETE FROM imagen_categoria WHERE id_imagen = $id");
		foreach ($categorias as $key => $categoria) {
			
			$categoria = trim($categoria);
			
			$subcategoria = trim($subcategorias[$key]);
			
			$queryCategoria = "INSERT INTO imagen_categoria (id_imagen,categoria,subcategoria) ";
			$queryCategoria .= " VALUES ($id, '$categoria', '$subcategoria');";
			
			$db->query($queryCategoria);
		}
		
		header("Location: /content-admin/imagenes");
		
	}else{
		$titulo = $_POST['titulo'];
		$url = $_POST['url'];
		
		$categorias = $_POST['categoria'];
		$subcategorias = $_POST['subcategoria'];
		
		$query = "INSERT INTO imagenes (titulo, url)";
		$query .= " VALUES ('$titulo', '$url')";
		
		$db->query($query);
		
		$id = $db->insert_id;
		
		foreach ($categorias as $key => $categoria) {
			
			$categoria = trim($categoria);
			
			$subcategoria = trim($subcategorias[$key]);
			
			$queryCategoria = "INSERT INTO imagen_categoria (id_imagen,categoria,subcategoria) ";
			$queryCategoria .= " VALUES ($id, '$categoria', '$subcategoria');";
			
			$db->query($queryCategoria);
		}
		
		header("Location: /content-admin/imagenes");
	}
}

if ($accion == "borrar"){
	$id = $_GET['id'];
	$query = "DELETE FROM imagenes where id = $id";
	$db->query($query);
	$db->query("DELETE FROM imagen_categoria WHERE id_imagen = $id");
	
	header("Location: /content-admin/imagenes");
}