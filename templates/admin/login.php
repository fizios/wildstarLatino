<?php
include $_SERVER['DOCUMENT_ROOT'].'/includes/loader.php';

$page_name = "login";

$divshot_css = "";

$css_array[] = ""

?>

<?php include $_SERVER['DOCUMENT_ROOT'].'/templates/includes/master-header.php'?>
<div class="container body">
<div class="row">
	<div class="span12">
		<form action="/content-admin/admin" method="post"">
			<label>Usuario</label>
			<input type="text" name="usuario">
			<label>Pass</label>
			<input type="password" name="pass">
			<input type="submit" value="Login">
		</form>
	</div>
</div>

</div>
<?php include $_SERVER['DOCUMENT_ROOT'].'/templates/includes/master-footer.php'?>