<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Bootstrap Examples - index</title>

		<!-- Latest compiled and minified CSS -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
		<!-- jQuery library -->
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
		<!-- Latest compiled JavaScript -->
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

		<style>
		body {
			padding-top: 70px;
		}
		</style>
	</head>
	<body>
		<form action="/bootstrap-examples/">
			@include('bootstrap-examples/nav')
 			<div class="container theme-showcase" role="main">
				<div class="jumbotron">
					<h1>Theme example</h1>
					<p>This is a template showcasing the optional theme stylesheet included in Bootstrap. Use it as a starting point to create something more unique by building on or modifying it.</p>
				</div>
				<button type="submit" class="btn btn-lg btn-default">Default</button>
			</div>
 		</form>
	</body>
</html>
