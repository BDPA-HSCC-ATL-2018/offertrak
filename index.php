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
      header("Location: forms/login.php")
    }


 ?>
