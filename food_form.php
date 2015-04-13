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

				// include_once ("food_class.php");
				$obj = new food();
				
				$obj ->add_food($name,$desc,$price,$ven,$type);
			}
		?>
		<!--Import jQuery before materialize.js-->
	    <script type="text/javascript" src="assets/js/jquery-2.1.1.min.js"></script>
	    <script type="text/javascript" src="assets/js/materialize.min.js"></script>
	    <script type="text/javascript" src="assets/js/script.js"></script>
	</body>
</html>

