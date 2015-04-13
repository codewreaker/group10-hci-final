<?php
	include_once('adb.php');
	class food extends adb{
		function get_vendors(){
			$str_query="select vendor from c_credentials";
			return $this->query($str_query);
		}
	}
?>