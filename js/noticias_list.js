$(document).ready(function(){
	$(".action.borrar").click(function(ev){
		if(!confirm("Borrar??")){
			ev.preventDefault();
		}
	});
	
	$("select.categoria").change(function(){
		
		var val = $(this).val();
		
		$("select.subcategoria:visible").attr("disabled",true).hide();
		$("select."+val).removeAttr("disabled").show();
	});
});
