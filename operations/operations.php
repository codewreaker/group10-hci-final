<?php

// Option 1 add_task
// Option 2 delete_task
// Option 3 edit_task
// Option 4 add_report
// Option 5 delete_report
// Option 6 edit_report
// Option 7 fetch all contents
// Option 8 fetch report
$option = $_REQUEST['opt'];

switch($option){
    case 1:
        login();
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
        include_once("t_report.php");
        $obj = new t_report();
        $report_id = $_POST['rid'];
        $limitations = $_POST['lim'];
        $errors = $_POST['err'];
        $status = $_POST['st'];
        if(!$obj->add_report($report_id, $limitations,$errors,$status)){
            echo '{"result":0,"message":"Failed to Add Report"}';
            return;
        }else{
            echo '{"result":1,"message":"Your Report has been added"}';
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
        include_once("t_task.php");
        $obj = new t_task();
        if(!$obj->get_task()){
            echo '{"result":0,"message":"failed to fetch data"}';
            return;
        }else{
            $row=$obj->fetch();
	       echo '{"result":1,"tasks":[';	/*start of json object*/
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

?>
