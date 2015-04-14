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
    <div class="fixed-action-btn" style="position:absolute; top: 50px; right:9%;">
        <div class="button-floating btn-floating btn-large red" id="add-form">
            <i class="mdi-content-add"></i>
        </div>
    </div>
    <div class="flow-text" id="info-layer">
        <div class="card">
            Click Button to Add A Meal
        </div>
    </div>
    <div class="container" id="hidden-layer">
        <div class="card">
            <div class="upload-section">

                <!-- Form Section -->
                <div class="row">
                    <div class="col s10">
                        <div class="row">
                            <div class="input-field col s10">
                                <input id="food-name" type="text" class="validate">
                                <label for="food-name">Food Name</label>
                            </div>
                            <div class="input-field col s10">
                                <input id="food-price" type="text" class="validate">
                                <label for="food-price">Food Price</label>
                            </div>
                            <div class="row">
                                <div class="input-field col s10">
                                    <textarea id="desc" class="materialize-textarea"></textarea>
                                    <label for="desc">Description</label>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="input-field col s10">
                                <label for="food-vendor">Select Vendor</label>
                                <select id="food-vendor" class="browser-default">
                                    <option value="0">- select -</option>
                                    <option value="1">Akornor</option>
                                    <option value="2">Mannies</option>
                                    <option value="3">Services</option>
                                </select>
                            </div>
                        </div>
                        <div class="row">
                            <div class="input-field col s10">
                                <label for="food-type">Food Type</label>
                                <select id="food-type" class="browser-default">
                                    <option value="" selected>- select -</option>
                                    <option value="1">Food</option>
                                    <option value="2">Snack</option>
                                </select>
                            </div>
                        </div>
                        <div class="row">
                            <div class="input-field col s10">
                                <div class="main">
                                    <form id="uploadimage" enctype="multipart/form-data">
                                        <div id="image_preview">
                                            <img id="previewing"  />
                                        </div>
                                        <div id="selectImage">
                                            <br/>
                                            <input type="file" name="file" id="file" required/>
                                            <button value="Upload" class=" btn  btn-medium waves-effect waves-light">
                                                Upload<i class="mdi-editor-attach-file right"></i>
                                            </button>
                                        </div>
                                    </form>
                                </div>
                                <h4 id='loading'></h4>
                                <div id="message"></div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="input-field col s10">
                                <div class="btn waves-effect waves-light" id="save-food">Submit
                                    <i class="mdi-content-send right"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--  <form action='food_form.php' method='POST' enctype='multipart/form-data'>
			<div class="row">
                                    <div class="input-field col s12 ">
                                        <i class="mdi-action-account-circle prefix"></i>
                                        <input  name="fn" type="text" class="validate">
                                        <label for="first_name">Food Name</label>
                                    </div>
                                </div>
			<div class="row">
        <div class="input-field col s12">
          <textarea name="desc" class="materialize-textarea"></textarea>
          <label for="textarea1">Description</label><div class="row">
                    </div>
                </div>
                        </div>
			<div class="row">
                                    <div class="input-field col s12 ">
                                        <i class="mdi-action-account-circle prefix"></i>
                                        <input  name="fp" type="text" class="validate">
                                        <label for="food price">Food Price</label>
                                    </div>
                                </div>
			Vendor<select name="vendor" class="browser-default">										
					<option value="0">- select -</option>
					<option value="1">Akornor</option>
					<option value="2">Mannies</option>
					<option value="3">Services</option>
				</select>
			Type<select name="type" class="browser-default">										
					<option value="" disabled selected>- select -</option>
					<option value="1">Food</option>
					<option value="2">Snack</option>
				</select>
			Image<input type="file" name="fileToUpload" id="fileToUpload">
			<input type='submit' value='Add'>
			
		</form> -->

                <!--		<?php
//            include_once("operations/food_class.php");
//			if(isset($_REQUEST['fileToUpload'])){
//				$target_dir = "assets\images\\";
//				$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
//				$uploadOk = 1;
//				$img="";
//				$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
//				// Check if image file is a actual image or fake image
//				if(isset($_POST["submit"])) {
//				    $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
//				    if($check !== false) {
//				        echo "File is an image - " . $check["mime"] . ".";
//				        $uploadOk = 1;
//				    } else {
//				        echo "File is not an image.";
//				        $uploadOk = 0;
//				    }
//				}
//				// Check if file already exists
//				if (file_exists($target_file)) {
//				    echo "Sorry, file already exists.";
//				    $uploadOk = 0;
//				}
//				// Check file size
//				if ($_FILES["fileToUpload"]["size"] > 700000) {
//				    echo "Sorry, your file is too large.";
//				    $uploadOk = 0;
//				}
//				// Allow certain file formats
//				if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
//				&& $imageFileType != "gif" ) {
//				    echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
//				    $uploadOk = 0;
//				}
//				// Check if $uploadOk is set to 0 by an error
//				if ($uploadOk == 0) {
//				    echo "Sorry, your file was not uploaded.";
//				// if everything is ok, try to upload file
//				} else {
//				    if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
//				    	$img = basename( $_FILES["fileToUpload"]["name"]);
//				        echo "The file ".$img." has been uploaded.";
//				    } else {
//				        echo "Sorry, there was an error uploading your file.";
//				    }
//				}
//
//				$obj = new food();
//				$obj ->add_food($name,$desc,$price,$ven,$type, $img);
//			}
		?> -->
            </div>
        </div>
    </div>
    <!--Import jQuery before materialize.js-->
    <script type="text/javascript" src="assets/js/jquery-2.1.1.min.js"></script>
    <script type="text/javascript" src="assets/js/materialize.min.js"></script>
    <script type="text/javascript" src="assets/js/script.js"></script>
    <script type="text/javascript" src="assets/js/ajax.js"></script>
    <script src="assets/js/upload.js"></script>
</body>

</html>

