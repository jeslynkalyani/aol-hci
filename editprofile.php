<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="styles/editprofile.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.1/css/all.min.css" integrity="sha512-5Hs3dF2AEPkpNAR7UiOHba+lRSJNeM2ECkwxUIxC1Q/FLycGTbNapWXB4tP889k5T5Ju8fs4b1P5z/iB4nMfSQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <title>Maption</title>
</head>
<body>
    <div class="container">
        <div class="blue-btn">
            <a href="profile.php"><h2>Back</h2></a>
        </div>
        <h2>Edit Profile</h2>
        <div class="profile-card">
            <div class="row">
                <div class="col">
                    <img src="images/profile.jpg" alt="Profile Picture" class="profile-pic-large">
                </div>
                <div class="col">
                    <div class="input-name">
                        <input type="text" placeholder=<?php echo $_SESSION['name']?> />
                        <i class="fa-solid fa-edit"></i>
                    </div>
                    <div class="blue-btn">
                        <h4>Change Photo</h4>
                    </div>
                </div>
            </div>
        </div>
        <div class="bio">
            <h2>Bio</h2>
            <div class="inbio">
                <p>I am a passionate traveler who loves exploring new horizons and diverse cultures.
                    From stunning landscapes to vibrant cities, I capture my journeys through photography
                    and enjoy discovering local cuisines, traditions, and hidden gems. For me, traveling is
                    more than a hobby it's a way to connect with the world and create lasting memories.
                </p>
                <i class="fa-solid fa-edit"></i>
            </div>
        </div>
        <div class="registeredemail">
            <h2>Registered Email</h2>
             <div class="inre">
                 <p>john@gmail.com</p>
                 <i class="fa-solid fa-edit"></i>
             </div>
        </div>
        <div class="password">
            <h2>Password</h2>
            <a href="changePassword.php">
                <div class="pink-btn">
                    <h4>Change Password</h4>
                </div>
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