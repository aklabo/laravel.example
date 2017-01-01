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
			<nav class="navbar navbar-inverse navbar-fixed-top">
				<div class="container">
					<div class="navbar-header">
						<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
							<span class="sr-only">Toggle navigation</span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</button>
						<a class="navbar-brand" href="/bootstrap-examples/">Bootstrap Examples</a>
					</div>
					<div id="navbar" class="navbar-collapse collapse">
						<ul class="nav navbar-nav">
							<li class="active"><a href="/bootstrap-examples/">Home</a></li>
							<li class="dropdown">
								<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">いろいろ <span class="caret"></span></a>
								<ul class="dropdown-menu">
									<li><a href="/bootstrap-examples/simple-form-example">Simple Form Example</a></li>
									<li><a href="#">Another action</a></li>
									<li><a href="#">Something else here</a></li>
									<li role="separator" class="divider"></li>
									<li class="dropdown-header">Nav header</li>
									<li><a href="#">Separated link</a></li>
									<li><a href="#">One more separated link</a></li>
								</ul>
							</li>
						</ul>
					</div><!--/.nav-collapse -->
				</div>
			</nav>
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
