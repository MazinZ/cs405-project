<?php
    require_once "../dashboard/loginStaff.php";
    require "../database.php";
    session_start();
    function authenticate(){
        if(!isset($_SESSION['current_staff_id']) || !isset($_SESSION['current_staff_password']) || !loginStaff($_SESSION['current_staff_id'], $_SESSION['current_staff_password'], $conn)) {
            //return 0 means unsuccessful login
            return 0;
        }
        else {
            $authQuery = mysqli_query($conn, "SELECT * FROM Staff WHERE email ='".$email."'AND password = '" . $password."'");
            $result = mysqli_query($conn, $authQuery);
            $row = mysqli_fetch_row($result);
            if($row[3]) {
                //manager login
                return 2;
            }
            else{
                //staff login
                return 1;
            }
        }
    }

?>
