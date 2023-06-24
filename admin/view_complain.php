<?php
include '../partials/db_connect.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Complains - NIT KKR</title>
    <link rel="shortcut icon" href="../image/logo.png" type="image/x-icon">
    <link rel="stylesheet" href="../css/student.css">
    <link rel="stylesheet" href="../css/leaverequest.css">
</head>

<body class="com_body">
    <?php
    $user_id = $_GET['u_id'];
    $com_id = $_GET['c_id'];
    $sql = "SELECT * FROM student_complains WHERE com_id = $com_id";
    $res = mysqli_query($conn, $sql);
    $count = mysqli_num_rows($res);
    if ($count == 1) {
        $rows = mysqli_fetch_assoc($res);
        $roll_no = $rows['student_roll'];
        $com_subject = $rows['com_subject'];
        $com_desc = $rows['com_desc'];
    }
    if (isset($_POST['res_submit'])) {
        $response = $_POST['response'];
        $sql2 = "UPDATE student_complains SET
        response = '$response'
        WHERE com_id = $com_id";

        $res2 = mysqli_query($conn, $sql2);
        if($res2){
            header("LOCATION:" . SITEURL . "admin/complains.php?id=".$user_id );
        }
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
                            <?php echo $user_id; ?>
                        </li>
                        <button class="btn-primary res-btn" style="margin-left:2vw; margin-top:2.5vh;"
                            onclick="change2()">Logout</button>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="wrapper">
        <h2 class="text-center">Complain</h2>
        <div class="complains">
            <h3>Roll No :
                <?php echo $roll_no ?>
            </h3><br>
            <h3>Subject :
                <?php echo $com_subject ?>
            </h3><br>
            <h3>Description :
                <?php echo $com_desc ?>
            </h3>

        </div>
        <h2 class="text-center">Response</h2>
        <div class="complains">
            <h3>Please give your response</h3><br>
            <form action="" method="post">
                <textarea id="" style="width: 98%; margin: 10px; resize:none; padding: 10px; font-size: 16px;"
                    rows="7" name="response"></textarea>
                <br><br>
                <center><button type="submit" class="btnprofile" name="res_submit">Submit</button></center>
            </form>
            <br>
        </div>
    </div>

    <script src="../js/script.js"></script>
</body>
