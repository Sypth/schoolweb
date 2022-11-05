<?php
session_start();
include("../functions.php");

if ($_SERVER['REQUEST_METHOD'] == "POST") {
    //Something was posted
    $user_name = $_POST['user_name'];
    $password = $_POST['password'];

    if (!empty($user_name) && !empty($password)) {
        //save to data base
        $user_id = random_num(20);

        $query = $pdo->prepare("INSERT INTO account (user_id, user_name, password) VALUES (:user_id, :user_name, :password)");
        $query->bindValue(':user_id', $user_id);
        $query->bindValue(':user_name', $user_name);
        $query->bindValue(':password', $password);
        $query->execute();

        header("Location: login.php");
        die;
    } else {
        echo "Please enter some valid information.";
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

            <label>Username</label><br>
            <input id="text" type="text" name="user_name"><br><br>

            <label>Password</label><br>
            <input id="text" type="password" name="password"><br><br>


            <input type="submit" value="Create Account" class="btn btn-primary">

            <a href="login.php" class="btn btn-secondary">Go back</a>

        </form>
    </div>
<?php include '../inc/footer.php'; ?>