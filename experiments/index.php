<!-- there are several aspects of this page that are not as I wanted, this is because if we follow everything I want then this will turn into a centralized database projects. But for help I did add my plans with comment on what I wanted, try your best to incorporate them -->


<?php
	$db= mysqli_connect("localhost","root","","deWhales");
	if (!$db) {
		echo "yo!! connection problem with the database.";
	}


	$conn = mysqli_query($db, "SELECT * FROM homepagecontent ORDER BY id DESC LIMIT 1");
	
	if(mysqli_num_rows($conn) > 0)
	{
		while($row = mysqli_fetch_array($conn))
		{
			$data = $row['data'];
			$image = $row['image'];
		}
	}
	else
	{
		echo "hi";
	}
	

?>




<!doctype html>
<html lang="en">

  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <style type="text/css">
    	.hi{
    		background-image: url('<?php echo "resources/uploads/" . $image; ?>');
    		background-size: 1500px;

    		#container{

			}


#main-title{
	width: 200px;

}

#info{
	/*this is where you change the style for the info*/
}


@media only screen and (max-width: 600px){

	.hi{
    		/*background-image: url("Resources/background3.jpg");*/
    		width: 100%;
    		height: 100%;
    }

	#container{
		width: 100%;
		padding-left: 50px;
		padding-right: 50px;
	}

	#main-title{

		width: 200px;
	}

}

@media only screen and (min-width: 600px){
		#container{
		width: 100%;
		padding-left: 150px;
		padding-right: 150px;
	}
	}

    	}
    </style>


    <!-- css -->
   <!--  <link rel="stylesheet" type="text/css" href="css.css"> -->


    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>DeWhales</title>
  </head>




  <body class="hi">





<!-- nav-->
<nav class="navbar sticky-top navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">deWhales</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Home</a>
        </li>
       
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            season
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
           	<!-- I wanted to make it so that admin could choose to add more pages but that would mean I have to keep them in database and that basically is the definition of centralized system -->
           	<li><a class="dropdown-item" href="#">1</a></li>
            <li><a class="dropdown-item" href="#">2</a></li>
			
          </ul>
        </li>
       
      </ul>
      <form class="d-flex">

      	<!-- the main idea was to let user choose the NFT individually. Well I dont see how we can do that without a databse -->
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form>
    </div>
  </div>
</nav>



<div class="mx-auto" id="container" style="	margin-top: 150px; margin-left: 150px;">
  <h1 class="mx-auto my-5" id="main-title" style="font-size: 50px"> <center>deWhales </center> </h1>
<p id="info" style="text-align: center;"><?php echo "$data"?></p>
<hr>
<button type="button" class="btn btn-primary btn-lg mx-auto" style="margin-left: 200px">login</button>
</div>




<!-- Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>








  </body>


</html>