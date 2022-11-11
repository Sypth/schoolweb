<?php
session_start();

if (isset($_SESSION['user_id'])) {
    unset($_SESSION['user_id']);
}

if(isset($_SESSION['visited_page'])){
    $_SESSION['last_visited'] = $_SESSION['visited_page'];
    unset($_SESSION['visited_page']);
}
$prev_page = $_SESSION['last_visited'];


session_destroy();
header("Location: ${prev_page}");
die;
