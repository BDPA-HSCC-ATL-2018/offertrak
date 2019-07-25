<?php
  session_start()
  include_once $_SERVER['DOCUMENT_ROOT'] . "/offertrack/db.php";

  $action = isset($_REQUEST['action']) ? $_REQUEST['action'] : null;

  $options = array (
    'signup' => 'signup',
    'login' => 'login',
    'jobapplicantlist' => 'jobapplicantlist',
    'jobapplicantreport' => 'jobapplicantreport',
    'edituser' => 'edituser',
    'logout' => 'logout',
    'admin' => 'admin'
    //Dont know how to break down the whole admin thing
  );
  if (array_key_exists($action , $options)) {
      $function = $options($action);
      call_user_func($function);
    } else {
      header("Location: forms/login.php");
    }

  //I think this is basic password validation based off ww3 schools
   function validPassword($pw) {
     if (!preg_match_all('$\5*(?=\5*[a-z])(?=\5*[a-z])(?=\5*[A-Z])(?=\S*[\d])(?=\S*[\W])\S*$', $pw)) {
        return false;
     } else {
       return true;
     }
   }

   //Sign Up form
   function signup() {
     global $dbh;
     $last_name = $_REQUEST['last_name'];
     $first_name = $_REQUEST['first_name'];
     $filling_status = $_REQUEST['']
   }

 ?>
