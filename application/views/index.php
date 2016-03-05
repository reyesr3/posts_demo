<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Posts</title>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
	<script>
	$(document).ready(function(){
		$.get('/posts/index_html', function(res) {
             $('#posts_display').html(res);
		});	
		$('form').submit(function(){
			$.post('/posts/create', $(this).serialize(), function(res) {
				$('#posts_display').html(res);
			});
			return false;
		});	
	});
	</script>
<style>
	#posts_display {
		width: 980px;

	}

	#posts_display div{
		display: inline-block;
		vertical-align: top;
		margin-right: 10px;
		margin-bottom: 10px;
	}

	.box{
		width: 200px;
		height: 200px;
		border: 2px solid silver;
	}

	.box h4{
		margin-left: 12px;
	}

	button {
		width: 75px;
		margin-top: 5px;
		margin-left: 185px;
		border: 1px solid grey;
		font-weight: bold;
		border-radius: 3px;
	}
</style>

</head>
<body>
	<h2>My Posts: </h2>
	<div id="posts_display"></div>
	<div id="add_note">
		<h2>Add a Note:</h2>
			<form action="/posts/create" method="post">
				<textarea style: rows="10" cols="40" name="message"></textarea>
					<br>
				<button type="submit" value="add_post">POST</button> 
			</form>
	</div>
</body>
</html>