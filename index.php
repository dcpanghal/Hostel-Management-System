<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hostel Management System - NIT KKR</title>
    <link rel="shortcut icon" href="image/logo.png" type="image/x-icon">
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <!-- Navbar starts from here -->
    <header>
        <nav>
            <div class="nav-content">
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
            <div class="nav-content2">
                <div class="wrapper">
                    <div class="heading">
                        <h1 class="text-center">Hostel Management System</h1>
                        <p class="text-center">NIT Kurukshetra</p>
                        <button type="submit" class="btn-primary" onclick="change()">Get Started</button>
                    </div>
                </div>
            </div>
            <div class="video">
                <video autoplay muted loop id="myVideo">
                    <source src="image/NIT_video.mp4" type="video/mp4">
                </video>
            </div>
        </nav>
    </header>
    <!-- Navbar ends-->
    <main>
        <section class="Hostel_content">
            <div class="wrapper">
                <div class="About_hostel">
                    <div class="Hostel_photo">
                        <img src="image/Hostel_photo.svg" alt="Hostel photo" class="H_photo">
                    </div>
                    <div class="Hostel_text">
                        <h2>BEST FACILITIES</h2>
                        <h3>Cherish your hostel life with our hostels</h3>
                        <p>When you find yourself in some strange place, hostel life is where it starts as well. It's
                            not just an adventure; it's a home away from home! </p>
                        <div class="Chief">
                            <div class="Chief_photo">
                                <a href=""><img src="image/Admin/Vijay-Kumar-Bajpai.jpg" alt=""></a>
                            </div>
                            <div class="Chief_text">
                                <h3>Vijay Kumar Bajpai</h3>
                                <h4>Chief Warden</42>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="product">
            <div class="wrapper">
                <h1 class="product-category text-center">Gallery</h1>
                <button class="pre-btn" type="submit"><img src="image/arrow.png" alt=""></button>
                <button class="nxt-btn" type="submit"><img src="image/arrow.png" alt=""></button>
                <div class="product-container">
                    <div class="product-card">
                        <div class="product-image">
                            <img src="image/Hostel/H11.jpg" class="product-thumb" alt="">
                        </div>
                    </div>
                    <div class="product-card">
                        <div class="product-image">
                            <img src="image/Hostel/H10.jpeg" class="product-thumb" alt="">
                        </div>
                    </div>
                    <div class="product-card">
                        <div class="product-image">
                            <img src="image/Hostel/H9.jpeg" class="product-thumb" alt="">
                        </div>
                    </div>
                    <div class="product-card">
                        <div class="product-image">
                            <img src="image/Hostel/H8.jpeg" class="product-thumb" alt="">
                        </div>
                    </div>
                    <div class="product-card">
                        <div class="product-image">
                            <img src="image/Hostel/H7.jpeg" class="product-thumb" alt="">
                        </div>
                    </div>
                    <div class="product-card">
                        <div class="product-image">
                            <img src="image/Hostel/H6.jpg" class="product-thumb" alt="">
                        </div>
                    </div>
                    <div class="product-card">
                        <div class="product-image">
                            <img src="image/Hostel/H5.jpg" class="product-thumb" alt="">
                        </div>
                    </div>
                    <div class="product-card">
                        <div class="product-image">
                            <img src="image/Hostel/FH1.png" class="product-thumb" alt="">
                        </div>
                    </div>
                    <div class="product-card">
                        <div class="product-image">
                            <img src="image/Hostel/H3.jpg" class="product-thumb" alt="">
                        </div>
                    </div>
                    <div class="product-card">
                        <div class="product-image">
                            <img src="image/Hostel/H2.jfif" class="product-thumb" alt="">
                        </div>
                    </div>
                    <div class="product-card">
                        <div class="product-image">
                            <img src="image/Hostel/FH3.jfif" class="product-thumb" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
    <?php
        include 'partials/footer.php';
    ?>
    <script src="js/script.js"></script>
    <script src="https://kit.fontawesome.com/313af96a2f.js" crossorigin="anonymous"></script>
</body>

</html>