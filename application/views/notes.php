<!DOCTYPE html>
<html lang="en">
<head>
	<title>Ajax Notes</title>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
	<script>
		$(document).ready(function(){
			$(document).on('submit', 'form', function(){
				$.post($(this).attr('action'), $(this).serialize(), function(data){
					$('#notes').html(data);
				});
				return false;
			});
			$('form').submit();
		});
	</script>
	<style>
		input, textarea{
			width: 250px;
			display: block;
			margin-bottom: 5px;
		}
		.note{
			display: inline-block;
			margin: 10px;
			border: 1px solid silver;
			padding: 5px;
		}
	</style>
</head>
<body>
	<h1>Notes</h1>
	<div id='notes'></div>
	<form class='add_note' action='notes/add_note' method='post'>
		<input type='text' name='title' placeholder='Insert note title here...'>
		<input type='submit' value='Add Note'>
	</form>
</body>
</html>