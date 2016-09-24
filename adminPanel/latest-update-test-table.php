
<?php

	error_reporting( ~E_NOTICE ); // avoid notice
	
	require_once 'dbconfig.php';
	
	
	if(isset($_POST['submit']))
	{

		$imgFile = $_FILES['user_image']['name'];
		$tmp_dir = $_FILES['user_image']['tmp_name'];
		$imgSize = $_FILES['user_image']['size'];
		
		$ordering = $_POST['ordering'];// ordering
		$contenttitle = $_POST['contenttitle'];// contenttitle
		$description = $_POST['description'];// description
		
		
		
		if(empty($ordering)){
			$errMSG = "Please Enter ordering.";
		}
		else if(empty($contenttitle)){
			$errMSG = "Please Enter Your contenttitle.";
		}
		else if(empty($description)){
			$errMSG = "Please Enter Your description.";
		}
		else if(empty($imgFile)){
			$errMSG = "Please Select Image File.";
		}
		else
		{
			$upload_dir = 'LatestUpdate'; // upload directory
	
			$imgExt = strtolower(pathinfo($imgFile,PATHINFO_EXTENSION)); // get image extension
		
			// valid image extensions
			$valid_extensions = array('jpeg', 'jpg', 'png', 'gif'); // valid extensions
		
			// rename uploading image
			$userpic = rand(1000,1000000).".".$imgExt;
				
			// allow valid image file formats
			if(in_array($imgExt, $valid_extensions)){			
				// Check file size '5MB'
				if($imgSize < 5000000)				{
					move_uploaded_file($tmp_dir,$upload_dir.$userpic);
				}
				else{
					$errMSG = "Sorry, your file is too large.";
				}
			}
			else{
				$errMSG = "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";		
			}
		}
		// if no error occured, continue ....
		if(!isset($errMSG))
		{
				$sql = "INSERT INTO test(ordering,contenttitle,description,LatestImage)
				VALUES ('$ordering','$contenttitle','$description','$userpic')";

				if ($con->query($sql) === TRUE) {
					echo "New record created successfully";
				} else {
					echo "Error: " . $sql . "<br>" . $con->error;
				} 
		}
	}
?>