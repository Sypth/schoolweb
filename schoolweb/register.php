<?php

session_start();
  include ("public/functions.php");
  include ("database/connection.php");


        if (!$pdo) {
            die("Connection Failed");
        } else {
            $fname = $_POST['fname'];
            $lname = $_POST['lname'];
            $dob = $_POST['date'];
            $gender = $_POST['gender'];
            $apply = $_POST['apply'];
            $contact_num = $_POST['contact_num'];
            $email = $_POST['email'];
            $year_level =$_POST['year_level'];
            $street_add = $_POST['street_add'];
            $street_add_2 = $_POST['street_add_2'];
            $city = $_POST['city'];
            $region = $_POST['region'];
            $postal_zip = $_POST['postal_zip'];
            $status = $_POST['status'];


            $add = $pdo->prepare("INSERT INTO student_app(fname, lname, dob, gender, apply, year_level, contact_num, email, street_add, street_add_2, city, region, postal_zip, status) VALUES (:fname, :lname, :dob, :gender, :apply, :year_level, :contact_num, :email, :street_add, :street_add_2, :city, :region, :postal_zip, :status)");
            $add->bindValue(':fname', $fname);
            $add->bindValue(':lname', $lname);
            $add->bindValue(':dob', $dob);
            $add->bindValue(':gender', $gender);
            $add->bindValue(':apply', $apply);
            $add->bindValue(':year_level', $year_level);
            $add->bindValue(':contact_num', $contact_num);
            $add->bindValue(':email', $email);
            $add->bindValue(':street_add', $street_add);
            $add->bindValue(':street_add_2', $street_add_2);
            $add->bindValue(':city', $city);
            $add->bindValue(':region', $region);
            $add->bindValue(':postal_zip', $postal_zip);
            $add->bindValue(':status', $status);
            $add->execute();


            if ($add) {
                header("location:public/list.php");
            } else {
                echo "Insert Failed...";
            }
        }