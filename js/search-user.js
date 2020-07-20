( function( $ ) {
	$(document).ready(function(){
		$("#s").on('keyup',search);
	});

	function search(evento) {
		var data = $("#s").val();
		var html = "";

		$.ajax({
			type:'GET',
			url: admin_url.ajax_url,
			data: {action:'searchUsers', valor: data },

			beforeSend: function(){
				$('.autocomplete').html("Cargando");
			},
			success: function(data) {
				
				data = $.parseJSON(data);
				html = "";

				if(data.length){
					
					//html = "Resultados de su busqueda: " + data.length;
					$.each(data, function(pos,item){
						
						
						html = html + "<div class='autocomplete-items'><a href=" + item.guid + ">" + item.post_title + "</a>" +"</div>";
					});

				}else{
					html = "Sin resultados";
				}

				$('.autocomplete').html(html);
			},
			error: function(error) {
				console.log(error);
			}

		});

	}

} )( jQuery );