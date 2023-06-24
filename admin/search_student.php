<?php
include '../partials/db_connect.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Search Student - NIT KKR</title>
    <link rel="shortcut icon" href="../image/logo.png" type="image/x-icon">
    <link rel="stylesheet" href="../css/student.css">
    <link rel="stylesheet" href="../css/leaverequest.css">
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
    <form action="" method='post'>
        <div class="wrapper mid">
            <div class="search_box">
                <input type="text" name="rollno" id="rollno" class="input_search" placeholder="Enter student rollno" pattern="[0-9]{8}"> 
                <div class="search_btn"><input class="btnsearch" type="submit" name="search" value="find"></div>
            </div>
        </div>
    </form>
    <table>
        <tr style="background-color:#3498db;">
            <th>Name</th>
            <th>Roll No</th>
            <th>Hostel No</th>
            <th>Room No</th>
            <th>Gender</th>
            <th>Action</th>
        </tr>
        <?php
        if (isset($_POST['search'])) {
            $rollno = $_POST['rollno'];
            if ($rollno) {
                $sql = "SELECT * FROM students WHERE student_roll=$rollno";
                $res = mysqli_query($conn, $sql);
                $count = mysqli_num_rows($res);
                if ($count == 1) {
                    while ($rows = mysqli_fetch_assoc($res)) {
                        $name = $rows['student_name'];
                        $roll_no = $rows['student_roll'];
                        $hostel_no = $rows['hostel_no'];
                        $room_no = $rows['room_no'];
                        $gender = $rows['gender'];
                        ?>
                        <tr>
                            <td>
                                <?php echo $name ?>
                            </td>
                            <td>
                                <?php echo $roll_no ?>
                            </td>
                            <td>
                                <?php echo $hostel_no ?>
                            </td>
                            <td>
                                <?php echo $room_no ?>
                            </td>
                            <td>
                                <?php echo $gender ?>
                            </td>
                            <td class="text-center">
                                <a href="view_student_details.php?s_id=<?php echo $roll_no ?>&id=<?php echo $user_id ?>"><button class="btnprofile">View profile</button></a>
                            </td>
                        </tr>
                        <?php
                    }
                }
                else
                {
                    ?>
                    <h3 class="text-center" style="margin-bottom:10px;">User Not Exist</h3>
                    <?php
                }
            }
        }
        ?>
    </table>

    <script src="../js/script.js"></script>
</body>