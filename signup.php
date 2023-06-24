<?php include 'partials/db_connect.php'; ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Signup - HMS NIT KKR</title>
    <link rel="shortcut icon" href="image/logo.png" type="image/x-icon">
    <link rel="stylesheet" href="css/signup.css">
</head>

<body>
    <div class="container">
        <div class="title">Sign Up</div>
        <?php
            if(isset($_SESSION['exist']))
            {
                echo $_SESSION['exist'];
                unset($_SESSION['exist']);
            }
        ?>
        <div class="content">
            <form action="" method="post">
                <div class="user-details">
                    <div class="input-box">
                        <span class="details">Full Name</span>
                        <input name="name" type="text" placeholder="Enter your name" required>
                    </div>
                    <div class="input-box">
                        <span class="details">Roll No</span>
                        <input type="text" placeholder="Enter your roll no" name="rollno" pattern="[0-9]{8}" required>
                    </div>
                    <div class="input-box">
                        <span class="details">Email</span>
                        <input type="text" placeholder="Enter your email" name="email" required>
                    </div>
                    <div class="input-box">
                        <span class="details">Phone Number</span>
                        <input type="text" placeholder="Enter your number" name="phoneno" pattern="[0-9]{10}" required>
                    </div>
                    <div class="input-box">
                        <span class="details">Password</span>
                        <input type="password" placeholder="Enter your password" name="password" required>
                    </div>
                    <div class="input-box">
                        <span class="details">Confirm Password</span>
                        <input type="password" placeholder="Confirm your password" name="confirmpassword" required>
                    </div>
                </div>
                <div class="gender-details">
                    <span class="gender-title">Gender</span>
                    <div class="category">
                        <label for="dot-1">
                            <input type="radio" name="gender" id="dot-1" class="dot" value="Male">
                            <span class="gender">Male</span>
                        </label>
                        <label for="dot-2">
                            <input type="radio" name="gender" id="dot-2" class="dot" value="Female">
                            <span class="gender">Female</span>
                        </label>
                    </div>
                </div>
                <div class="button">
                    <input type="submit" value="Go Back" onclick="back()">
                    <input type="submit" value="SignUp" name="submit" style="margin-left:85px;">
                </div>
            </form>
        </div>
    </div>
    <script src="js/script.js"></script>
</body>

</html>


<?php
if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $rollno = $_POST['rollno'];
    $email = $_POST['email'];
    $phoneno = $_POST['phoneno'];
    $password = $_POST['password'];
    $cpassword = $_POST['confirmpassword'];
    $gender = $_POST['gender'];

    $existsql = "SELECT * FROM students WHERE student_roll = '$rollno'";
    $result = mysqli_query($conn, $existsql);
    $numExistRows = mysqli_num_rows($result);
    if ($numExistRows > 0) {
        $_SESSION['exist']="<div class='error'>User already Exist.</div>";
        header("location:" . SITEURL . 'signup.php');
    } else {
        if ($password == $cpassword) {
            $hash = password_hash($password, PASSWORD_DEFAULT);
            $sql = "INSERT INTO `students` (`student_roll`, `student_name`, `student_email`, `student_phone`, `student_pass`,`gender`) VALUES ('$rollno','$name','$email','$phoneno','$hash','$gender')";
            $result = mysqli_query($conn, $sql);
            if ($result) {
                header("location:" . SITEURL . 'about_hostel.php?id='.$rollno);
            }
        } else {
            $_SESSION['exist']="<div class='error'>Password didn't Match.</div>";
            header("location:" . SITEURL . 'signup.php');
        }
    }
}
?>