<?php
   session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trend Blogger</title>
    <!-- Box-icon -->
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <div class="nav container">
            <!-- <a href="#" class="logo">Design <span>TheBlogs</span></a> -->
            <button class="logo">TheBlogs</button>
            <!-- <a href="/ -->
            <button onclick="goToPage()">Sign Up</button>
            <script>
                function goToPage() {
                  location.href = "sign up.html";
                }
              </script>
          
        </div>
    </header>

    <section class="home" id="home">
        <div class="home-text container">
            <h2 class="home-title">Insight Ink Well</h2>
            <span class="home-subtitle">Your source of great content</span>
        </div>
    </section>

    <section class="about container" id="about">
        <div class="contentBx">
            <h2 class="titleText">Paint the trending topics with ink</h2>
            <p class="title-text">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Laborum eos consequuntur voluptate dolorum totam provident ducimus cupiditate dolore doloribus repellat. Saepe ad fugit similique quis quam. Odio suscipit incidunt distinctio.
                <br>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sed blanditiis libero pariatur ipsum suscipit voluptates aut, repellendus quos dolor autem, natus laboriosam consectetur maxime cumque, sunt magni optio? Veritatis, ea?
            </p>
            <a href="#" class="btn2">Read more</a>
        </div>
        <div class="imgBx">
            <img src="images/about.jpg" alt="" class="fitBg">
        </div>
    </section>

    <div class="post-filter container">
        <span class="filter-item active-filter" data-filter="all">All</span>
        <span class="filter-item" data-filter="tech">Tech</span>
        <span class="filter-item" data-filter="food">Food</span>
        <span class="filter-item" data-filter="travel">Travel</span>
    </div>
    
    <div class="post container">
        <!-- Post 1 -->
        <div class="post-box tech">
            <img src="images/imga.jpg" alt="" class="post-img">
            <h2 class="category">Tech</h2>
            <a href="#" class="post-title">How to solve the tech puzzle in career</a>
            <span class="post-date">08 March 2024</span>
            <p class="post-description">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Consectetur, similique, rerum excepturi harum, vitae facilis corrupti vel modi debitis est perferendis aut quasi ea unde repudiandae iste architecto. Corporis, voluptates.</p>
            <div class="profile">
                <img src="images/testi1.jpg" alt="" class="profile-img">
                <span class="profile-name">Lisa</span>
            </div>
        </div>
        <!-- Post 2 -->
        <div class="post-box food">
            <img src="images/img2.jpg" alt="" class="post-img">
            <h2 class="category">Food</h2>
            <a href="#" class="post-title">Foodesthetic</a>
            <span class="post-date">08 March 2024</span>
            <p class="post-description">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Consectetur, similique, rerum excepturi harum, vitae facilis corrupti vel modi debitis est perferendis aut quasi ea unde repudiandae iste architecto. Corporis, voluptates.</p>
            <div class="profile">
                <img src="images/testi2.jpg" alt="" class="profile-img">
                <span class="profile-name">Hardin</span>
            </div>
        </div>
        <!-- Post 3 -->
        <div class="post-box food">
            <img src="images/img3.jpg" alt="" class="post-img">
            <h2 class="category">Food</h2
            <a href="#" class="post-title">Good Health vs Good Food </a>
            <span class="post-date">11 Feb 2023</span>
            <p class="post-description">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Consectetur, similique, rerum excepturi harum, vitae facilis corrupti vel modi debitis est perferendis aut quasi ea unde repudiandae iste architecto. Corporis, voluptates.</p>
            <div class="profile">
                <img src="images/testi1.jpg" alt="" class="profile-img">
                <span class="profile-name">Lisa</span>
            </div>
        </div>
        <!-- Post 4 -->
        <div class="post-box tech">
            <img src="images/img4.jpg" alt="" class="post-img">
            <h2 class="category">Tech</h2>
            <a href="#" class="post-title">Worldernet</a>
            <span class="post-date">20 october 2023</span>
            <p class="post-description">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Consectetur, similique, rerum excepturi harum, vitae facilis corrupti vel modi debitis est perferendis aut quasi ea unde repudiandae iste architecto. Corporis, voluptates.</p>
            <div class="profile">
                <img src="images/testi3.jpg" alt="" class="profile-img">
                <span class="profile-name">Cristian</span>
            </div>
        </div>
        <!-- Post 5 -->
        <div class="post-box travel">
            <img src="images/img5.jpg" alt="" class="post-img">
            <h2 class="category">Travel</h2>
            <a href="#" class="post-title">Best places in USA</a>
            <span class="post-date">12 march 2024</span>
            <p class="post-description">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Consectetur, similique, rerum excepturi harum, vitae facilis corrupti vel modi debitis est perferendis aut quasi ea unde repudiandae iste architecto. Corporis, voluptates.</p>
            <div class="profile">
                <img src="images/testi1.jpg" alt="" class="profile-img">
                <span class="profile-name">Lisa</span>
            </div>
        </div>
        <!-- Post 6 -->
        <div class="post-box travel">
            <img src="images/imgb.jpg" alt="" class="post-img">
            <h2 class="category">Travel</h2>
            <a href="#" class="post-title">Where to go?</a>
            <span class="post-date">01 Feb 2023</span>
            <p class="post-description">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Consectetur, similique, rerum excepturi harum, vitae facilis corrupti vel modi debitis est perferendis aut quasi ea unde repudiandae iste architecto. Corporis, voluptates.</p>
            <div class="profile">
                <img src="images/testi2.jpg" alt="" class="profile-img">
                <span class="profile-name">Hardin</span>
            </div>
        </div>
        <!-- Post 7 -->
        <div class="post-box tech">
            <img src="images/img7.jpg" alt="" class="post-img">
            <h2 class="category">Tech</h2>
            <a href="#" class="post-title">Techno Dillema</a>
            <span class="post-date">12 December 2022</span>
            <p class="post-description">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Consectetur, similique, rerum excepturi harum, vitae facilis corrupti vel modi debitis est perferendis aut quasi ea unde repudiandae iste architecto. Corporis, voluptates.</p>
            <div class="profile">
                <img src="images/testi1.jpg" alt="" class="profile-img">
                <span class="profile-name">Lisa</span>
            </div>
        </div>
        <!-- Post 1 -->
        <div class="post-box travel">
            <img src="images/img8.jpg" alt="" class="post-img">
            <h2 class="category">Travel</h2>
            <a href="#" class="post-title">Tour to Universe</a>
            <span class="post-date">10 November 2023</span>
            <p class="post-description">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Consectetur, similique, rerum excepturi harum, vitae facilis corrupti vel modi debitis est perferendis aut quasi ea unde repudiandae iste architecto. Corporis, voluptates.</p>
            <div class="profile">
                <img src="images/testi2.jpg" alt="" class="profile-img">
                <span class="profile-name">Hardin</span>
            </div>
        </div>
        <!-- Post 9 -->
        <div class="post-box food">
            <img src="images/img10.jpg" alt="" class="post-img">
            <h2 class="category">Food</h2>
            <a href="#" class="post-title">Shrimp & his...</a>
            <span class="post-date">15 August 2022</span>
            <p class="post-description">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Consectetur, similique, rerum excepturi harum, vitae facilis corrupti vel modi debitis est perferendis aut quasi ea unde repudiandae iste architecto. Corporis, voluptates.</p>
            <div class="profile">
                <img src="images/testi1.jpg" alt="" class="profile-img">
                <span class="profile-name">Cristian</span>
            </div>
        </div>
    </div>

    <footer>
        <div class="footer-container">
            <div class="sec aboutus">
                <h2>About Us</h2>
                <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ducimus quisquam minus quo illo numquam vel incidunt pariatur hic commodi expedita tempora praesentium at iure fugiat ea, quam laborum aperiam veritatis.</p>
                <ul class="sci">
                    <li><a href="#"><i class="bx bxl-facebook"></i></a></li>
                    <li><a href="#"><i class="bx bxl-instagram"></i></a></li>
                    <li><a href="#"><i class="bx bxl-twitter"></i></a></li>
                    <li><a href="#"><i class="bx bxl-linkedin"></i></a></li>
                </ul>
            </div>
            <div class="sec quicklinks">
                <h2>Quick Links</h2>
                <ul>
                    <li><a href="#">Home</a></li>
                    <li><a href="#">About</a></li>
                </ul>
            </div>
            <div class="sec contactBx">
                <h2>Contact Info</h2>
                <ul class="info">
                    <li>
                        <span><i class='bx bxs-map'></i></span>
                        <span>138 Main Street <br> Cityville,Chittagong  <br> Bangladesh </span>
                    </li>
                    <li>
                        <span><i class='bx bx-envelope' ></i></span>
                        <p><a href="mailto:designtheblogs95@gmail.com">Designtheblogs95@gmail.com</a></p>
                    </li>
                </ul>
            </div>
        </div>
    </footer>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.min.js" integrity="sha512-aVKKRRi/Q/YV+4mjoKBsE4x3H+BkegoM/em46NNlCqNTmUYADjBbeNefNxYV7giUp0VxICtqdrbqU7iVaeZNXA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="main.js"></script>
</body>
</html>