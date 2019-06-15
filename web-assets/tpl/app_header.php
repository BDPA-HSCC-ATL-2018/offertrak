<?php session_start();
error_reporting(E_ALL);
ini_set("log_errors" , "1");
ini_set("error_log" , "error_log");
ini_set("display_errors" , "1");
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="/web-assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="/web-assets/css/bdpa.css">
    <title><?php echo $page_title; ?></title>
  </head>
  <body>
    <?php include_once $_SERVER['DOCUMENT_ROOT'] . "/lib/db.php"; ?>
