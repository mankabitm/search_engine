<!DOCTYPE html>
<html>
<head>
	<title>Search Engine</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">
</head>
<body>
	<div class="container"><br>
		<center><h2><strong>Insert Website</strong></h2></center><br>
		<form action="insert_site.php" method="post" enctype="multipart/form-data">
			<div class="form-group">
				<div class="row">
					<label class="col-sm-2" for="stitle">Site Title</label>
					<div class="col-sm-10">
						<input type="text" class="form-control" id="stitle" name="s_title" placeholder="Enter site title" required>
					</div>
				</div>
			</div>
			<div class="form-group">
				<div class="row">
					<label class="col-sm-2" for="slink">Site Link</label>
					<div class="col-sm-10">
						<input type="text" class="form-control" id="slink" name="s_link" placeholder="Enter site link" required>
					</div>
				</div>
			</div>
			<div class="form-group">
				<div class="row">
					<label class="col-sm-2" for="skey">Site Keywords</label>
					<div class="col-sm-10">
						<input type="text" class="form-control" id="skey" name="s_key" placeholder="Enter site keywords" required>
					</div>
				</div>
			</div>
			<div class="form-group">
				<div class="row">
					<label class="col-sm-2" for="sdes">Site Description</label>
					<div class="col-sm-10">
						<textarea class="form-control" id="sdes" name="s_des" placeholder="Enter site description" required></textarea>
					</div>
				</div>
			</div>
			<div class="form-group">
				<div class="row">
					<label class="col-sm-2" for="simg">Site Image</label>
					<div class="col-sm-10">
						<input type="file" class="form-control" name="simg" required>
					</div>
				</div>
			</div>
			<div class="form-group">
				<div class="row">
					<center>
					<input type="submit" class="btn btn-outline-success" name="submit" value="Add Website">
					&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
					<input type="reset" class="btn btn-outline-danger" name="cancel" value="Cancel">
					</center>
				</div>
			</div>
		</form>
	</div>

	<script src="https://code.jquery.com/jquery-3.1.1.slim.min.js" integrity="sha384-A7FZj7v+d/sdmMqp/nOQwliLvUsJfDHW+k9Omg/a/EheAdgtzNs3hpfag6Ed950n" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn" crossorigin="anonymous"></script>
</body>
</html>

<?php
	$con=mysqli_connect("localhost","root","","search");
	if(isset($_POST["submit"]))
	{
		$s_title=addslashes($_POST["s_title"]);
		$s_link=addslashes($_POST["s_link"]);
		$s_key=addslashes($_POST["s_key"]);
		$s_des=addslashes($_POST["s_des"]);
		$_simg=addslashes($_FILES["simg"]["name"]);

		if(move_uploaded_file($_FILES["simg"]["tmp_name"],"img/".$_FILES["simg"]["name"]))
		{
			$sql="INSERT INTO website(site_title,site_link,site_key,site_des,site_img) VALUES('$s_title','$s_link','$s_key','$s_des','$_simg')";
			$result=mysqli_query($con,$sql);
			if($result)
			{
				echo "<script> alert('Site Uploaded successfully')</script>";
			}
			else
			{
				echo "<script> alert('Upload failed')</script>";
			}
		}
	}
?>