<!DOCTYPE html>
<html>
	<head>
		<title>Vue.js - Hello World!</title>
		<meta charset="utf-8">
		<script src="https://unpkg.com/vue/dist/vue.js"></script>
		<script>
		function _onload() {
			var app = new Vue({
				el: '#name',
				data: {
					value_text: 'Hello World!'
				}
			});
		}
		</script>
	</head>
	<body onload="javascript: _onload();">
		<form action="" method="post">
			<div id="name">@{{ value_text }}</div>
		</form>
	</body>
</html>
