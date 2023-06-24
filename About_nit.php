<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/About_nit.css">
    <link rel="stylesheet" href="css/style.css">
    <title>About Us - NIT KKR</title>
    <link rel="shortcut icon" href="image/logo.png" type="image/x-icon">
</head>

<body>
    <header>
        <div class="nav-cont">
            <div class="wrapper">
                <div class="nav-align">
                    <div class="nav-logo">
                        <a href=""><img src="image/logo.png" alt="NIT kkr Logo"></a>
                    </div>
                    <div class="nav-links">
                        <ul class="text-center">
                            <li><a href="index.php">Home</a></li>
                            <li class="hide"><a href="About_nit.php">About</a></li>
                            <li class="hide"><a href="contact.php">Contact Us</a></li>
                            <li class="hide"><a href="signin.php">Sign in</a></li>
                        </ul>
                    </div>
                    <div class="nav-signup text-center">
                        <button type="submit" class="btn-primary res-btn" onclick="change()">Sign Up</button>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <hr>
    <div class="main" style="padding:20px;">
        <div class="NIT_img" style="text-align:center; padding:20px;">
            <h1><span style="color:#01bf71;">HMS-</span> NIT KKR</h1>
        </div>
        <div class="about_us">
            <h2>About NIT Kurukshetra</h2>
            <p>NIT Kurukshetra is one of the premier technical institutes of the country. Founded in 1963 as Regional
                Engineering College Kurukshetra, the institute was rechristened as National Institute of Technology
                Kurukshetra on June 26, 2002. The institute offers 4-year B. Tech degree courses in seven engineering
                streams, 2-year M. Tech degree courses in 22 areas of specialization of science & technology, and post
                graduate courses leading to the degree in MBA and MCA. The infrastructure is geared to enable the
                institute to run out technical personnel of high quality. In addition to providing knowledge in various
                disciplines of engineering and technology at the undergraduate and post-graduate levels, the institute
                is actively engaged in research activities in the emerging areas including Nanotechnology, Ergonomics,
                Robotics, CAD/CAM, Energy and Environment. The placement record of the institute has been commendable
                and consistent due to strong vigour and commitment to generate talent.</p>
        </div>
    </div>
    <?php
    include 'partials/footer.php';
    ?>
    <script src="js/script.js"></script>
    <script src="https://kit.fontawesome.com/313af96a2f.js" crossorigin="anonymous"></script>
</body>

</html>