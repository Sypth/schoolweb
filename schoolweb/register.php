<?php

session_start();
  include ("functions.php");
  include 'database/validations.php';
    if($errors > 1){
    header('location:public/form_page.php');
    }
    if(empty($_POST['status'])){
        header('location:public/form_page.php');
    }
  $user_data = check_login($pdo);

        if (!$pdo) {
            die("Connection Failed");
        } else {
            $fname = $_POST['fname'];
            $lname = $_POST['lname'];
            $dob = $_POST['date'];
            $gender = $_POST['gender'];
            $apply = $_POST['apply'];
            $street_add = $_POST['street_add'];
            $street_add_2 = $_POST['street_add_2'];
            $city = $_POST['city'];
            $region = $_POST['region'];
            $postal_zip = $_POST['postal_zip'];
            $status = $_POST['status'];


            $add = $pdo->prepare("INSERT INTO student_app(fname, lname, dob, gender, apply, street_add, street_add_2, city, region, postal_zip, status) VALUES (:fname, :lname, :dob, :gender, :apply, :street_add, :street_add_2, :city, :region, :postal_zip, :status)");
            $add->bindValue(':fname', $fname);
            $add->bindValue(':lname', $lname);
            $add->bindValue(':dob', $dob);
            $add->bindValue(':gender', $gender);
            $add->bindValue(':apply', $apply);
            $add->bindValue(':street_add', $street_add);
            $add->bindValue(':street_add_2', $street_add_2);
            $add->bindValue(':city', $city);
            $add->bindValue(':region', $region);
            $add->bindValue(':postal_zip', $postal_zip);
            $add->bindValue(':status', $status);
            $add->execute();


            if ($add) {
                echo "Student Application Inserted Successfully!<br>";
                header("location:public/list.php");
            } else {
                echo "Insert Failed...";
            }
        }