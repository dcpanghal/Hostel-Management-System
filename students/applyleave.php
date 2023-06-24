<?php
include '../partials/db_connect.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Leave Request- NIT KKR</title>
    <link rel="shortcut icon" href="../image/logo.png" type="image/x-icon">
    <link rel="stylesheet" href="../css/applyleave.css">
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
            $student_name = $rows['student_name'];
            $hostel_no = $rows['hostel_no'];
            $room_no = $rows['room_no'];
            $gender = $rows['gender'];
        }
    }
    ?>
    <div class="container">
        <div class="title">Leave Request</div>
        <?php
        if (isset($_SESSION['success'])) {
            echo $_SESSION['success'];
            unset($_SESSION['success']);
        }
        ?>
        <div class="content">
            <form action="" method="post">
                <div class="user-details">
                    <div class="input-box">
                        <span class="details">Full Name</span>
                        <input type="text" name="name" value="<?php echo $student_name ?>" disabled required>
                    </div>
                    <div class="input-box">
                        <span class="details">Roll No</span>
                        <input type="text" name="rollno" value="<?php echo $rollno ?>" disabled required>
                    </div>
                    <div class="input-box">
                        <span class="details">Hostel No</span>
                        <input type="text" name="hostel_no" value="<?php echo $hostel_no ?>" disabled required>
                    </div>
                    <div class="input-box">
                        <span class="details">Room no</span>
                        <input type="text" name="room_no" value="<?php echo $room_no ?>" disabled required>
                    </div>
                    <div class="input-box">
                        <span class="details">From</span>
                        <input type="date" name="from_date" id="fromdate" required>
                    </div>
                    <div class="input-box">
                        <span class="details">To</span>
                        <input type="date" name="to_date" id="todate" required>
                    </div>
                    <div class="input-box">
                        <span class="details">Reason</span>
                        <input type="textarea" name="reason" id="reason" placeholder="Reason" required>
                    </div>
                </div>

                <div class="button text-center">
                    <input type="submit" name="submit">
                </div>
            </form>
        </div>
    </div>
    <script src="../js/script.js"></script>
</body>

</html>

<?php
if (isset($_POST['submit'])) {
    $from_date = $_POST['from_date'];
    $to_date = $_POST['to_date'];
    $reason = $_POST['reason'];


    $sql = "INSERT INTO leaverequest (student_roll, student_name, student_gender, from_date, to_date, reason, hostel_no,room_no ) VALUES ('$rollno','$student_name','$gender', '$from_date', '$to_date', '$reason', '$hostel_no', '$room_no')";
    $result = mysqli_query($conn, $sql);
    if ($result) {
        $_SESSION['success'] = "<div class='success'>Request successfully submitted</div>";
        header("location:" . SITEURL . 'students/applyleave.php?id='.$rollno);
    }
}

?>