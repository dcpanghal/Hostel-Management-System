<?php
include 'partials/db_connect.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Hostels - NIT KKR</title>
    <link rel="shortcut icon" href="image/logo.png" type="image/x-icon">
    <link rel="stylesheet" href="css/about_hostel.css">
</head>

<body>
    <?php
    $rollno = $_GET['id'];
    $sql = "SELECT * FROM students WHERE student_roll=$rollno";
    $res = mysqli_query($conn, $sql);

    if ($res == true) {
        $count = mysqli_num_rows($res);
        if ($count == 1) {
            $rows = mysqli_fetch_assoc($res);
            $gender = $rows['gender'];
        }
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
    <div class="about_hostels">
        <div class="wrapper">
            <h3 style="margin-top:5vh;">About Hostels</h3>
            <div class="hostels">
                <?php
                if ($gender == "Male") {
                    ?>
                    <a href="hostel_detail.php?id=<?php echo $rollno ?>&h_id=1">
                        <div class="hostel text-center hostel-1">
                            <i class="fas fa-bed fa-2xl"></i>
                            <h3>Apply For H1-Hostel</h3>
                            <h4>Abhimanyu Bhawan</h4>
                        </div>
                    </a>
                    <a href="hostel_detail.php?id=<?php echo $rollno ?>&h_id=2">
                        <div class="hostel text-center hostel-2">
                            <i class="fas fa-bed fa-2xl"></i>
                            <h3>Apply For H2-Hostel</h3>
                            <h4>Bhishma Bhawan</h4>
                        </div>
                    </a>
                    <a href="hostel_detail.php?id=<?php echo $rollno ?>&h_id=3">
                        <div class="hostel text-center hostel-3">
                            <i class="fas fa-bed fa-2xl"></i>
                            <h3>Apply For H3-Hostel</h3>
                            <h4>Chakradhar Bhawan</h4>
                        </div>
                    </a>
                    <a href="hostel_detail.php?id=<?php echo $rollno ?>&h_id=4">
                        <div class="hostel text-center hostel-4">
                            <i class="fas fa-bed fa-2xl"></i>
                            <h3>Apply For H4-Hostel</h3>
                            <h4>Dronacharya Bhawan</h4>
                        </div>
                    </a>
                    <a href="hostel_detail.php?id=<?php echo $rollno ?>&h_id=5">
                        <div class="hostel text-center hostel-5">
                            <i class="fas fa-bed fa-2xl"></i>
                            <h3>Apply For H5-Hostel</h3>
                            <h4>Eklavya Bhawan</h4>
                        </div>
                    </a>
                    <a href="hostel_detail.php?id=<?php echo $rollno ?>&h_id=6">
                        <div class="hostel text-center hostel-6">
                            <i class="fas fa-bed fa-2xl"></i>
                            <h3>Apply For H6-Hostel</h3>
                            <h4>Fanibhushan Bhawan</h4>
                        </div>
                    </a>
                    <a href="hostel_detail.php?id=<?php echo $rollno ?>&h_id=7">
                        <div class="hostel text-center hostel-7">
                            <i class="fas fa-bed fa-2xl"></i>
                            <h3>Apply For H7-Hostel</h3>
                            <h4>Girivar Bhawan</h4>
                        </div>
                    </a>
                    <a href="hostel_detail.php?id=<?php echo $rollno ?>&h_id=8">
                        <div class="hostel text-center hostel-8">
                            <i class="fas fa-bed fa-2xl"></i>
                            <h3>Apply For H8-Hostel</h3>
                            <h4>Harihar Bhawan</h4>
                        </div>
                    </a>
                    <a href="hostel_detail.php?id=<?php echo $rollno ?>&h_id=9">
                        <div class="hostel text-center hostel-9">
                            <i class="fas fa-bed fa-2xl"></i>
                            <h3>Apply For H9-Hostel</h3>
                            <h4>Indivar Bhawan</h4>
                        </div>
                    </a>
                    <a href="hostel_detail.php?id=<?php echo $rollno ?>&h_id=10">
                        <div class="hostel text-center hostel-10">
                            <i class="fas fa-bed fa-2xl"></i>
                            <h3>Apply For H10-Hostel</h3>
                            <h4>Visvesvaraya Bhawan</h4>
                        </div>
                    </a>
                    <a href="hostel_detail.php?id=<?php echo $rollno ?>&h_id=11">
                        <div class="hostel text-center hostel-11">
                            <i class="fas fa-bed fa-2xl"></i>
                            <h3>Apply For H11-Hostel</h3>
                            <h4>Vivekananda Bhawan</h4>
                        </div>
                    </a>
                    <?php
                }
                else
                {
                    ?>
                    <a href="hostel_detail.php?id=<?php echo $rollno ?>&h_id=1">
                        <div class="hostel text-center fhostel-1">
                            <i class="fas fa-bed fa-2xl"></i>
                            <h3>Apply For H1-Hostel</h3>
                            <h4>Bhagirathi Bhawan</h4>
                        </div>
                    </a>
                    <a href="hostel_detail.php?id=<?php echo $rollno ?>&h_id=2">
                        <div class="hostel text-center fhostel-2">
                            <i class="fas fa-bed fa-2xl"></i>
                            <h3>Apply For H2-Hostel</h3>
                            <h4>Kavery Bhawan</h4>
                        </div>
                    </a>
                    <a href="hostel_detail.php?id=<?php echo $rollno ?>&h_id=3">
                        <div class="hostel text-center fhostel-3">
                            <i class="fas fa-bed fa-2xl"></i>
                            <h3>Apply For H3-Hostel</h3>
                            <h4>Kalpana Chawla Bhawan</h4>
                        </div>
                    </a>
                    <?php
                }
                ?>
            </div>
        </div>
    </div>
    <?php
    include 'partials/footer.php';
    ?>
    <script src="https://kit.fontawesome.com/313af96a2f.js" crossorigin="anonymous"></script>
</body>