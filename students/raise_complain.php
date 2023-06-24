<?php
include '../partials/db_connect.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Dashboard- NIT KKR</title>
    <link rel="shortcut icon" href="../image/logo.png" type="image/x-icon">
    <link rel="stylesheet" href="../css/student.css">
</head>

<body class="complain">
    <?php
    $rollno = $_GET['id'];
    ?>
    <div class="nav-content">
        <div class="wrapper">
            <div class="nav-align">
                <div class="nav-logo">
                    <a href=""><img src="../image/logo.png" alt="NIT kkr Logo" style="background-color:white;"></a>
                </div>
                <div class="nav-links">
                    <ul class="text-center">
                        <li style="color:white;">Welcome,</li>
                        <li style="color:#01bf71;">
                            <?php echo $rollno; ?>
                        </li>
                        <button class="btn-primary res-btn" style="margin-left:2vw; margin-top:2.5vh;"
                            onclick="change2()">Logout</button>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="center">
        <div class="wrapper">
            <h2>Raise Your Complain</h2>
            <form action="" method="post" class="form">
                <div class="subject">
                    <label>Subject</label>
                    <input type="text" name="subject" placeholder="Enter Complain's Subject" required>
                </div>
                <div class="subject" style="border:none;">
                    <label>Complain</label>
                    <textarea rows="7" name="complain" placeholder="Enter Your Complain" required></textarea>
                </div>
                <center><input type="submit" name="csubmit" value="Submit"></center>
            </form>
        </div>
    </div>
    <script src="https://kit.fontawesome.com/313af96a2f.js" crossorigin="anonymous"></script>
    <script src="../js/script.js"></script>
</body>


<?php

    if(isset($_POST['csubmit'])){
        $com_subject = $_POST['subject'];
        $com_desc = $_POST['complain'];

        $sql = "INSERT INTO `student_complains` (student_roll, com_subject, com_desc) VALUES ('$rollno', '$com_subject', '$com_desc')";
        $res = mysqli_query($conn, $sql);

        if($sql){
            header("Location:". SITEURL."students/student_profile.php?id=".$rollno);
        }
    }


?>