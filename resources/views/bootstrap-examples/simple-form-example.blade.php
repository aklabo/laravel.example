<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Bootstrap Examples - 簡単な入力フォームの例</title>

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

		input.form-corp {
			width: 400px;
		}

		input.form-address {
			width: 400px;
		}
		</style>
	</head>
	<body>
		<form action="/bootstrap-examples/simple-form-example" method="post">
			@include('bootstrap-examples/nav')
 			<div class="container theme-showcase" role="main">
				<h1>Bootstrap - 簡単な入力フォームの例</h1>

				<div class="alert alert-success">
					<strong>Success!</strong> Indicates a successful or positive action.
				</div>

				<div class="alert alert-info">
					<strong>Info!</strong> Indicates a neutral informative change or action.
				</div>

				<div class="alert alert-warning">
					<strong>Warning!</strong> Indicates a warning that might need attention.
				</div>

				<div class="alert alert-danger">
					<strong>Danger!</strong> Indicates a dangerous or potentially negative action.
				</div>

				<div class="form-group">
					<label for="usr">氏名:</label>
					<input type="text" name="usr" class="form-control" id="usr" style="width: 190px" value="{{ $usr }}">
				</div>
				<div class="form-group">
					<label for="corp">所属:</label>
					<input type="text" class="form-control form-corp" id="corp" name="corp" value="{{ $corp }}">
				</div>
				<div class="form-group">
					<label for="zip">郵便番号:</label>
					<input type="text" class="form-control" name="zip" id="zip" style="width: 150px" value="{{ $zip }}">
				</div>
				<div class="form-group">
					<label for="pref">都道府県:</label>
					<input type="text" class="form-control" name="pref" id="pref" style="width: 100px" value="{{ $pref }}">
				</div>
				<div class="form-group">
					<label for="address">市区町村、番地、建物名称:</label>
					<input type="text" class="form-control form-address" name="address" id="address" value="{{ $address }}">
				</div>
				<div class="form-group">
					<label for="phone">電話番号:</label>
					<input type="text" class="form-control" name="phone" id="phone" style="width: 170px" value="{{ $phone }}">
				</div>
				<div class="form-group">
					<label for="mail">メールアドレス:</label>
					<input type="text" class="form-control" name="mail" id="mail" style="width: 400px" value="{{ $mail }}">
				</div>

				<p>
					<button type="submit" class="btn btn-default">送信</button>
				</p>

				<p>
					<br>
					<br>
					<br>
					<br>
					<br>
					<br>
					<br>
				</p>

			</div>
			<input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">
		</form>
	</body>
</html>