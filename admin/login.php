<?php
include '../partials/db_connect.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin login - HMS NIT KKR</title>
    <link rel="shortcut icon" href="../image/logo.png" type="image/x-icon">
    <link rel="stylesheet" href="../css/signin.css">
</head>

<body>

    <div class="center">
        <h1>Login</h1>
        <?php
        if (isset($_SESSION['exist'])) {
            echo $_SESSION['exist'];
            unset($_SESSION['exist']);
        }
        ?>
        <form action="" method="post">
            <div class="txt_field">
                <label>User ID</label>
                <input name="user_id" type="text" required>
            </div>
            <div class="txt_field">
                <label>Password</label>
                <input name="password" type="password" required>
            </div>
            <input type="submit" value="Go Back" onclick="adminback()">
            <input type="submit" name="submit" value="Login" style="margin-bottom:30px;">
        </form>
    </div>
    <script src="../js/script.js"></script>
</body>

</html>

<?php

if (isset($_POST['submit'])) {
    $admin_id = $_POST['user_id'];
    $password = $_POST['password'];

    $sql = "SELECT * FROM `admin` WHERE admin_id = '$admin_id'";
    $result = mysqli_query($conn, $sql);
    $num = mysqli_num_rows($result);
    if ($num == 1) {
        while ($rows = mysqli_fetch_assoc($result)) {
            if ($password == $rows['admin_password']) {
                header("LOCATION:". SITEURL."admin/dashboard.php?id=".$admin_id);

            } else {
                $_SESSION['exist'] = "<div class='error'>Wrong Password</div>";
                header("location:" . SITEURL . 'admin/login.php');
            }
        }
    } 
}
?>