var url_base = "..";

$(document).ready(function () {

    $('#login_form').on('submit', function (e) {
	e.stopPropagation();
	e.preventDefault();
	$.ajax('login.php',
	       {type: 'GET',
		data: $('#login_form').serialize(),
		cache: false,
		success: function () {
			window.location.href='authenticate.php';
			},
		error: function(xhr, status, error) {
  var err = eval("(" + xhr.responseText + ")");
  alert(err.Message);
            $('#login_form')[0].reset();
}
	       });
    });

    $('#register_form').on('submit', 
    		function(e) {
    		e.stopPropagation();
   			e.preventDefault();
		    $.ajax("register.php",
		    		{type: 'POST',
		    		dataType: "json",
		    		data: $(this).serialize(),
		    		success: function(user_json, status, jqXHR) {
		    			var u = new User(user_json);
		    			alert('omg you registered successfully! get logging');
		    			$('#register_form')[0].reset();
		    		},
		    		error: function(xhr, status, error) {
  var err = eval("(" + xhr.responseText + ")");
  alert(err.Message);
            $('#register_form')[0].reset();
}

		    		});
    });

});
