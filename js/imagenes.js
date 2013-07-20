$(document).ready(function(){
	 $("a.fancybox").fancybox({
	 	titleShow: false,
	 	autoDimensions: false,
	 	width: 320
	 });
	 
	 $("select.categoria").change(function(){
		
		var val = $(this).val();
		
		$("select.subcategoria:visible").attr("disabled",true).hide();
		$("select."+val).removeAttr("disabled").show();
	});
	
	$("#filtros select").change(function(){
		var categoria = $("#filtros select.categoria").val();
		var subcategoria = $("#filtros select.subcategoria."+categoria).val();
		
		console.log(categoria, subcategoria);
		
		$.post("/media/imagenes/grilla_imagenes",{categoria:''})
		
	});
});