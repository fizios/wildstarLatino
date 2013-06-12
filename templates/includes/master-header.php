<?php 

error_reporting(E_ALL);

$css_array[] = "bootstrap.css";
$css_array[] = "bootstrap-responsive.css";
$css_array[] = "normalize.css";
$css_array[] = "foundation.css";
$css_array[] = "jquery-ui.css";
$css_array[] = "main.css";
$css_array[] = "titulo.css";
$css_array[] = "nav-bar.css";

$main_js_array[] = "jquery.min.js";
$main_js_array[] = "jquery-ui.min.js";
$main_js_array[] = "bootstrap.min.js";
$main_js_array[] = "nav-bar.js";

//hago esto para que se carguen los js de las paginas despues de los principales
if (isset($js_array)){
	$js_array = array_merge($main_js_array, $js_array);
}else {
	$js_array = $main_js_array;
}

?>
<html>
  
  <head>
    <title><?php echo $page_name." - Wildstar Latino" ?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta content="text/html; charset=UTF-8" http-equiv="Content-Type">
    <link rel="shortcut icon" href="/imagenes/Icons/icon_sigil.jpg"/>
    <?php foreach ($css_array as $css):?>
    	<link rel="stylesheet" href="/css/<?php echo $css?>">
    <?php endforeach;?>
    <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
    <?php foreach ($js_array as $js):?>
    	<script src="/js/<?php echo $js?>"></script>
    <?php endforeach;?>
  </head>
  
<body id="WL-Body">
	<?php include 'facebook_code.php'?>
    <div class="container">
      <div class="container header">
      	<div class="row">
      		<div class="span5 offset2 main-titulo">
      			<a href="/"><img src="/imagenes/logo-wildstar-latino.png" alt="Wildstar Latino" /></a>
      		</div>
      	</div>
        <?php include 'navigation-bar.php'?>
      </div>