<?php
include 'partials/db_connect.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hostel Details- NIT KKR</title>
    <link rel="shortcut icon" href="image/logo.png" type="image/x-icon">
    <link rel="stylesheet" href="css/about_hostel.css">
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
        }
    }
    if ($gender == "Male") {
        $hostel_id = $_GET['h_id'];
        $sql = "SELECT * FROM mhostels WHERE hostel_id=$hostel_id";
        $res = mysqli_query($conn, $sql);

        if ($res == true) {
            $count = mysqli_num_rows($res);
            if ($count == 1) {
                $rows = mysqli_fetch_assoc($res);
                $hostel_name = $rows['hostel_name'];
                $hostel_image = $rows['hostel_image'];
                $hostel_capacity = $rows['hostel_cap'];
                $hostel_trooms = $rows['hostel_trooms'];
                $hostel_contact = $rows['hostel_contact'];
                $hostel_email = $rows['hostel_email'];
            }
        }
    } else {
        $hostel_id = $_GET['h_id'];
        $sql = "SELECT * FROM fhostels WHERE hostel_id=$hostel_id";
        $res = mysqli_query($conn, $sql);

        if ($res == true) {
            $count = mysqli_num_rows($res);
            if ($count == 1) {
                $rows = mysqli_fetch_assoc($res);
                $hostel_name = $rows['hostel_name'];
                $hostel_image = $rows['hostel_image'];
                $hostel_capacity = $rows['hostel_cap'];
                $hostel_trooms = $rows['hostel_trooms'];
                $hostel_contact = $rows['hostel_contact'];
                $hostel_email = $rows['hostel_email'];
            }
        }
    }
    if (isset($_POST['apply'])) {
        $father_name = $_POST['father_name'];
        $hostel_no = $_POST['hostel_no'];
        $room_no = $_POST['room_no'];
        $course = $_POST['course'];
        $father_phoneno = $_POST['father_phoneno'];
        $seater = $_POST['seater'];
        $fees = $_POST['fees'];

        if (isset($_FILES['your_photo']['name'])) {
            $your_photo = $_FILES['your_photo']['name'];
            $source_path = $_FILES['your_photo']['tmp_name'];
            $destination_path = "image/students/" . $your_photo;
            $upload = move_uploaded_file($source_path, $destination_path);
        }

        $sql2 = "UPDATE students SET 
        hostel_no = '$hostel_no',
        course = '$course',
        room_no = '$room_no',
        room_seater = '$seater',
        fees = '$fees',
        father_name = '$father_name',
        your_photo = '$your_photo',
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
                    <a href=""><img src="image/logo.png" alt="NIT kkr Logo" style="background-color:white;"></a>
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
                <div class="photo">
                    <img src="image/Hostel/<?php echo $hostel_image ?>" alt="">
                    <h3>
                        <?php echo $hostel_name ?>
                    </h3>
                    <table style="border-spacing:20px; align-self:flex-start;">
                        <tr>
                            <td>Capacity</td>
                            <td>
                                <?php echo $hostel_capacity ?>
                            </td>
                        </tr>
                        <tr>
                            <td>Total Rooms</td>
                            <td>
                                <?php echo $hostel_trooms ?>
                            </td>
                        </tr>
                        <tr>
                            <td>Conatct No</td>
                            <td>
                                <?php echo $hostel_contact ?>
                            </td>
                        </tr>
                        <tr>
                            <td>Email</td>
                            <td>
                                <?php echo $hostel_email ?>
                            </td>
                        </tr>
                    </table>
                </div>
                <div class="form_detail">
                    <h2 class="text-center">Application Form</h2>
                    <form action="" method="post" enctype="multipart/form-data">
                        <div class="user-details">
                            <div class="input-box">
                                <span>Full Name</span>
                                <input name="name" type="text" value="<?php echo $student_name ?>" disabled>
                            </div>
                            <div class="input-box">
                                <span>Roll No</span>
                                <input type="text" value="<?php echo $rollno ?>" name="rollno" disabled>
                            </div>
                            <div class="input-box">
                                <span>Email</span>
                                <input type="text" value="<?php echo $student_email ?>" name="email" disabled>
                            </div>
                            <div class="input-box">
                                <span>Phone Number</span>
                                <input type="text" value="<?php echo $student_phone ?>" name="phoneno" disabled>
                            </div>
                            <div class="input-box">
                                <span>Gender</span>
                                <input type="text" value="<?php echo $gender ?>" name="gender" disabled>
                            </div>
                            <div class="input-box">
                                <span>Hostel No.</span>
                                <input type="text" value="H<?php echo $hostel_id ?>" required name="hostel_no">
                            </div>
                            <div class="input-box">
                                <span>Course</span>
                                <select name="course" id="course">
                                    <option value="Select">Select</option>
                                    <option value="B.tech">B.Tech</option>
                                    <option value="M.Tech">M.Tech</option>
                                    <option value="Phd">Phd</option>
                                </select>
                            </div>
                            <div class="input-box">
                                <span>Room No.</span>
                                <input type="text" placeholder="Enter your room no." name="room_no" required>
                            </div>
                            <div class="input-box">
                                <span>Seater</span>
                                <select name="seater" id="seater">
                                    <option value="Select">Select</option>
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                </select>
                            </div>
                            <div class="input-box">
                                <span>Alloted from</span>
                                <input type="date" placeholder="" name="allot_date" required>
                            </div>
                            <div class="input-box">
                                <span>Fees per Semester</span>
                                <select name="fees" id="fees">
                                    <option value="Select">Select</option>
                                    <option value="7400">7400</option>
                                    <option value="5800">5800</option>
                                    <option value="4200">4200</option>
                                </select>
                            </div>
                            <div class="input-box">
                                <span>Father's Name</span>
                                <input type="text" placeholder="Enter father's name" name="father_name" required>
                            </div>
                            <div class="input-box">
                                <span>Father's Phone Number</span>
                                <input type="text" placeholder="Enter father's phone no" name="father_phoneno"
                                    pattern="[0-9]{10}" required>
                            </div>
                            <div class="input-box">
                                <span>Upload Your Photo</span>
                                <input type="file" name="your_photo" required>
                            </div>
                        </div>
                        <div class="text-center">
                            <input type="submit" value="Click to Apply" name="apply" class="button">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <?php
    include 'partials/footer.php';
    ?>
    <script src="https://kit.fontawesome.com/313af96a2f.js" crossorigin="anonymous"></script>
</body>