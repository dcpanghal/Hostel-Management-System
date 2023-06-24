<?php
include '../partials/db_connect.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Details - NIT KKR</title>
    <link rel="shortcut icon" href="../image/logo.png" type="image/x-icon">
    <link rel="stylesheet" href="../css/roomdetails.css">
</head>

<body>
    <?php
    $rollno = $_GET['s_id'];
    $user_id=$_GET['id'];
    $sql1 = "SELECT * FROM students WHERE student_roll=$rollno";
    $res1 = mysqli_query($conn, $sql1);

    if ($res1 == true) {
        $count1 = mysqli_num_rows($res1);
        if ($count1 == 1) {
            $rows = mysqli_fetch_assoc($res1);
            $student_name = $rows['student_name'];
            $student_email = $rows['student_email'];
            $student_phone = $rows['student_phone'];
            $course = $rows['course'];
            $father_phone = $rows['father_phoneno'];
            $father_name = $rows['father_name'];
            $your_photo = $rows['your_photo'];
            $hostel_no = $rows['hostel_no'];
            $room_no = $rows['room_no'];
            $seater = $rows['room_seater'];
            $fees = $rows['fees'];
            $allot = $rows['allot_date'];
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
    <div class="container">
        <div class="wrapper">
            <div class="personal center">
                <div class="side center">
                    <div class="photo">
                        <img src="../image/students/<?php echo $your_photo?>" alt="">
                    </div>
                </div>
            </div>
            <div class="roomdetails">
                <div class="room">
                    <div>
                        <h2 class="text-center">Personal Details</h2>
                        <table class="customers">
                            <tr>
                                <td>Name</td>
                                <td>
                                    <?php echo $student_name ?>
                                </td>
                            </tr>
                            <tr>
                                <td>Roll No</td>
                                <td>
                                    <?php echo $rollno ?>
                                </td>
                            </tr>
                            <tr>
                                <td>Email</td>
                                <td>
                                    <?php echo $student_email ?>
                                </td>
                            </tr>
                            <tr>
                                <td>Mobile No</td>
                                <td>
                                    <?php echo $student_phone ?>
                                </td>
                            </tr>
                            <tr>
                                <td>course</td>
                                <td>
                                    <?php echo $course ?>
                                </td>
                            </tr>
                            <tr>
                                <td>Father's Name</td>
                                <td>
                                    <?php echo $father_name ?>
                                </td>
                            </tr>
                            <tr>
                                <td>Father's Phone No</td>
                                <td>
                                    <?php echo $father_phone ?>
                                </td>
                            </tr>
                        </table>
                    </div>
                    <div style="border-left:1px solid #ddd">
                    </div>
                    <div>
                        <h2 class="text-center">Room Details</h2>
                        <table class="customers">
                            <tr>
                                <td>Hostel No.</td>
                                <td>
                                    <?php echo $hostel_no ?>
                                </td>
                            </tr>
                            <tr>
                                <td>Room No.</td>
                                <td>
                                    <?php echo $room_no ?>
                                </td>
                            </tr>
                            <tr>
                                <td>Seater</td>
                                <td>
                                    <?php echo $seater ?>
                                </td>
                            </tr>
                            <tr>
                                <td>Alloted From</td>
                                <td>
                                    <?php echo $allot ?>
                                </td>
                            </tr>
                            <tr>
                                <td>Fees Per Semester</td>
                                <td>
                                    <?php echo $fees ?>
                                </td>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://kit.fontawesome.com/313af96a2f.js" crossorigin="anonymous"></script>
    <script src="../js/script.js"></script>
</body>