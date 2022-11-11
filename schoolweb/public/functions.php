<?php
if(isset($_GET['update'])){
    update();
}
// if($id != 0){
//     delete();
// }
#Login Checker
function check_login($dsn)
{
    if (isset($_SESSION['user_id'])) {

        $id = $_SESSION['user_id'];
        $query =$dsn->prepare("SELECT * FROM account WHERE user_id = :id LIMIT 1");
        $query->bindValue(':id', $id);
        $query->execute();
        $count = $query->rowCount();


        if ($query && $count > 0) {
            $user_data = $query->fetch(PDO::FETCH_ASSOC);
            return $user_data;
        }
    }

    // redirect to login
    header("Location: login.php");
    die;
}

#Unique ID Generator
function random_num($length)
{
    $text = "";

    if ($length < 5) {
        $length = 5;
    }

    $len = rand(4, $length);

    for ($i = 0; $i < $len; $i++) {
        $text .= rand(0, 9);
    }

    return $text;
}


#Updating table info in Database
function update(){
    include '../database/connection.php';
    if(!$pdo){
        die("Insert Failed...");
    } else{
        $id = $_GET['id'];
        $fname = $_GET['fname'];
        $lname = $_GET['lname'];
        $dob = $_GET['dob'];
        $gender = $_GET['gender'];
        $apply = $_GET['apply'];
        $year_level = $_GET['year_level'];
        $contact_num = $_GET['contact_num'];
        $email = $_GET['email'];
        $street_add = $_GET['street_add'];
        $street_add_2 = $_GET['street_add_2'];
        $city = $_GET['city'];
        $region = $_GET['region'];
        $postal_zip = $_GET['postal_zip'];
        $status = $_GET['status'];

        $sql = $pdo->prepare("UPDATE student_app SET fname = :fname, lname = :lname , dob = :dob , gender = :gender , apply = :apply , year_level =:year_level , contact_num =:contact_num , email =:email , street_add = :street_add , street_add_2 = :street_add_2 , city = :city , region = :region , postal_zip = :postal_zip , status = :status WHERE id = '$id'");
        $sql->bindValue(':fname', $fname);
        $sql->bindValue(':lname', $lname);
        $sql->bindValue(':dob', $dob);
        $sql->bindValue(':gender', $gender);
        $sql->bindValue(':apply', $apply);
        $sql->bindValue(':year_level', $year_level);
        $sql->bindValue(':contact_num', $contact_num);
        $sql->bindValue(':email', $email);
        $sql->bindValue(':street_add', $street_add);
        $sql->bindValue(':street_add_2', $street_add_2);
        $sql->bindValue(':city', $city);
        $sql->bindValue(':region', $region);
        $sql->bindValue(':postal_zip', $postal_zip);
        $sql->bindValue(':status', $status);
        $sql->execute();

        if($sql){
            header("location:list.php");
        } else{
            echo "List not updated!";
        }
    }
}

#Deleting table info in Database
function delete($id){
    include("database/connection.php");

    if(!$pdo){
        die("Connection Failed");
    } else {
        $del = $pdo->prepare("DELETE FROM student_app WHERE id = :id");
        $del->bindValue(':id', $id);
        $del->execute();
        if($del) {
            header("location:public/list.php");
        } else {
            echo "Not Deleted.";
        }
    }
}