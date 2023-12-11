<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>course</title>

    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">

    <!-- custom css file link  -->
    <link rel="stylesheet" href="style.css">

</head>
<body>
    
<div class="container">

<header>

    <a href="#" class="logo">Tutor<span>Sync</span></a>

    <div id="menu" class="fas fa-bars"></div>

    <nav class="navbar">
        <a href="course.php">courses</a>
        <a href="teacher.php"><i class="fas fa-chalkboard-teacher"></i></a>
        <a href="price.php"><i class="fas fa-dollar-sign"></i></a>
        <a href="#"><i class="fas fa-bell"></i></a>
        <div class="search-bar">
            <input type="text" placeholder="Search">
            <button type="submit"><i class="fas fa-search"></i></button>
        </div>
        <div class="profile-dropdown">
            <a href="profile.html"><i class="fas fa-user"></i></a>
            <div class="dropdown-content">
                <a href="#"><i class="fas fa-user-edit"></i> Edit Profile</a>
                <a href="#"><i class="fas fa-cog"></i> Settings and Privacy</a>
                <a href="#"><i class="fas fa-question-circle"></i> Help and Support</a>
                <a href="#"><i class="fas fa-sign-out-alt"></i> Logout</a>
            </div>
        </div>
    </nav>
    

</header>

<h1 class="heading"> popular courses </h1>

<!-- course section  -->
<!--palitan price to peso subjects, description, and others-->
<section class="course">

<div class="box">
    <img src="images/course-1.svg" alt="">
    <h3>Front End Development</h3>
    <p>Explore the world of front-end development, learning how to create visually appealing and interactive user interfaces. Dive into HTML, CSS, and JavaScript to bring your web designs to life.</p>
    <a href="#" class="btn">Learn More</a>
    <div class="icons">
        <p> <i class="far fa-clock"></i> 2 hours </p>
        <p> <i class="far fa-calendar"></i> 1 month </p>
        <p> <i class="fas fa-book"></i> 2 modules </p>
    </div>
</div>

<div class="box">
    <img src="images/course-2.svg" alt="">
    <h3>Back End Development</h3>
    <p>Dive into the backend of web development, exploring server-side scripting, databases, and server management. Learn to build robust and scalable web applications from the ground up.</p>
    <a href="#" class="btn">Learn More</a>
    <div class="icons">
        <p> <i class="far fa-clock"></i> 2 hours </p>
        <p> <i class="far fa-calendar"></i> 3 months </p>
        <p> <i class="fas fa-book"></i> 6 modules </p>
    </div>
</div>

<!-- Subject 3 -->
<div class="box">
    <img src="images/course-3.svg" alt="">
    <h3>Mobile App Development</h3>
    <p>Learn the essentials of mobile app development, covering both iOS and Android platforms. Build mobile applications from scratch and understand the unique challenges of mobile development.</p>
    <a href="#" class="btn">Learn More</a>
    <div class="icons">
        <p> <i class="far fa-clock"></i> 2 hours </p>
        <p> <i class="far fa-calendar"></i> 6 months </p>
        <p> <i class="fas fa-book"></i> 12 modules </p>
    </div>
</div>

<!-- Subject 4 -->
<div class="box">
    <img src="images/course-4.svg" alt="">
    <h3>Data Science Fundamentals</h3>
    <p>Delve into the world of data science and analytics. Learn to analyze and interpret complex data sets, uncover insights, and make data-driven decisions. Explore tools like Python and R.</p>
    <a href="#" class="btn">Learn More</a>
    <div class="icons">
        <p> <i class="far fa-clock"></i> 2 hours </p>
        <p> <i class="far fa-calendar"></i> 6 months </p>
        <p> <i class="fas fa-book"></i> 12 modules </p>
    </div>
</div>

<!-- Subject 5 -->
<div class="box">
    <img src="images/course-5.svg" alt="">
    <h3>Artificial Intelligence Basics</h3>
    <p>Discover the fundamentals of artificial intelligence and machine learning. Explore algorithms, neural networks, and applications of AI. Gain insights into the future of intelligent systems.</p>
    <a href="#" class="btn">Learn More</a>
    <div class="icons">
        <p> <i class="far fa-clock"></i> 2 hours </p>
        <p> <i class="far fa-calendar"></i> 6 months </p>
        <p> <i class="fas fa-book"></i> 12 modules </p>
    </div>
</div>

<!-- Subject 6 -->
<div class="box">
    <img src="images/course-6.svg" alt="">
    <h3>Web Security Essentials</h3>
    <p>Ensure the security of web applications and websites. Learn about common security threats, encryption, and best practices for securing online platforms. Protect your digital assets.</p>
    <a href="#" class="btn">Learn More</a>
    <div class="icons">
        <p> <i class="far fa-clock"></i> 2 hours </p>
        <p> <i class="far fa-calendar"></i> 6 months </p>
        <p> <i class="fas fa-book"></i> 12 modules </p>
    </div>
</div>


</section>


<!-- footer section  -->

<section class="footer">

    <div class="box-container">

        <div class="box">
            <h3>about us</h3>
            <p>We're on mute</p>
        </div>

        <div class="box">
            <h3>quick links</h3>
            <a href="#">home</a>
            <a href="#">course</a>
            <a href="#">teacher</a>
            <a href="#">price</a>
            <a href="#">review</a>
            <a href="#">contact</a>
        </div>

        <div class="box">
            <h3>follow us</h3>
            <a href="#">facebook</a>
            <a href="#">twitter</a>
            <a href="#">instagram</a>
            <a href="#">linkedin</a>
        </div>

        <div class="box">
            <h3>contact us</h3>
           <p> <i class="fas fa-phone"></i> +123-456-7890 </p>
           <p> <i class="fas fa-envelope"></i> we'reonmute@gmail.com </p>
           <p> <i class="fas fa-map-marker-alt"></i> Philippines </p>
        </div>

    </div>

    <div class="credit"> | all rights reserved </div>

</section>

</div>















<!-- custom js file link -->
<script src="script.js"></script>

</body>
</html>