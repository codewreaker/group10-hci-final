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
		<form action='food_form.php' method='POST'>
			Food Name <input type='text'>
			Description <textarea></textarea>
			Food Price <input type='text'>
			Vendor<select name="vendor" class="browser-default">										
					<option value="0">- select -</option>
					<?php
						include ("food_class.php");
						$obj = new food();
						$obj ->get_vendors();
						$row = $obj->fetch();
						$i = 0;
						while ($row){
							echo "<option value='$i++'>$row[vendor]</option>";
							$row = $obj->fetch();	
						}
					?>
				</select>
			Type<select name="vendor" class="browser-default">										
					<option value="" disabled selected>- select -</option>
					<option value="1">Food</option>
					<option value="2">Snack</option>
				</select>
			Image<input>
			
		</form>
		<!--Import jQuery before materialize.js-->
	    <script type="text/javascript" src="assets/js/jquery-2.1.1.min.js"></script>
	    <script type="text/javascript" src="assets/js/materialize.min.js"></script>
	    <script type="text/javascript" src="assets/js/script.js"></script>
	</body>
</html>

