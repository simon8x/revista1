    /*  $(document).ready(function() {
        $('#s').typeahead({
          source: function (query, process) {
			  alert(query);
            $.ajax({
              url: MyAutocomplete.url,
              type: 'POST',
              dataType: 'JSON',
              data: 'query=' + query,
              success: function(data) {
                console.log(data);
                process(data);
              }
            });
          }
        });
      });*/
      $(document).ready(function() {

		$('#post').typeahead({
          source: function (query, process) {
			  alert(query);
            $.ajax({
              url: autocomplete_var.url + "?action=autocomplete&query=%QUERY&nonce=" + autocomplete_var.nonce,
              method: 'POST',
              dataType: 'json',
              data: 'query=' + query,
              success: function(data) {
                //console.log(data);
                //process(data);
				process($.map(data, function(item){
												return item;
												}));
              }
            });
          }
        });
		
      });