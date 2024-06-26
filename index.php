<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Best Multispeciality Hospital in Nagpur - Kingsway Hospitals</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"
        integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <header>
        <div class="navbar1">
            <div class="left">
                <i class="fa-solid fa-phone"></i>
                Toll Free No.
                <a href="#" style="text-decoration: none; color: white; font-size: 15px; font-weight: 600;">1800 266
                    8346</a>
            </div>
            <div class="right">
                <div class="nav-options">
                    <ul>
                        <li><a href="#">Emergency</a></li>
                        <li><a href="#">Book Appointment</a></li>
                        <li><a href="#">Contact Us</a></li>
                        <li><a href="#">KH-Portal</a></li>
                    </ul>
                </div>
                <div class="search">
                    <form action="#">
                        <input type="text" placeholder="Search..." name="search_query" class="searchinput">
                        <button class="searchbutton">Search</button>
                    </form>
                </div>
            </div>
        </div>
        <div class="navbar2">
        <a href="#"><img class="img1"
                    src="Screenshot 2024-04-16 104210.png" alt="logo1"></a>
            <a href="#"><img class="img2"
                    src="Screenshot 2024-04-16 104927.png" alt="logo2"></a>
            <a href="#"><img class="img3"
                    src="Screenshot 2024-04-16 105130.png" alt="logo3"></a>
            <!-- Accessing sites by clicking on the image -->
            <div class="options">
                <form action="backend.php">
                    <a href="#" class="select-options">Home</a>
                    <label class="select-options" for="about_us"></label>
                    <select class="dropdown select-options" name="about-us" id="about_us">
                        <option value="About us" selected>About us</option>
                        <option value="Overview">Overview</option>
                        <option value="Vision & Mission">Vision & Mission</option>
                        <option value="Board of Directors">Board of Directors</option>
                        <option value="Management Team">Management Team</option>
                        <option value="Investor Relations">Investor Relations</option>
                    </select>
                    <!-- to make a hoverable dropdown you should have used a list and then set opacity when hovering -->
                    <!-- Sabme respective links daal do -->
                    <a class="select-options" href="#">Specialities</a>
                    <a class="select-options" href="#">Health Packages</a>
                    <a class="select-options" href="#">Doctors</a>
                    <a class="select-options" href="#">Careers</a>
                    <a class="select-options" href="#">Events</a>
                    <a class="select-options" href="#">Blogs</a>
                    <a class="select-options" href="#">Academics</a>
                    <a class="select-options" href="#">Transplant</a>

                    <label class="select-options" for="COVID-Care"></label>
                    <select class="covid dropdown select-options" name="COVID-Care" id="COVID-Care">
                        <option value="COVID Care">COVID Care</option>
                        <option value="efg">Covid Warriers</option>
                    </select>

                    <a class="select-options" href="<?php
    if(empty($_SESSION['username'])) {
        echo 'login.php';
    } else {
        echo 'logout.php';
    }
?>" style="position: absolute; left: 13.5rem"><?php
    if(empty($_SESSION['username'])) {
        echo 'Log in / Sign up';
    } else {
        echo 'Log out';
    }
?></a>

                </form>
            </div>
        </div>
    </header>

    <a href="./enquiry.php"><span class="sticky">Quick Enquiry</span></a>

    <!-- Make use of anchor tags before images to open a site on clicking the image -->
    <div class="slider">
        <div id="carouselExampleAutoplaying" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="./Screenshot 2024-02-15 190736.png" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="./Screenshot 2024-02-15 190621.png" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="./Screenshot 2024-02-15 190628.png" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="./Screenshot 2024-02-15 190702.png" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="./Screenshot 2024-02-15 190711.png" class="d-block w-100" alt="...">
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleAutoplaying"
                data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleAutoplaying"
                data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </div>

    <div class="cards">
        <div class="card2 boxes">
            <img src="./imgs/Screenshot 2024-02-16 093059.png" alt="#">
            <div class="about">Emergency</div>
            <div class="pqr">The Kingsway Emergency department is manned with Certified & Trained doctors…</div>
            <a href="#">Read More</a>
        </div>
        <div class="card3 boxes">
            <img src="./imgs/Screenshot 2024-02-16 093150.png" alt="#">
            <div class="about">Book Appointment</div>
            <div class="pqr">Online Hassle Free Appointment Booking.</div>
            <a href="<?php
    if(isset($_SESSION['username'])) {
        echo 'Book_an_appointment.php';
    } else {
        echo 'login.php';
    }
?>">Read More</a>

        </div>
        <div class="card1 boxes">
            <img src="./imgs/Screenshot 2024-02-16 093201.png" alt="#">
            <div class="about">Call Us</div>
            <div class="pqr">Please Call for Inquiry and Appointment</div>
            <a href="#">0712 6789100</a>
        </div>
    </div>

    <div id="aboutus">
        <div class="vid">
            <img src="https://thelivenagpur.com/wp-content/uploads/2021/05/a18b9dce-2f08-4ae7-aeae-c4f1fbc00458.jpg"
                alt="#">
            <a id="play"
                href="https://thelivenagpur.com/wp-content/uploads/2021/05/a18b9dce-2f08-4ae7-aeae-c4f1fbc00458.jpg">
                <img style="border-radius: 45%;" src="./imgs/Screenshot 2024-02-19 153551.png" alt="#"></a>
        </div>
        <div id="para">
            <span id="a">ABOUT US-</span>
            <span id="b">Welcome to Kingsway Hospitals</span>
            <div id="c"><em>Kingsway Hospitals</em>(Best Multispeciality Hospital Nagpur), A unit of SPANV Medisearch
                Life
                sciences Pvt. Ltd promoted by SMS group and the eminent doctors of Nagpur, to create a world class
                speciality health care facility under one roof in central India. This is a seamless initiative taken
                with an innovative thinking to match the world class Health Care parameters in terms of Infrastructure,
                Evidence based Clinical practice, all this combined with Quality and compassionate care.

                Our vision is “To be globally acclaimed for exquisite care with personalised approach and be the most
                trusted partner of your health & wellness.” Our mission is “To honour and empower every life into a
                healthier one”.</div>
            <a href="#">
                <p>Read More...</p>
            </a>
        </div>
    </div>

    <img id="abcd" src="./imgs/Screenshot 2024-02-16 100206.png" alt="#">

<span id="x">-OUR SPECIALITIES-</span>
<span id="y">Medical Services</span>

<div class="container">
    <div class="dibba rect1">
        <a href="#"><img
                src="./imgs/Screenshot 2024-02-20 002051.png" alt="">
            <p class="dib">Institute of Cardiac Sciences</p>
        </a>
    </div>
    <div class="dibba rect2">
        <a href="#"><img
                src="./imgs/Screenshot 2024-02-20 002104.png" alt="">
            <p class="dib">Institute of Gastroenterology</p>
        </a>

    </div>
    <div class="dibba rect3">
        <a href="#"><img
                src="./imgs/Screenshot 2024-02-20 002109.png" alt="">
            <p class="dib">Institute of Nephro-Urology</p>
        </a>
    </div>
    <div class="dibba rect4">
        <a href="#"><img
                src="./imgs/Screenshot 2024-02-20 002114.png" alt="">
            <p class="dib">Institute of Nephro-Urology</p>
        </a>
    </div>
    <div class="dibba rect5">
        <a href="#"><img
                src="./imgs/Screenshot 2024-02-20 002120.png" alt="">
            <p class="dib">Department of Critical care and Emergency Medicine</p>
        </a>
    </div>
    <div class="dibba rect6">
        <a href="#"><img
                src="./imgs/Screenshot 2024-02-20 002128.png" alt="">
            <p class="dib">Department of General Surgery</p>
        </a>
    </div>
    <div class="dibba rect7">
        <a href="#"><img
                src="./imgs/Screenshot 2024-02-20 002132.png" alt="">
            <p class="dib">Department of Internal Surgery</p>
        </a>
    </div>
    <div class="dibba rect8">
        <a href="#"><img
                src="./imgs/Screenshot 2024-02-20 002146.png" alt="">
            <p class="dib">Institute of Orthopaedics & Sports Medicine</p>
        </a>
    </div>
</div>

<div class="endl">
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &#169; Copyright 2024. Kingsway Hospitals Group. All Rights Reserved.
    <span id="send">Privacy Policy | Disclaimer | Contact</span>
</div>
    
</body>
</html>