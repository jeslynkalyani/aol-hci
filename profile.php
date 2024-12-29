<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="styles/style.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.1/css/all.min.css" integrity="sha512-5Hs3dF2AEPkpNAR7UiOHba+lRSJNeM2ECkwxUIxC1Q/FLycGTbNapWXB4tP889k5T5Ju8fs4b1P5z/iB4nMfSQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <title>Maption</title>
</head>
<body>
    <div class="container">
        <div class="header">
            <img src="images/profile.jpg" alt="Profile Picture" class="profile-pic">
            <div class="greeting">Hey, <?php echo $_SESSION['name']?></div>
            <div class="brand">Maption</div>
        </div>

        <div class="profile-card">
            <div class="row">
                <div class="col">
                    <img src="images/profile.jpg" alt="Profile Picture" class="profile-pic-large">
                    <a href="editprofile.php">
                        <button class="blue-btn">Edit Profile</button>
                    </a>
                </div>
                <div class="col">
                <h2><?php echo $_SESSION['name']?></h2>
                <p>
                    I am a passionate traveler who loves exploring new horizons and diverse cultures.
                    From stunning landscapes to vibrant cities, I capture my journeys through photography
                    and enjoy discovering local cuisines, traditions, and hidden gems. For me, traveling is
                    more than a hobby it's a way to connect with the world and create lasting memories.
                </p>
                </div>
            </div>
        </div>
    
        <div class="favorite-trips">
            <h3>Favorite trips</h3>
            <div class="trip-cards">
                <div class="trip-card">
                    <img src="images/trip1.jpg" alt="Trip Image" class="trip-image">
                    <div class="trip-details">
                    <p><i class="fa-solid fa-square-arrow-up-right"></i> <strong>From:</strong> Glodok, Taman Sari</p>
                    <p><i class="fa-solid fa-map-pin"></i><strong> To:</strong> Kempinski Hotel, Bundaran HI</p>
                    <div class="transport-icons">
                        <i class="fa-solid fa-car"></i>
                        <i class="fa-solid fa-train"></i>
                    </div>
                    </div>
                </div>
                <div class="trip-card">
                    <img src="images/trip2.jpg" alt="Trip Image" class="trip-image">
                    <div class="trip-details">
                    <p><i class="fa-solid fa-square-arrow-up-right"></i><strong> From:</strong> Central Park Mall, Kebon Jeruk</p>
                    <p><i class="fa-solid fa-map-pin"></i><strong> To:</strong> Riverside Apartment, Muara Karang</p>
                    <div class="transport-icons">
                        <i class="fa-solid fa-person-walking"></i>
                        <i class="fa-solid fa-motorcycle"></i>
                        <i class="fa-solid fa-bus"></i>
                    </div>
                    </div>
                </div>
            </div>
            <a href="#" class="view-more">View more</a>
        </div>
        
        <div class="saved-routes">
            <h3>Saved routes</h3>
            <div class="route-card">
                <div class="route-details">
                    <p><i class="fa-solid fa-square-arrow-up-right"></i><strong> From: </strong> National Museum of Indonesia</p>
                    <p><i class="fa-solid fa-map-pin"></i> <strong> To: </strong>Kempinski Hotel, Bundaran HI</p>
                </div>
                <a href="">
                    <button class="go-button">Go</button>
                </a>
            </div>
            <div class="route-card">
                <div class="route-details">
                    <p><i class="fa-solid fa-square-arrow-up-right"></i><strong> From: </strong> SMAK 1 Penabur Jakarta</p>
                    <p><i class="fa-solid fa-map-pin"></i> <strong> To: </strong>Central Market PIK 2</p>
                </div>
                <a href="">
                    <button class="go-button">Go</button>
                </a>
            </div>
        </div>
        
        <div class="navbar">
        <div class="nav-item">
            <a href="map.html">
                <i class="fa-solid fa-location-dot"></i>
            </a>
        </div>
        <div class="nav-item">
            <a href="home.php">
                <i class="fa-solid fa-house"></i>
            </a>
        </div>
        <div class="nav-item active">
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
    </div>
</body>
<script>
    document.querySelectorAll('.nav-item a').forEach((item) => {
        item.addEventListener('click', () => {
            localStorage.setItem('activePage', item.getAttribute('href'));
        });
    });

    const currentPage = localStorage.getItem('activePage');
    if (currentPage) {
        document.querySelectorAll('.nav-item').forEach((navItem) => {
            navItem.classList.remove('active');
            const link = navItem.querySelector('a');
            if (link && link.getAttribute('href') === currentPage) {
                navItem.classList.add('active');
            }
        });
    }
</script>
</html>
