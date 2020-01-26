<?php

// require_once('credentials.php');

  // $DATABASE_HOST = 'localhost';
  // $DATABASE_USER = '3271042_todologin';
  // $DATABASE_PASS = 'SanToria0515';
  // $DATABASE_NAME = '3271042_todologin';

  define("DB_SERVER", "fdb24.awardspace.net");
  define("DB_USER", "3271042_todologin");
  define("DB_PASS", "SanToria0515");
  define("DB_NAME", "3271042_todologin");

  function db_connect() {
    $connection = mysqli_connect(DB_SERVER, DB_USER, DB_PASS, DB_NAME);
    confirm_db_connect();
    return $connection;
  }

  function db_disconnect($connection) {
    if(isset($connection)) {
      mysqli_close($connection);
    }
  }

  function confirm_db_connect() {
    if(mysqli_connect_errno()) {
      $msg = "Database connection failed: ";
      $msg .= mysqli_connect_error();
      $msg .= " (" . mysqli_connect_errno() . ")";
      exit($msg);
    }
  }

  function confirm_result_set($result_set) {
    if (!$result_set) {
    	exit("Database query failed.");
    }
  }

?>
