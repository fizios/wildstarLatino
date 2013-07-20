<?php
include $_SERVER['DOCUMENT_ROOT'].'/includes/loader.php';
include $_SERVER['DOCUMENT_ROOT'].'/src/Admin/Usuario.php';

$page_name = "admin menu";

if(!isset($_SESSION['Usuario_log']) || !$_SESSION['Usuario_log']){
	
	$user_nombre = (isset($_POST['usuario']))? $_POST['usuario']: "";
	$user_pass = (isset($_POST['pass']))? $_POST['pass']: "";
		
	$user = new Usuario($user_nombre,$user_pass);
	if(!$user->validarLogin()){
		header("Location: /content-admin");
	}
	$_SESSION['Usuario_log'] = true;	
}

$divshot_css = "";

?>

<?php include $_SERVER['DOCUMENT_ROOT'].'/templates/includes/master-header.php'?>
<div class="container body">
<h1> Menu de edicion </h1>
<ul>
	<li><a href="/content-admin/noticias">Noticias</a></li>
	<li><a href="/content-admin/videos">Videos</a></li>
	<li><a href="/content-admin/imagenes">Imagenes</a></li>
</ul>

</div>
<?php include $_SERVER['DOCUMENT_ROOT'].'/templates/includes/master-footer.php'?>