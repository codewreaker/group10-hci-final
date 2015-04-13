<?php
include_once("adb.php");
$obj = new adb();
if($obj->connect()){
    echo "Connected";
}else{
    echo "could not connect";
};

$str_query = "SELECT username, password, from hciproject"
?>
