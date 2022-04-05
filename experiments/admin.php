<?php
	$db= mysqli_connect("localhost","root","","deWhales");
	if (!$db) {
		echo "yo!! connection problem with the database.";
	}


	include 'insert.php';

?>



<!DOCTYPE html>
<html>
<head>

	<style type="text/css">
		
		#container{
			background-color: lightgrey;
			width: 300px;
			border: 15px solid green;
			padding: 50px;
			margin: 20px;
		}

	</style>

	  <!-- css -->
    <link rel="stylesheet" type="text/css" href="css.css">


    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">


	<title>admin</title>



</head>
<body>


	<form action="admin.php" method="POST" enctype="multipart/form-data">


		<div class="mx-auto container-fluid" id="container">
		 	
			<h1 class="mx-auto my-5"> 

		  		<input type="text" name="title-name" placeholder="enter the title"><br>
		  	
		  	</h1>
			
			<p id="info">
			
				<input type="text" name="data" style="width: 600px; height: 150px; font-size: 30px;" placeholder="enter the paragraph (info) "><br>
				
				<label for="image" >Wallpaper</label>	<input type="file" required  name="image" placeholder="image"><br>
				
			</p>
				<hr>		
				<button type="submit" class="btn btn-primary btn-lg mx-auto" style="margin-left: 200px" name="button">login</button>
		</div>


	</form>



<!-- Bootstrap Bundle with Popper -->
 <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>


</body>
</html>