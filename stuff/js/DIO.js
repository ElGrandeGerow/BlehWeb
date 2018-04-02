$(function() {
    
    $.ROOTNAME = "http://localhost/BlehWeb";
	
	/**
	 * ACHILLE
	 * effectue une requête ajax POST (parce que post, c'est le bestest)
	 * 
	 * standname : le stand à appeler (ne peut pas être vide)
	 * query : la requête à effectuer (peut être vide)
	 * data : un objet {} contenant autant de paramètres qu'on veut, avec les noms qu'on veut (peut être vide)
	 * callback : une fonction à effectuer une fois que l'ajax est terminé.
	 *	à noter que la fonction accepte un paramètre qui contiendra les données renvoyée par l'ajax
	 */
	
	$.fn.extend({
		achille: function(standname, query, data, callback) {
			
			var params = $.extend({}, 
				{standname: standname},
				{query: query},
				data
			);
			
			$.post($.ROOTNAME+"/stuff/bowandarrow.php", params, function(answer) {
				callback(answer);
			});
			// jsp ce que ça fait lol
			return $(this);
		}
	});
	
	$(document).achille(
		"StarHome",
		"plop",
		{fromage: "cantal", confiture: "églantine"},
		function(data) { 
			$(".logo").attr("data-wat", data);
		}
	);
	
	/*
	$.post($.ROOTNAME+"/stuff/bowandarrow.php", {
		standname: "HermitTopic",
		query: "addtopic",
		title: $("#input-title").val(),
		contents: $("#input-contents").val(),
		subnibleh: $("#data-holder").attr("data-subnibleh")
	}, function(data) {
		if (data.substring(0, 5) == "Error") {
			$("#addtopic-result").removeClass("hide");
			$("#addtopic-result").html(data.substring(5));
		} else {
			//$("#add-topic-sec").html("");
			window.location.href = data;
		}
	});
    */
});