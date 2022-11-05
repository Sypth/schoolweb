<?php
session_start();
include("functions.php");

  $user_data = check_login($pdo);
  $id = $_GET['id'];
  delete($id);