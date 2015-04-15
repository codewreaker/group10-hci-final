<?php

// Option 1 add_task
// Option 2 delete_task
// Option 3 edit_task
// Option 4 increase or decrease rating
// Option 5 delete_report
// Option 6 edit_report
// Option 7 fetch all contents
// Option 8 fetch report

// agatha changed case 3 and the update function at the bottom
$option = $_REQUEST['opt'];

switch($option){
    case 1:
        login();
        break;
    case 2:
         add_food();
        break;
    case 3:
        update_food();
        break;
    case 4:
        include_once("adb.php");
        $obj = new adb();
        $type = $_POST['type'];
        $val = $_POST['val'];
        $id = $_POST['id'];
        $str_query = "";
        if($type == "up"){
          $str_query = "UPDATE `c_meals` SET `rating_for`=$val WHERE `meal_id`=$id";
        }else if($type == "down" ){
           $str_query = "UPDATE `c_meals` SET `rating_against`=$val WHERE `meal_id`=$id";
        }
        if(!$obj->query($str_query)){
            echo '{"result":0,"message":"Failed to Update Rating"}';
            return;
        }else{
            echo '{"result":1,"message":"Updated Rating"}';
        }
        break;
    case 5:
        include_once("t_report.php");
        $obj = new t_task();
        break;
    case 6:
        include_once("t_report.php");
        $obj = new t_task();
        break;
    case 7:
        include_once("adb.php");
        $obj = new adb();
        $str_query = "SELECT * FROM c_meals";
        if(!$obj->query($str_query)){
            echo '{"result":0,"message":"failed to fetch data"}';
            return;
        }else{
            $row=$obj->fetch();
	       echo '{"result":1,"data":[';	/*start of json object*/
	       while($row){
		      echo json_encode($row);/*convert the result array to json object*/
		      $row=$obj->fetch();
		      if($row){
			     echo ",";					/*if there are more rows, add comma*/
		      }
	       }
	       echo "]}";
        }
        break;
    case 8:
        include_once("t_report.php");
        $obj = new t_report();
        $report_id = $_POST['report_id'];
        if(!$obj->view_report($report_id)){
            echo '{"result":0,"message":"failed to fetch report"}';
        }else{
            $row=$obj->fetch();
            echo '{"result":1,"report":';
            echo json_encode($row);
	        echo '}';
        }
        break;
    default:
}

/* A function that logs in with Ajax */
function login(){
    include_once("adb.php");
        $obj = new adb();
        $username = $_POST['pn'];
        $pword = md5($_POST['pw']);
        $str_query = "SELECT username, pword, vendor from c_credentials";
        $count = mysql_num_rows($obj->query($str_query));
        $row = $obj->fetch();
        for($i=0;$i<$count;$i++){
            if($username==$row['username'] && $pword==$row['pword']){
                echo '{"result":1,"message":"successfully logged in"}';
                return;
            }
            $row = $obj->fetch();
            }
            echo '{"result":0,"message":"failed to login"}';
}

/* A function that allows you to add food to the database */
function add_food(){
    include_once("food_class.php");
				$name = $_POST['fn'];
				$desc = $_POST['desc'];
				$price = $_POST['fp'];
				$ven = $_POST['vendor'];
				$type = $_POST['type'];
				$img = $_POST['image'];
				$obj = new food();
                if(!$obj->add_food($name,$desc,$price,$ven,$type,$img)){
                    echo '{"result":0,"message":"failed to Add"}';
                }else{
                     echo '{"result":1,"message":"Success"}';
                }
			}

    /* A function that allows you to update food to the database */
function update_food(){
    include_once("food_class.php");
                $id = $_POST['id'];
                $name = $_POST['fn'];
                $desc = $_POST['desc'];
                $price = $_POST['fp'];
                $ven = $_POST['vendor'];
                $type = $_POST['type'];
                $img = $_POST['image'];
                $obj = new food();
                if(!$obj->update_meal($id,$name,$desc,$price,$ven,$type,$img)){
                    echo '{"result":0,"message":"failed to update"}';
                }else{
                     echo '{"result":1,"message":"Success"}';
                }
            }

?>
