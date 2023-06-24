<?php
include '../partials/db_connect.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mess Details - NIT KKR</title>
    <link rel="shortcut icon" href="../image/logo.png" type="image/x-icon">
    <link rel="stylesheet" href="../css/roomdetails.css">
    <link rel="stylesheet" href="../css/mess_details.css">
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
            $hostel_no = $rows['hostel_no'];
            $hostel_id=explode('H',$hostel_no)[1];
            $gender = $rows['gender'];
            if ($gender == 'Male') {
                $sql = "SELECT * FROM mhostels WHERE hostel_id=$hostel_id";
                $res = mysqli_query($conn, $sql);
            } else {
                $sql = "SELECT * FROM fhostels WHERE hostel_id=$hostel_id";
                $res = mysqli_query($conn, $sql);
            }
            if ($res) {
                $rows2 = mysqli_fetch_assoc($res);
                $mess_menu = $rows2['mess_menu'];
                $mess_bill = $rows2['mess_bill'];
            }

        }
    }
    ?>
    <center>
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
                            <button class="btn-primary res-btn" style="margin-left:2vw; margin-top:2.5vh;"
                                onclick="change2()">Logout</button>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="wrapper">
                <div class="timing">
                    <h3>Mess Timing</h3>
                    <table>
                        <tr>
                            <th>Days</th>
                            <th>
                                <center> Breakfast </center>
                            </th>
                            <th>
                                <center> Lunch </center>
                            </th>
                            <th>
                                <center> Dinner </center>
                            </th>
                        </tr>
                        <tr>
                            <th>Working Days</th>
                            <td>
                                <center> 7:30AM To 9:00AM </center>
                            </td>
                            <td>
                                <center> 12:30PM To 2:00PM </center>
                            </td>
                            <td>
                                <center> 7:30PM To 9:00PM </center>
                            </td>
                        </tr>
                        <tr>
                            <th>Holidays</th>
                            <td>
                                <center> 9:00AM To 10:00AM </center>
                            </td>
                            <td>
                                <center> 1:00PM To 2:00PM </center>
                            </td>
                            <td>
                                <center> 8:00PM To 9:00PM </center>
                            </td>
                        </tr>
                    </table>
                </div>
                <div class="timing">
                    <h3>Mess Menu</h3>
                    <?php
                    if ($gender == "Male") {
                        ?>
                        <img src="../uploads/menu/Boys_hostel/<?php echo $mess_menu ?>" alt="" srcset="">
                        <?php
                    } else {
                        ?>
                        <img src="../uploads/menu/Girls_hostel/<?php echo $mess_menu ?>" alt="" srcset="">
                        <?php
                    }

                    ?>
                </div>
                <?php
                if ($gender == "Male") {
                    ?>
                    <h2><a href="../uploads/mess_bill/Boys_hostel/<?php echo $mess_bill ?>">Mess Bill</a> of
                        previous month
                    </h2>
                    <?php
                } else {
                    ?>
                    <h2><a href="../uploads/mess_bill/Girls_hostel/<?php echo $mess_bill ?>">Mess Bill</a> of
                        previous month
                    </h2>
                    <?php
                }

                ?>
            </div>
        </div>
        <script src="https://kit.fontawesome.com/313af96a2f.js" crossorigin="anonymous"></script>
        <script src="../js/script.js"></script>
</body>