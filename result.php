<!DOCTYPE html>
<html>
<head>
	<title>Result</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">
	<style>
		img{
			margin-top: 10px;
			height: 70px;
			width: 100px;
		}
		.result{
			margin-left: 10%;
			margin-right: 25%;
			margin-top: 10px;
		}
	</style>
</head>
<body>
	<div class="container-fluid">
		<form action="result.php" method="get">
			<div class="row" style="background: #f2f2f2">
				<div class="col-sm-1">
					<a href="search.php"><img src="img/mayank_K_J.jpg"></a>
				</div>
				<div class="col-sm-6">
					<div class="input-group" style="margin-top: 10px">
						<input type="text" class="form-control" name="search">
						<span class="input-group-btn">
							<input class="btn btn-secondary" type="submit" name="search_button" value="Search">
						</span>
					</div>
				</div>
			</div>
		</form>
	</div>
	<div class="result">
		<table>
			<tr>
				<?php
					$con=mysqli_connect("localhost","root","","search");
					if(isset($_GET["search_button"]))
					{
						$search=$_GET['search'];
						if($search==" ")
						{
							echo "<center><b>Invalid Entry</b></center>";
							exit();
						}
						$sql="SELECT * FROM website WHERE site_key LIKE '%$search%' limit 0, 5";
						$rs=mysqli_query($con,$sql);
						if(mysqli_num_rows($rs) < 1)
						{
							echo "<center><b>No such website found</b></center>";
							exit();
						}
					}
				?>
			</tr>
		</table>
		<?php
			$con1=mysqli_connect("localhost","root","","search");
			$search=$_GET['search'];
			$sql1="SELECT * FROM website WHERE site_key LIKE '%$search%'";
			$rs1=mysqli_query($con1,$sql1);
			echo "<font size+='1' color='#1a1aff'>Images for $search</font>";
			while($row1=mysqli_fetch_array($rs1))
			{
				echo "<td>
						<table style='margin-top: 10px'>
							<tr>
								<td>
									<img src='img/$row1[5]' height='100px'>
								</td>
							</tr>
						</table>
					   </td>";

			    echo "<a href='$row1[2]'><font size='4' color='#0000cc'><b>$row1[1]</b></font></a><br>";
				echo "<font size='3' color='#006400'>$row1[2]</font><br>";
				echo "<font size='3' color='#666666'>$row1[4]</font><br><br>";
			}
		?>
	</div>
	<script src="https://code.jquery.com/jquery-3.1.1.slim.min.js" integrity="sha384-A7FZj7v+d/sdmMqp/nOQwliLvUsJfDHW+k9Omg/a/EheAdgtzNs3hpfag6Ed950n" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn" crossorigin="anonymous"></script>
</body>
</html>