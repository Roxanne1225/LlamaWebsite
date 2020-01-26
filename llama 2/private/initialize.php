<?php
  ob_start(); // output buffering is turned on
  require_once('database.php');
  require_once('functions.php');
  // require_once('query_functions.php');
  // $DATABASE_HOST = '127.0.0.1';
  // $DATABASE_USER = '3271042_todologin';
  // $DATABASE_PASS = 'SanToria0515';
  // $DATABASE_NAME = 'todologin';

  // echo WWW_TODOLOGIN_ROOT;

  define("WWW_ROOT", 'http://roxanne-chen.dx.am/llama/');
  $db = db_connect();

?>
