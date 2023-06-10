<?php
    include("connection.php");
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="adminlogin.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <title>Admin Login</title>

</head>

<body>
    <h1 class="admin_title"> <span
            style="font-size: 20px; letter-spacing: 70px; align-items: center; margin-left: 75px;">WELCOME</span>
        <br> <span style="color: var(--maincolor); font-size: 65px;">TO ADMIN PAGE</span>
    </h1>
    <div class="login_form">

        <div class="login">
            <h2>Admin Login</h2>
            <form method="post">
                <div class="input-field">
                    <i class="bi bi-person-circle"></i>
                    <input type="text" name="user" placeholder="username">
                </div>
                <div class="input-field">
                    <i class="bi bi-shield-lock"></i>
                    <input type="password" name="adminpass" placeholder="password">
                </div>

                <button type="submit" name="signin">Sign In</button>

                <div class="extra">
                    <a href="#">Forgot Password ?</a>
                </div>

            </form>
        </div>
    </div>
</body>

</html>

<?php

 include("connection.php");

    if(isset($_POST['signin'])){

    $query = "SELECT * FROM `admin_login` WHERE `Admin_Name`='$_POST[user]'AND `Password`='$_POST[adminpass]'";

    $result = mysqli_query($con,$query);

    if(mysqli_num_rows($result)==1){

        session_start();
        $_SESSION['AdminLoginId'] = $_POST['Admin_Name'];
        header("location:adminPannel.html");
    }else{
        echo '<script> 
        alert("Incorrect Password");
        </script>';
    }
}

?>