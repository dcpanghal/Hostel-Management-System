<?php
include '../partials/db_connect.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Notification - NIT KKR</title>
    <link rel="shortcut icon" href="../image/logo.png" type="image/x-icon">
    <link rel="stylesheet" href="../css/student.css">
    <link rel="stylesheet" href="../css/notification.css">
</head>

<body>
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
    <div class="wrapper">
        <div class="full-not">
            <div class="not-head">
                <H2>Notifications</H2>
            </div>
            <?php
            $sql = "SELECT * FROM notifications ORDER BY not_date desc";
            $res = mysqli_query($conn, $sql);
            $count = mysqli_num_rows($res);
            if ($count > 0) {
                while ($rows = mysqli_fetch_assoc($res)) {
                    $not_date = $rows['not_date'];
                    $not_desc = $rows['not_desc'];
                    $file_name = $rows['file_name'];
                    ?>
                    <div class="not-bottom">
                        <p><?php echo $not_date ?></p>
                        <a href="../uploads/notifications/<?php echo $file_name?>" target="_blank"><?php echo $not_desc ?></a>
                    </div>
                    <hr style="margin: 15px;">
                    <?php
                }
            }

            ?>


        </div>
    </div>
    <script src="../js/script.js"></script>
</body>