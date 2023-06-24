<?php
include '../partials/db_connect.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Upload Mess Menu - NIT KKR</title>
    <link rel="shortcut icon" href="../image/logo.png" type="image/x-icon">
    <link rel="stylesheet" href="../css/student.css">
</head>

<body class="complain">
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
    <div class="center">
        <div class="wrapper">
            <h2>Upload Mess Bill</h2>
            <form action="" method="post" class="form" enctype="multipart/form-data">
                <div class="subject">
                    <label>Hostel No</label>
                    <input type="text" name="hostel_no" placeholder="Enter Hostel No (As H1)" required>
                </div>
                <div class="category">
                    <label for="dot-1">
                        <input type="radio" name="gender" id="dot-1" value="Male">
                        <span class="gender">Male</span>
                    </label>
                    <label for="dot-2">
                        <input type="radio" name="gender" id="dot-2" value="Female">
                        <span class="gender">Female</span>
                    </label>
                </div>

                <div class="subject" style="border:none;">
                    <input type="file" name="mess_bill">
                </div>
                <center><input type="submit" name="csubmit" value="Submit"></center>
            </form>
        </div>
    </div>
    <script src="https://kit.fontawesome.com/313af96a2f.js" crossorigin="anonymous"></script>
    <script src="../js/script.js"></script>
</body>


<?php
if (isset($_POST['csubmit'])) {
    $hostel_no = $_POST['hostel_no'];
    $gender = $_POST['gender'];
    if (isset($_FILES['mess_bill']['name'])) {
        $mess_bill = $_FILES['mess_bill']['name'];
        $source_path = $_FILES['mess_bill']['tmp_name'];
        if ($gender =="Male") {
            $destination_path = "../uploads/mess_bill/Boys_hostel/" . $mess_bill;
            $upload = move_uploaded_file($source_path, $destination_path);
        } 
        else{
            $destination_path = "../uploads/mess_bill/Girls_hostel/" . $mess_bill;
            $upload = move_uploaded_file($source_path, $destination_path);
        }
    }
    $hostel_id = explode('H', $hostel_no)[1];
    if ($gender =="Male") {
        $sql = "UPDATE mhostels SET mess_bill = '$mess_bill' WHERE hostel_id = $hostel_id";
    } else {
        $sql = "UPDATE fhostels SET mess_bill = '$mess_bill' WHERE hostel_id = $hostel_id";
    }
    $res = mysqli_query($conn, $sql);
}


?>