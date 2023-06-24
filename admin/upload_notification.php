<?php
include '../partials/db_connect.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard- NIT KKR</title>
    <link rel="shortcut icon" href="../image/logo.png" type="image/x-icon">
    <link rel="stylesheet" href="../css/student.css">
</head>

<body style="background: linear-gradient(120deg, #00467F, #A5CC82);">
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

    <?php
    if (isset($_POST['csubmit'])) {
        $notification = $_POST['notification'];
        if (isset($_FILES['file_name']['name'])) {
            $file_name = $_FILES['file_name']['name'];
            $source_path = $_FILES['file_name']['tmp_name'];
            $destination_path = "../uploads/notifications/" . $file_name;
            $upload = move_uploaded_file($source_path, $destination_path);
        }

        $sql2 = "INSERT INTO notifications (not_desc, file_name) VALUE ('$notification','$file_name')";
        $res2 = mysqli_query($conn, $sql2);
        if ($res2)
            header('location:' . SITEURL . 'admin/dashboard.php?id=' . $user_id);
    }
    ?>
    <div class="center">
        <div class="wrapper">
            <h2>Upload New Notification</h2>
            <form action="" method="post" class="form" enctype="multipart/form-data">
                <div class="subject" style="border:none;">
                    <label>About Notification</label>
                    <textarea rows="7" name="notification" placeholder="Enter description of notification"
                        required></textarea>
                </div>
                <div class="subject">
                    <label>Upload File</label>
                    <input type="file" name="file_name" style="padding-top: 10px;">
                </div>
                <center><input type="submit" name="csubmit" value="Submit"></center>
            </form>
        </div>
    </div>



    <script src="https://kit.fontawesome.com/313af96a2f.js" crossorigin="anonymous"></script>
    <script src="../js/script.js"></script>
</body>