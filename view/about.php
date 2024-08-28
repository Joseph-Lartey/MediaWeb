<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About</title>
    <link rel="stylesheet" href="../css/about.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">
    <title>About</title>
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
                    <li><a href="../view/home.php">HOME</a></li>
                    <li><a href="../view/about.php" style="color: #00AEED;">ABOUT</a></li>                    <li><a href="../view/home.php">SERVICE</a></li>
                    <li><a href="../view/news.php">NEWS</a></li>
                    <li><a href="../view/contact.php">CONTACT</a></li>
                </ul>
            </div>
        </div> 
    </div>

    <div class="about-section">
        <h1>ABOUT US</h1>
    </div>

    <div class="mission-vision">
        <div class="mission">
            <h2>MISSION</h2>
            <p>At Lartey Studios, our mission is to capture and preserve the most cherished moments of our clients through innovative videography and photography. We are committed to delivering exceptional quality, creativity, and personalized service, ensuring that every project we undertake transforms into a timeless memory.</p>
        </div>
        <div class="vision">
            <h2>VISION</h2>
            <p>Our vision is to become a leading name in the event videography and photography industry, known for our artistry, reliability, and dedication to client satisfaction. We aspire to create lasting impressions and inspire others through the power of visual storytelling, making every event unforgettable.</p>
        </div>
    </div>

    <div class="our-story">
        <h2>OUR STORY</h2>
        <p>Lartey Studios was founded by [Founder's Name] with a passion for capturing life's most cherished moments. What started as a small hobby grew into a thriving business built on creativity, quality, and a deep love for storytelling. Over the years, we've had the privilege of turning countless events into lasting memories, and we remain dedicated to making every moment unforgettable. At Lartey Studios, your story is our focus.</p>
    </div>

    <div class="team">
        <h2>MEET THE TEAM</h2>
        <div class="team-members">
            <div class="team-member" data-member="tim-cook">
                <img src="../assets/11.jpg" alt="Tim Cook">
                <h3>Tim Cook</h3>
                <p>Project Manager</p>
            </div>
            <div class="team-member" data-member="john-doe">
                <img src="../assets/12.jpg" alt="John Doe">
                <h3>John Doe</h3>
                <p>Financial Manager</p>
            </div>
            <div class="team-member" data-member="lady-forest">
                <img src="../assets/13.jpg" alt="Lady Forest">
                <h3>Lady Forest</h3>
                <p>Director</p>
            </div>
            <div class="team-member" data-member="amin-gul">
                <img src="../assets/14.jpg" alt="Amin Gul">
                <h3>Amin Gul</h3>
                <p>CEO</p>
            </div>

        </div>
    </div>



    
<!-- Modals for Team Members -->
<div id="tim-cook-modal" class="modal">
        <div class="modal-content">
            <span class="close">&times;</span>
            <h2>Tim Cook - Project Manager</h2>
            <img src="../assets/11.jpg" alt="Tim Cook" class="modal-image">
            <p>Tim Cook is the Project Manager at Lartey Studios. He oversees all projects to ensure they are completed on time and to the highest standard.</p>
            <div class="socials">
                <a href="#" class="social-link">LinkedIn</a>
                <a href="#" class="social-link">Twitter</a>
            </div>
        </div>
    </div>

    <div id="john-doe-modal" class="modal">
        <div class="modal-content">
            <span class="close">&times;</span>
            <h2>John Doe - Financial Manager</h2>
            <img src="../assets/12.jpg" alt="John Doe" class="modal-image">
            <p>John Doe manages the financial aspects of Lartey Studios, ensuring financial stability and growth.</p>
            <div class="socials">
                <a href="#" class="social-link">LinkedIn</a>
                <a href="#" class="social-link">Twitter</a>
            </div>
        </div>
    </div>

    <div id="lady-forest-modal" class="modal">
        <div class="modal-content">
            <span class="close">&times;</span>
            <h2>Lady Forest - Director</h2>
            <img src="../assets/13.jpg" alt="Lady Forest" class="modal-image">
            <p>Lady Forest directs all creative efforts at Lartey Studios, bringing a unique vision to each project.</p>
            <div class="socials">
                <a href="#" class="social-link">LinkedIn</a>
                <a href="#" class="social-link">Twitter</a>
            </div>
        </div>
    </div>

    <div id="amin-gul-modal" class="modal">
        <div class="modal-content">
            <span class="close">&times;</span>
            <h2>Amin Gul - CEO</h2>
            <img src="../assets/14.jpg" alt="Amin Gul" class="modal-image">
            <p>Amin Gul is the CEO of Lartey Studios, leading the company with a passion for innovation and excellence.</p>
            <div class="socials">
                <a href="#" class="social-link">LinkedIn</a>
                <a href="#" class="social-link">Twitter</a>
            </div>
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

    <script src="../js/about.js"></script>

    
</body>
</html>