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
    $user_id = $_GET['id'];
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
    <h2 class="text-center">Complains</h2>
    <div class="wrapper">
        <?php
        $sql = "SELECT * FROM student_complains";
        $res = mysqli_query($conn, $sql);
        $count = mysqli_num_rows($res);
        if ($count > 0) {
            while ($rows = mysqli_fetch_assoc($res)) {
                $com_id = $rows['com_id'];
                $rollno = $rows['student_roll'];
                $subject = $rows['com_subject'];
                $desc = $rows['com_desc'];
                $response = $rows['response'];
                if (!$response) {
                    ?>
                    <div class="main-com">
                        <div class="com_sub">
                            <h3>Subject :
                                <?php echo $subject ?>
                            </h3>
                            <br>
                            <h5>Rollno :
                                <?php echo $rollno ?>
                            </h5>
                        </div>
                        <div class="view">
                            <a class="btnprofile"
                                href="view_complain.php?c_id=<?php echo $com_id ?>&u_id=<?php echo $user_id ?>">View</a>
                        </div>
                    </div>
                    <?php
                }
            }
        }
        ?>
    </div>

    <script src="../js/script.js"></script>
</body>