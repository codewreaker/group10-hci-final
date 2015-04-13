<?php
include_once("adb.php");
$obj = new adb();
$username = $_POST['pn'];
$pword = md5($_POST['pw']);
$str_query = "SELECT username, pword, vendor from c_credentials";
$count = mysql_num_rows($obj->query($str_query));
$row = $obj->fetch();
for($i=0;$i<$count;$i++){
    if($username==$row['username'] && $pword==$row['pword']){
      header('location:food.php');
      return;
  }
    $row = $obj->fetch();
}
header('location:index.php');
?>
