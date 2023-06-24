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

<body>
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
                        <li style="color:#01bf71;"><?php echo $rollno; ?></li>
                        <button class="btn-primary res-btn" style="margin-left:2vw; margin-top:2.5vh;" onclick="change2()">Logout</button>
                   </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="main">
        <div class="dashboard">
            <a href="mess_details.php?id=<?php echo $rollno ?>">
                <div class="card text-center">
                    <div class="icon" style="color:#01bf71; padding-bottom: 30px;"><i class="fa-solid fa-utensils fa-beat-fade fa-2xl"></i></div>
                    <h2>Mess Details</h2>
                    <p class="par">Know your mess details.</p>
                </div>
            </a>
            <a href="room_details.php?id=<?php echo $rollno ?>">
                <div class="card text-center">
                    <div class="icon" style="color:#01bf71; padding-bottom: 30px;"><i class="fa-solid fa-id-card fa-beat-fade fa-2xl"></i></div>
                    <h2>My Room Details</h2>
                    <p class="par">Check your room details.</p>
                </div>
            </a>
            <a href="applyleave.php?id=<?php echo $rollno ?>">
                <div class="card text-center">
                    <div class="icon" style="color:#01bf71; padding-bottom: 30px;"><i class="fa-solid fa-user-plus fa-beat-fade fa-2xl"></i></div>
                    <h2>Apply Leave</h2>
                    <p class="par">Apply for leave.</p>
                </div>
            </a>
            <a href="student_complains.php?id=<?php echo $rollno ?>">
                <div class="card text-center">
                    <div class="icon" style="color:#01bf71; padding-bottom: 30px;"><i class="fa-solid fa-clipboard-question fa-beat-fade fa-2xl"></i></div>
                    <h2>Complains</h2>
                    <p class="par">Raise your Complains.</p>
                </div>
            </a>
            <a href="../admin/view_notification.php?id=<?php echo $rollno ?>">
                <div class="card text-center">
                    <div class="icon" style="color:#01bf71; padding-bottom: 30px;"><i class="fa-solid fa-bell fa-beat-fade fa-2xl"></i></div>
                    <h2>Notifications</h2>
                    <p class="par">Check all notifications.</p>
                </div>
            </a>
        </div>
    </div>
    <script src="https://kit.fontawesome.com/313af96a2f.js" crossorigin="anonymous"></script>
    <script src="../js/script.js"></script>
</body>