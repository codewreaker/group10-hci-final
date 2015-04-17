<?php

// Option 1 login
// Option 2 add food
// Option 3 edit_food
// Option 4 increase or decrease rating
// Option 5 set availabity
// Option 6 session_settings
// Option 7 fetch all contents
// Option 8 fetch report
$option = $_REQUEST['opt'];
session_start();

switch($option){
    case 1:
        break;
    case 2:
         add_food();
        break;
    case 3:
        include_once("t_task.php");
        $obj = new t_task();
        $task_id = $_POST['task_id'];
        $task_name = $_POST['tn'];
        $description = $_POST['desc'];
        $task_personnel=$_POST['tp'];
        $due_date = $_POST['td'];
        if(!$obj->edit_task($task_id,$task_name, $description, $task_personnel, $due_date)){
            echo '{"result":0,"message":"Failed to Update Task"}';
            return;
        } else{
            echo '{"result":1,"message":"Succesfully Updated Task"}';
        }
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
        break;
    case 6:
        break;
    case 7:
        fetch_all_contents();
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

function fetch_all_contents(){
     include_once("adb.php");
        $obj = new adb();
        $vendor = $_POST['vendor'];
        $str_query = "SELECT * FROM c_meals WHERE vendor=$vendor";
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
}

?>
