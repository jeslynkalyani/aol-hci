<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Review</title>
    <link rel="stylesheet" href="styles/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.1/css/all.min.css" integrity="sha512-5Hs3dF2AEPkpNAR7UiOHba+lRSJNeM2ECkwxUIxC1Q/FLycGTbNapWXB4tP889k5T5Ju8fs4b1P5z/iB4nMfSQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>
    <div class="container">
        <div class="header">
            <img src="images/profile.jpg" alt="Profile Picture" class="profile-pic">
            <div class="greeting">Hey, <?php echo $_SESSION['name']?></div>
            <div class="brand">Maption</div>
        </div>

        <div class="search-bar">
            <h3>Place Review</h3>
            <input type="text" placeholder="Search here..." />
            <i class="fa-solid fa-microphone"></i>
        </div>

        <div class="review">
            <h4>Recently Uploaded</h4>
            <a href="writeReview.html">
                <button class="blue-btn">Write a review</button>
            </a>
        </div>

        <div class="review" id="spread">
            <a href="review.php">
                <button class="filter-btn">All Ratings</button>
            </a>
            <a href="reviewByHighest.php">
                <button class="filter-btn filter-active">Highest Rating</button>
            </a>
            <a href="reviewByLowest.php">
                <button class="filter-btn">Lowest Rating</button>
            </a>
            <a href="reviewByRecent.php">
                <button class="filter-btn">Most Recent Rating</button>
            </a>
        </div>

        <div class="reviews">
            
            <div class="review-card">
                <img src="images/library.jpg" alt="Perpustakaan" class="review-image">
                <div class="review-content">
                    <h3 class="review-place"><i class="fas fa-map-marker-alt"></i> Perpustakaan Nasional Republik Indonesia</h3>
                    <div class="rating">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <p>The library is very comfortable for reading books. I highly recommend this place, especially for students. It's located in a private uni area so traffic isn't that bad</p>
                    <p class="author-container">
                        <span class="author">From: Nayeon95</span>
                        <span class="time">5 hours ago</span>
                    </p>  
                </div>
            </div>

            <div class="review-card">
                <img src="images/binus.png" alt="BINUS University" class="review-image">
                <div class="review-content">
                    <h3><i class="fas fa-map-marker-alt place"></i> BINUS Anggrek Campus, Kemanggisan</h3>
                    <div class="rating">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="far fa-star"></i>
                    </div>
                    <p>The traffic is insane, especially during after hours, the road condition can be super chaotic and it’s not recommended to go through here after 5pm.</p>
                    <p class="author-container">
                        <span class="author">From: Amelia88</span>
                        <span class="time">Just now</span>
                    </p>  
                </div>
            </div>
            
            <div class="review-card">
                <img src="images/cp.jpg" alt="Central Park Mall" class="review-image">
                <div class="review-content">
                    <h3 class="review-place"><i class="fas fa-map-marker-alt"></i> Central Park Mall</h3>
                    <div class="rating">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="far fa-star"></i>
                        <i class="far fa-star"></i>
                    </div>
                    <p>This mall is very complete, everything is available. However, on holidays, it gets very crowded, the parking lot is always full. </p>
                    <p class="author-container">
                        <span class="author">From: DelRey666</span>
                        <span class="time">Just now</span>
                    </p>  
                </div>
            </div>
        </div>

        <div id="review-list"></div>

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
        <div class="nav-item">
            <a href="profile.php">
                <i class="fa-solid fa-user"></i>
            </a>
        </div>
        <div class="nav-item active">
            <a href="review.php">
                <i class="fa-solid fa-comment"></i>
            </a>
        </div>
    </div>   
    </div>

    <script>
        document.querySelectorAll('.nav-item a').forEach((item) => {
            item.addEventListener('click', () => {
                const href = item.getAttribute('href');
                localStorage.setItem('activePage', href);
            });
        });

        const currentPage = localStorage.getItem('activePage') || "home.html"; 
        document.querySelectorAll('.nav-item').forEach((navItem) => {
            navItem.classList.remove('active'); 
            const link = navItem.querySelector('a');
            if (link && link.getAttribute('href') === currentPage) {
                navItem.classList.add('active'); 
            }
        });
    </script>
</body>
</html>
