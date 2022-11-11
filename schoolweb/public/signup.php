<?php
session_start();
include("functions.php");
include("../database/connection.php");
$error = "";
if ($_SERVER['REQUEST_METHOD'] == "POST") {
    //Something was posted
    $user_name = $_POST['user_name'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $confirm_password = $_POST['confirm_password'];

    if (!empty($user_name)) {
        
        if($password == $confirm_password){
                //save to data base
                $user_id = random_num(20);

                $query = $pdo->prepare("INSERT INTO account (user_id, user_name, email, password) VALUES (:user_id, :user_name, :email, :password)");
                $query->bindValue(':user_id', $user_id);
                $query->bindValue(':user_name', $user_name);
                $query->bindValue(':email', $email);
                $query->bindValue(':password', $password);
                $query->execute();

                header("Location: login.php");
                die;
    } else {
        $error = "misspass";
    }
    } else {
        $error = "user_pass";
    }
}
?>
    <?php include '../inc/header.php';?>
    <link rel="stylesheet" href="../CSS/sign_in_design.css">
    <title>Sign Up</title>
</head>

<body>
    <div id="box">

        <form action="" method="POST">
            <div align="center" style="font-size: 20px; margin: 10px;">Sign Up</div>

            Username<br>
            <input id="text" type="text" name="user_name"><br><br>
            
            Email<br>
            <input id="text" type="text" name="email"><br><br>

            Password<br>
            <input id="text" type="password" name="password"><br><br>
            
            Confirm Password<br>
            <input id="text" type="password" name="confirm_password"><br><br>


            <input type="submit" value="Create Account" class="btn btn-primary">

            <a href="login.php" class="btn btn-secondary">Go back</a>

        </form>
        <div style="color: red;">
        <?php 

            if($error == "misspass"){
                echo "Password didn't matched! Please try again";
                $error = "";
            } elseif($error == "user_pass") {
                echo "There is an error on username or password! Please try again.";
            }
        
        ?>
        </div>
    </div>
<?php include '../inc/footer.php'; ?>