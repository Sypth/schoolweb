<?php
session_start();
include_once('../database/connection.php');
include_once("functions.php");

if ($_SERVER['REQUEST_METHOD'] == "POST") {
    //Something was posted
    $user_name = $_POST['user_name'];
    $password = $_POST['password'];

    if (!empty($user_name) && !empty($password)) {
        //Read from database    
        $query = $pdo->prepare("SELECT * FROM account WHERE user_name = :user_name limit 1");
        $query->bindValue(':user_name', $user_name);
        $query->execute();
        $count = $query->rowCount();
        
        if ($query) {

            if ($query && $count > 0) {

                $user_data = $query->fetch(PDO::FETCH_ASSOC);
                    if ($user_data['password'] === $password) {
                        
                        $_SESSION['user_id'] = $user_data['user_id'];
                        header('location:main_page.php');
                        die;
                    }
            }
        }
    } else {
        echo "Please enter some valid information.";
    }
}
?>
    <?php include '../inc/header.php'; ?>
    <link rel="stylesheet" href="../CSS/sign_in_design.css">
    <title>Login</title>
</head>

<body>
    <div id="box">

        <form action="" method="POST">
            <div align="center" style="font-size: 20px; margin: 10px;">Login</div>

            <label>Username</label><br>
            <input id="text" type="text" name="user_name"><br><br>

            <label>Password</label><br>
            <input id="text" type="password" name="password"><br><br>

            <input type="submit" value="Login" name="login" class="btn btn-success"><br><br>

            Dont have an account?<br>
        </form>

        <div>
            <a href="signup.php" class="btn btn-primary">Sign Up</a>
        </div>

        <br>

        <div style="color: red;">
            <?php
            if (!empty($user_name) && !empty($password)) {
                echo "Wrong username or password! Please try again.";
            }
            ?>
        </div>


    </div>
<?php include '../inc/footer.php'; ?>