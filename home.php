<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles/homeStyle.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.1/css/all.min.css" integrity="sha512-5Hs3dF2AEPkpNAR7UiOHba+lRSJNeM2ECkwxUIxC1Q/FLycGTbNapWXB4tP889k5T5Ju8fs4b1P5z/iB4nMfSQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Maption</title>
</head>
<body>
    <div class="content-container">
        <div class="header">
            <img src="images/profile.jpg" alt="Profile Picture" class="profile-pic">
            <div class="greeting">Hey, <?php echo $_SESSION['name']?></div>
            <div class="brand">Maption</div>
        </div>
        <div class="row-spread" id="space-left">
            <h2>Ready to start your journey?</h2>
        </div>
        <div class="card">
            <div class="col-weather">
                <h1 id="weather">22°</h1>
                <p id="weather">August 25, 2024</p>
                <div class="row-gapped">
                    <img src="images/Maps Icon - 3.svg" alt="maps">
                    <p id="weather">Jakarta, Indonesia</p>
                </div>
            </div>
            <div class="col">
                <img src="images/Group 157.svg" alt="">
            </div>
        </div>
        <br>
        <div class="row-spread">
            <p id="align-p">Your trip history</p>
            <img src="images/menu-04.svg" alt="list">
        </div>
        <div class="trip-container">
            <div class="trip-card">
                <div class="col">
                    <div class="row">
                        <img id="spaced" src="images\Frame 25.svg" alt="walk">
                        <img id="spaced" src="images\Frame 26.svg" alt="walk">
                        <img id="spaced" src="images\Frame 24.svg" alt="walk">
                    </div>
                    <div class="row trip-content">
                        <div class="trip-i">
                            <img src="images\Arrow.svg" alt="outgoing">
                            <p>From: Central Park Mall, Kebon Jeruk</p>
                        </div>
                        <div class="trip-i">
                            <img src="images\Arrow (1).svg" alt="incoming">
                            <p>To: Riverside Apartment, Muara Karang</p>
                        </div>
                        <div class="trip-i">
                            <img src="images\Dollar (USD).svg" alt="dollar">
                            <p>Total fare fee: Rp 27.500,-</p>
                        </div>
                    </div>
                    <div class="row bold">
                        <img src="images/elements.svg" alt="time">
                        <p>Duration: 17.25 - 18.32</p>
                    </div>
                </div>
                <div id="end" class="col">
                    <p>July 8, 2024</p>
                    <div class="duration">
                        <h1>57</h1>
                        <h4>minutes</h4>
                    </div>
                    <br>
                    <img src="images/Heart filled.svg" alt="">
                </div>
            </div>
            <div class="trip-card">
                <div class="col">
                    <div class="row">
                        <img id="spaced" src="images\Frame 25.svg" alt="walk">
                    </div>
                    <div class="row trip-content">
                        <div class="trip-i">
                            <img src="images\Arrow.svg" alt="outgoing">
                            <p>From: BINUS Syahdan Campus, Kemanggisan</p>
                        </div>
                        <div class="trip-i">
                            <img src="images\Arrow (1).svg" alt="incoming">
                            <p>To: BINUS Anggrek Campus, Kemanggisan</p>
                        </div>
                        <div class="trip-i">
                            <img src="images\Dollar (USD).svg" alt="dollar">
                            <p>Total fare fee: Rp 0,-</p>
                        </div>
                    </div>
                    <div class="row bold">
                        <img src="images/elements.svg" alt="time">
                        <p>Duration: 09.05 - 09.10</p>
                    </div>
                </div>
                <div id="end" class="col">
                    <p>May 23, 2024</p>
                    <div class="duration">
                        <h1>5</h1>
                        <h4>minutes</h4>
                    </div>
                    <br>
                    <img src="images/Heart filled (1).svg" alt="">
                </div>
            </div>
            <div class="trip-card">
                <div class="col">
                    <div class="row">
                        <img id="spaced" src="images\Frame 31.svg" alt="walk">
                        <img id="spaced" src="images\Frame 33.svg" alt="walk">
                    </div>
                    <div class="row trip-content">
                        <div class="trip-i">
                            <img src="images\Arrow.svg" alt="outgoing">
                            <p>From: Glodok, Taman Sari</p>
                        </div>
                        <div class="trip-i">
                            <img src="images\Arrow (1).svg" alt="incoming">
                            <p>To: Kempinski Hotel, Bundaran HI</p>
                        </div>
                        <div class="trip-i">
                            <img src="images\Dollar (USD).svg" alt="dollar">
                            <p>Total fare fee: Rp 27.500,-</p>
                        </div>
                    </div>
                    <div class="row bold">
                        <img src="images/elements.svg" alt="time">
                        <p>Duration: 18.09 - 18.40</p>
                    </div>
                </div>
                <div id="end" class="col">
                    <p>December 31, 2023</p>
                    <div class="duration">
                        <h1>39</h1>
                        <h4>minutes</h4>
                    </div>
                    <br>
                    <img src="images/Heart filled.svg" alt="">
                </div>
            </div>
        </div>
    </div>
    <div class="navbar">
        <div class="nav-item">
            <a href="map.html">
                <i class="fa-solid fa-location-dot"></i>
            </a>
        </div>
        <div class="nav-item active">
            <a href="home.php">
                <i class="fa-solid fa-house"></i>
            </a>
        </div>
        <div class="nav-item">
            <a href="profile.php">
                <i class="fa-solid fa-user"></i>
            </a>
        </div>
        <div class="nav-item">
            <a href="review.php">
                <i class="fa-solid fa-comment"></i>
            </a>
        </div>
    </div>   
</body>
</html>