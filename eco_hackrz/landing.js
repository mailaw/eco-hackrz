$(document).ready(function () {

	$('#logout_form').on('submit', function (e) {
	e.stopPropagation();
	e.preventDefault();
	$.ajax('logout.php',
	       {type: 'GET',
		cache: false,
		success: function () {
			window.location.href='authenticate.html';
			alert('Logged out!');
			},
		error: function (jqXHR, status, error) {
		    alert(jqXHR.responseText);}
	       });
    });

	$('#entry_form').on('submit', function(e){
		e.stopPropagation();
		e.preventDefault();
		$.ajax('LogItem.php',
				{type: 'POST',
				cache: false,
				dataType: "json",
				data: $(this).serialize(),
				success: function(log_json, status, jqXHR) {
					var l = new LogItem(log_json);
					alert('Log entry successful!');
					$('#entry_form')[0].reset();
					window.location.href='landing.php';
				},
				error: function(jqXHR, status, error) {
					console.log(jqXHR.responseText);
					alert(jqXHR.responseText);
					$('#entry_form')[0].reset();}
	});
});

});
