<?php
include '../partials/db_connect.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Response - NIT KKR</title>
    <link rel="shortcut icon" href="../image/logo.png" type="image/x-icon">
    <link rel="stylesheet" href="../css/student.css">
    <link rel="stylesheet" href="../css/leaverequest.css">
</head>

<body class="com_body">
    <?php
    $rollno = $_GET['s_id'];
    $com_id = $_GET['c_id'];
    $sql = "SELECT * FROM student_complains WHERE com_id = $com_id";
    $res = mysqli_query($conn, $sql);
    $count = mysqli_num_rows($res);
    if ($count == 1) {
        $rows = mysqli_fetch_assoc($res);
        $com_subject = $rows['com_subject'];
        $com_desc = $rows['com_desc'];
        $response = $rows['response'];
    }
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
    <div class="wrapper">
        <h2 class="text-center">Response</h2>
        <div class="complains">
            <h3>Subject :
                <?php echo $com_subject ?>
            </h3><br>
            <h3>Description : </h3>
            <p style="padding-top:5px;"><?php echo $com_desc ?></p>
            <br>
            <h3>Response : </h3>
            <p style="padding-top:5px;"><?php echo $response ?></p>

        </div>
    </div>

    <script src="../js/script.js"></script>
</body>
