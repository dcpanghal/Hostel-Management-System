<?php
include '../partials/db_connect.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hostel Details- NIT KKR</title>
    <link rel="shortcut icon" href="../image/logo.png" type="image/x-icon">
    <link rel="stylesheet" href="../css/about_hostel.css">
</head>

<body>
    <?php
    $rollno = $_GET['id'];
    $sql1 = "SELECT * FROM students WHERE student_roll=$rollno";
    $res1 = mysqli_query($conn, $sql1);

    if ($res1 == true) {
        $count1 = mysqli_num_rows($res1);
        if ($count1 == 1) {
            $rows = mysqli_fetch_assoc($res1);
            $student_name = $rows['student_name'];
            $student_email = $rows['student_email'];
            $student_phone = $rows['student_phone'];
            $gender = $rows['gender'];
            $hostel_no = $rows['hostel_no'];
            $room_no = $rows['room_no'];
            $father_phoneno = $rows['father_phoneno'];
            $fees = $rows['fees'];
            $course = $rows['course'];
            $allot_date = $rows['allot_date'];
            $seater = $rows['room_seater'];
            $father_name = $rows['father_name'];

        }
    }
    if (isset($_POST['save'])) {
        $allot_date = $_POST['allot_date'];
        $student_name = $_POST['student_name'];
        $student_email = $_POST['student_email'];
        $student_phone = $_POST['student_phone'];
        $gender = $_POST['gender'];
        $father_name = $_POST['father_name'];
        $hostel_no = $_POST['hostel_no'];
        $room_no = $_POST['room_no'];
        $course = $_POST['course'];
        $father_phoneno = $_POST['father_phoneno'];
        $seater = $_POST['seater'];
        $fees = $_POST['fees'];

        $sql2 = "UPDATE students SET 
        allot_date = '$allot_date',
        student_name = '$student_name',
        student_email = '$student_email',
        student_phone = '$student_phone',
        gender = '$gender',
        hostel_no = '$hostel_no',
        course = '$course',
        room_no = '$room_no',
        room_seater = '$seater',
        fees = '$fees',
        father_name = '$father_name',
        father_phoneno = '$father_phoneno'

        WHERE student_roll = $rollno";
        $res2 = mysqli_query($conn, $sql2);
        if ($res2)
            header('location:' . SITEURL . 'students/student_profile.php?id=' . $rollno);
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
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="main-content">
        <div class="wrapper">
            <div class="details">
                <div class="form_detail">
                    <h2 class="text-center">Application Form</h2>
                    <form action="" method="post" enctype="multipart/form-data">
                        <div class="user-details">
                            <div class="input-box">
                                <span>Full Name</span>
                                <input name="student_name" type="text" value="<?php echo $student_name ?>">
                            </div>
                            <div class="input-box">
                                <span>Email</span>
                                <input type="text" value="<?php echo $student_email ?>" name="student_email">
                            </div>
                            <div class="input-box">
                                <span>Phone Number</span>
                                <input type="text" value="<?php echo $student_phone ?>" name="student_phone">
                            </div>
                            <div class="input-box">
                                <span>Gender</span>
                                <input type="text" value="<?php echo $gender ?>" name="gender">
                            </div>
                            <div class="input-box">
                                <span>Hostel No.</span>
                                <input type="text" value="<?php echo $hostel_no ?>" required name="hostel_no">
                            </div>
                            <div class="input-box">
                                <span>Course</span>
                                <select name="course" id="course">
                                    <option value="<?php echo $course?>">Select</option>
                                    <option value="B.tech">B.Tech</option>
                                    <option value="M.Tech">M.Tech</option>
                                    <option value="Phd">Phd</option>
                                </select>
                            </div>
                            <div class="input-box">
                                <span>Room No.</span>
                                <input type="text" value="<?php echo $room_no?>" name="room_no" required>
                            </div>
                            <div class="input-box">
                                <span>Seater</span>
                                <select name="seater" id="seater">
                                    <option value="<?php echo $seater?>">Select</option>
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                </select>
                            </div>
                            <div class="input-box">
                                <span>Alloted from</span>
                                <input type="date" value="<?php echo $allot_date?>" name="allot_date" required>
                            </div>
                            <div class="input-box">
                                <span>Fees per Semester</span>
                                <select name="fees" id="fees">
                                    <option value="<?php echo $fees?>">Select</option>
                                    <option value="7400">7400</option>
                                    <option value="5800">5800</option>
                                    <option value="4200">4200</option>
                                </select>
                            </div>
                            <div class="input-box">
                                <span>Father's Name</span>
                                <input type="text" value="<?php echo $father_name?>" name="father_name" required>
                            </div>
                            <div class="input-box">
                                <span>Father's Phone Number</span>
                                <input type="text" value="<?php echo $father_phoneno?>" name="father_phoneno"
                                    pattern="[0-9]{10}" required>
                            </div>
                        </div>
                        <div class="text-center">
                            <input type="submit" value="Save Details" name="save" class="button">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <script src="https://kit.fontawesome.com/313af96a2f.js" crossorigin="anonymous"></script>
</body>