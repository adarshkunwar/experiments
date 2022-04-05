<?php

	$conn = mysqli_query($db, "SELECT * FROM homepagecontent ORDER BY id DESC LIMIT 1");
	
	if(mysqli_num_rows($conn)>0)
	{
		while($row = mysqli_fetch_array($conn))
		{
			echo $row['data'] . "<br>";

		}
	}
	

if (isset($_POST['button'])) {
	// echo "file test";
	$newUser= $_POST['data'];
	$file= $_FILES['image'];
	

	// print_r($file);
	$fileName= $_FILES['image']['name'];
	$fileTmpName= $_FILES['image']['tmp_name'];
	$fileSize= $_FILES['image']['size'];
	$fileError= $_FILES['image']['error'];
	$fileType= $_FILES['image']['type'];

 

	$fileExt = explode('.', $fileName);
	$fileActualExt = strtolower(end($fileExt));


	$allowed = array('jpg','jpeg','png');

	if (in_array($fileActualExt, $allowed)) 
	{	
		echo "test done";
		
		if ($fileError === 0) 
		{
			if ($fileSize < 1000000)
			{
				
				/* this is where the code works */
				$img ="" ;
				$newImage = $fileExt[0].".".$fileActualExt;
				$path = "resources/uploads/".$newImage;
				  
				if(move_uploaded_file($fileTmpName,$path))
				{
	                $img = $newImage;
	                $newRecord = "INSERT INTO homepagecontent(`data`,`image`) VALUES('$newUser','$img');";
	                $afterUpload = mysqli_query($db,$newRecord);
	                if ($afterUpload) 
	                {
	                 	echo "success";
	                }
	                else
	                {
	                	echo mysqli_error();
	                }
	            }
	            else
	            {
	            	echo "Somthing cause issue!!";
	            }
			}
			else
			{
				echo "your file is too big";
			}

		}
		else
		{
			echo "there was an error uploading your file";
		}
	}
	else
	{
		echo "you cannot upload the file of this type";
	}


}
?>