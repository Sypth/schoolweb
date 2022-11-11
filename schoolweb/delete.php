<?php
session_start();
include("database/connection.php");
include("public/functions.php");

  $user_data = check_login($pdo);
  $id = $_GET['id'];
  delete($id);