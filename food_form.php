<!DOCTYPE html>
<html>
	<head>
	    <!--Import materialize.css-->
	    <link type="text/css" rel="stylesheet" href="assets/css/materialize.min.css" media="screen,projection" />
	    <link type="text/css" rel="stylesheet" href="assets/css/style.css" media="screen,projection" />

	    <!--Let browser know website is optimized for mobile-->
	    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
	</head>

	<body>
		<form action='food_form.php' method='POST' enctype='multipart/form-data'>
			Food Name <input type='text' name='fn'>
			Description <textarea name='desc'></textarea>
			Food Price <input type='text' name='fp'>
			Vendor<select name="vendor" class="browser-default">										
					<option value="0">- select -</option>
					<?php
						include ("food_class.php");
						$obj = new food();
						$obj ->get_vendors();
						$row = $obj->fetch();
						$i = 1;
						while ($row){
							echo "<option value='$row[user_id]'>$row[vendor]</option>";
							$row = $obj->fetch();
							$i++;	
						}
					?>
				</select>
			Type<select name="type" class="browser-default">										
					<option value="" disabled selected>- select -</option>
					<option value="1">Food</option>
					<option value="2">Snack</option>
				</select>
			Image<input type="file" name="fileToUpload" id="fileToUpload">
			<input type='submit' value='Add'>
			
		</form>

		<?php
			if(isset($_REQUEST['fn'])){
				$name = $_REQUEST['fn'];
				$desc = $_REQUEST['desc'];
				$price = $_REQUEST['fp'];
				$ven = $_REQUEST['vendor'];
				$type = $_REQUEST['type'];

				
				$target_dir = "assets\images\\";
				$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
				$uploadOk = 1;
				$img="";
				$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
				// Check if image file is a actual image or fake image
				if(isset($_POST["submit"])) {
				    $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
				    if($check !== false) {
				        echo "File is an image - " . $check["mime"] . ".";
				        $uploadOk = 1;
				    } else {
				        echo "File is not an image.";
				        $uploadOk = 0;
				    }
				}
				// Check if file already exists
				if (file_exists($target_file)) {
				    echo "Sorry, file already exists.";
				    $uploadOk = 0;
				}
				// Check file size
				if ($_FILES["fileToUpload"]["size"] > 500000) {
				    echo "Sorry, your file is too large.";
				    $uploadOk = 0;
				}
				// Allow certain file formats
				if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
				&& $imageFileType != "gif" ) {
				    echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
				    $uploadOk = 0;
				}
				// Check if $uploadOk is set to 0 by an error
				if ($uploadOk == 0) {
				    echo "Sorry, your file was not uploaded.";
				// if everything is ok, try to upload file
				} else {
				    if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
				    	$img = basename( $_FILES["fileToUpload"]["name"]);
				        echo "The file ".$img." has been uploaded.";
				    } else {
				        echo "Sorry, there was an error uploading your file.";
				    }
				}

				$obj = new food();				
				$obj ->add_food($name,$desc,$price,$ven,$type, $img);
			}
		?>
		<!--Import jQuery before materialize.js-->
	    <script type="text/javascript" src="assets/js/jquery-2.1.1.min.js"></script>
	    <script type="text/javascript" src="assets/js/materialize.min.js"></script>
	    <script type="text/javascript" src="assets/js/script.js"></script>
	</body>
</html>

