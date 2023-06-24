<?php
include 'partials/db_connect.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Signin - HMS NIT KKR</title>
    <link rel="shortcut icon" href="image/logo.png" type="image/x-icon">
    <link rel="stylesheet" href="css/signin.css">
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
        <form action="signin.php" method="post">
            <div class="txt_field">
                <label>Roll Number</label>
                <input name="rollno" type="text" pattern="[0-9]{8}" required>
            </div>
            <div class="txt_field">
                <label>Password</label>
                <input name="password" type="password" required>
            </div>
            <input type="submit" value="Go Back" onclick="back()">
            <input type="submit" name="submit" value="Login">
            <div class="signup_link">
                Not a member? <a href="signup.php">Signup</a>
            </div>
        </form>
    </div>
    <script src="js/script.js"></script>
</body>

</html>

<?php

if (isset($_POST['submit'])) {
    $rollno = $_POST['rollno'];
    $password = $_POST['password'];

    $sql = "SELECT * FROM students WHERE student_roll = '$rollno'";
    $result = mysqli_query($conn, $sql);
    $num = mysqli_num_rows($result);
    if ($num == 1) {
        while ($rows = mysqli_fetch_assoc($result)) {
            if (password_verify($password, $rows['student_pass'])) {
                $sql2 = "SELECT * FROM students WHERE student_roll='$rollno'";
                $res2 = mysqli_query($conn, $sql2);
                if ($res2) {
                    $count2 = mysqli_num_rows($res2);
                    if ($count2 == 1) {
                        $rows = mysqli_fetch_assoc($res2);
                        $hostel_no = $rows['hostel_no'];
                        if ($hostel_no != null) {
                            header("location:" . SITEURL . 'students/student_profile.php?id=' . $rollno);
                        } else {
                            header("location:" . SITEURL . 'about_hostel.php?id='.$rollno);
                        }
                    }
                }

            } else {
                $_SESSION['exist'] = "<div class='error'>Wrong Password</div>";
                header("location:" . SITEURL . 'signin.php');
            }
        }
    } else {
        $_SESSION['exist'] = "<div class='error'>User Not Found</div>";
        header("location:" . SITEURL . 'signin.php');
    }
}
?>