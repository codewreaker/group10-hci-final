<?php
	include_once('adb.php');
	class food extends adb{
		function get_vendors(){
			$str_query="select user_id, vendor from c_credentials";
			return $this->query($str_query);
		}

		function add_food($name,$desc,$price,$ven,$type,$img){
			$str_query="insert into c_meals set meal_name='$name', meal_desc='$desc',
				meal_price='$price', meal_type='$type', vendor='$ven', image_name='$img'";
			return $this->query($str_query);
		}
	}
?>
