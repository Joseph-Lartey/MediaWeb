<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lartey Studios-Home</title>
    <link rel="stylesheet" href="../css/home.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">
</head>
<body>
    <div class="main" id="home">
        <div class="navbar">
            <div class="logo-container">
                <img src="../assets/logo3.png" alt="Lartey Studios Logo" class="logo-img">
                <h2 class="logo-text">Lartey Studios</h2>
            </div>
            <div class="menu">
                <ul>
                    <li><a href="#home" style="color: #00AEED;">HOME</a></li>
                    <li><a href="../view/about.php">ABOUT</a></li>
                    <li><a href="#services">SERVICE</a></li>
                    <li><a href="../view/news.php">NEWS</a></li>
                    <li><a href="../view/contact.php">CONTACT</a></li>
                </ul>
            </div>
        </div> 

        <div class="content" id="home">
            <h1>A Great Place to<br> Capture Moments</h1>
            <p class="par">
            Lartey Studios is most focused on turning your<br> events into timeless memories through<br> exceptional videography and photography.
            </p>
            <button class="cn"><a href="../view/contact.php">Join US</a></button>
            <button class="cn1"><a href="../view/about.php">Learn More</a></button>

        </div>
    </div>


    <section class="services" id="services">
        <h2>OUR SERVICES</h2>
        <div class="services-grid">
            <div class="service">
                <img src="../assets/7.jpg" alt="Videography">
                <h3>Videography</h3>
            </div>
            <div class="service">
                <img src="../assets/8.jpg" alt="Photography">
                <h3>Photography</h3>
            </div>
            <div class="service">
                <img src="../assets/6.jpg" alt="Editing">
                <h3>Editing</h3>
            </div>
            <div class="service">
                <img src="../assets/9.jpg" alt="Event Live Streaming">
                <h3>Event Live Streaming</h3>
            </div>
        </div>
    </section>

<!-- Modals Section -->
    <div id="videography-modal" class="modal">
        <div class="modal-content">
            <span class="close">&times;</span>
            <div class = "heading" style="background-color:#00AEED;">
                <h2>Videography</h2>
            </div>
            <img src="../assets/7.jpg" alt="Videography" class="modal-image">
            <p>At Lartey Studios, we provide exceptional videography services tailored to capture the essence of your events. Our team of skilled videographers utilizes state-of-the-art equipment to ensure that every moment is recorded with precision and creativity. Whether it's a wedding, corporate event, or any special occasion, we strive to deliver high-quality videos that meet and exceed our clients' expectations. Our videography service is not just about capturing footage; it's about telling a story that reflects the unique vibe of your event.</p>
        </div>
    </div>

    <div id="photography-modal" class="modal">
        <div class="modal-content">
            <span class="close">&times;</span>
            <div class = "heading" style="background-color:#00AEED;">
                <h2>Photography</h2>
            </div>
            
            <img src="../assets/8.jpg" alt="Photography" class="modal-image">
            <p>Our photography services are designed to immortalize your cherished moments. With a keen eye for detail, our photographers capture the emotions and atmosphere of your event in stunning images. We offer a variety of photography styles to suit your needs, whether it's traditional, candid, or artistic photography.</p>
        </div>
    </div>

    <div id="editing-modal" class="modal">
        <div class="modal-content">
            <span class="close">&times;</span>
            <div class = "heading" style="background-color:#00AEED;">
                <h2>Editing</h2>
            </div>
            <img src="../assets/6.jpg" alt="Editing" class="modal-image">
            <p>Our editing services bring your photos and videos to life. We use advanced software to enhance the quality, add special effects, and create polished final products that are ready to be shared with the world. Whether you need video editing, photo retouching, or post-production services, we have the expertise to make your content shine.</p>
        </div>
    </div>

    <div id="streaming-modal" class="modal">
        <div class="modal-content">
            <span class="close">&times;</span>
            <div class = "heading" style="background-color:#00AEED;">
                <h2>Event Live Streaming</h2>
            </div>
            <img src="../assets/9.jpg" alt="Event Live Streaming" class="modal-image">
            <p>Our event live streaming services allow you to share your special moments with a global audience in real-time. We use the latest technology to ensure high-quality streaming, providing a seamless experience for viewers, no matter where they are located.</p>
        </div>
    </div>




    <footer>
        <div class="container">
            <div class="footer-about">
                <h4>About Us</h4>
                <p>We are dedicated to providing exceptional videography and photography services for events.</p>
            </div>
            <div class="footer-contact">
                <h4>Contact</h4>
                <p>Email: info@larteystudios.com</p>
                <p>Phone: +123 456 789</p>
                <p>Address: 123 Lartey Street, Accra, Ghana</p>
            </div>
        </div>
    </footer>

    <script src="../js/home.js"></script>
</body>
</html>
