<?php
session_start();
/* A function that logs in with Ajax */
$option = $_REQUEST['opt'];

switch($option){
    case 0:
        default_option(); 
        break;
    case 1:
        login();
        break;
    case 2:
        logout();
        break;
    case 3:
        return_session_details();
        break;
    default:
}

function default_option(){
    $_SESSION["username"] = "GUEST";
    $_SESSION["password"] = "";
    $_SESSION["vendor"]=$_POST['vendor'];
    $_SESSION["user_id"]=0;  
    echo '{"result":1,"session":[';
    echo json_encode($_SESSION);
    echo ']}';
}

function login(){
    include_once("adb.php");
        $obj = new adb();
        $username = $_POST['pn'];
        $pword = md5($_POST['pw']);
        $str_query = "SELECT user_id, username, pword, vendor from c_credentials";
        $count = mysql_num_rows($obj->query($str_query));
        $row = $obj->fetch();
        for($i=0;$i<$count;$i++){
            if($username==$row['username'] && $pword==$row['pword']){
                echo '{"result":1,"message":"successfully logged in"}';
                $_SESSION["username"] = $username;
                $_SESSION["password"] = $pword;
                $_SESSION["vendor"]=$row['vendor'];
                $_SESSION["user_id"]=$row['user_id'];
                return;
            }
            $row = $obj->fetch();
            }
            echo '{"result":0,"message":"failed to login"}';
}


/* A function that logs out but sets the user to guest  with Ajax */
function logout(){
        $_SESSION["username"] = "GUEST";
        $_SESSION["password"] = "";
        $_SESSION["vendor"]=$row['vendor'];
        $_SESSION["user_id"]=0;                
    echo '{"result":1,"message":"successfully logged out"}';
    return;
}

/* A function that returns session details */
function return_session_details(){
        $username = $_SESSION["username"];
        $pword = $_SESSION["password"];
        $vendor = $_SESSION["vendor"];
        $user_id = $_SESSION["user_id"];
        echo '{"result":1,"session":[';
        echo json_encode($_SESSION);
        echo ']}';
}

?>