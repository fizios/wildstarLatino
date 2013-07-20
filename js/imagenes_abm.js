$(document).ready(function(){
	
	$("input[type='checkbox']").click(function(){
		$(this).next().attr("disabled",function(idx, oldAttr) {
            	return !oldAttr;
        });        
	});
	
	$("#inputURL").change(function(){
		var valor = $(this).val();
		$("img.previa").attr('src',valor);
	});
	
});
