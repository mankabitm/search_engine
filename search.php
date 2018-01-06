<!DOCTYPE html>
<html>
<head>
	<title>Search Engine</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">
	<style>
		body{
			margin: 8%;
		}
		.img-fluid{
			width: 500px;
			height: 300px;
			margin-top: 5px;
		}
		.form-control{
			width: 60%;
			margin-top: 20px;
		}
	</style>
</head>
<body onload="ld()">
	<script>
		function ld(){
			document.search.search.focus();
		}
	</script>
	<form name="search" action="result.php" method="get">
		<center>
			<img src="img/mayank_K_J.jpg" class="img-fluid" alt="search">
			<input type="text" class="form-control" name="search">
			<input type="submit" class="btn btn-outline-primary" value="Search" style="margin-top: 20px;">
		</center>
	</form>

	<script src="https://code.jquery.com/jquery-3.1.1.slim.min.js" integrity="sha384-A7FZj7v+d/sdmMqp/nOQwliLvUsJfDHW+k9Omg/a/EheAdgtzNs3hpfag6Ed950n" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn" crossorigin="anonymous"></script>
</body>
</html>