<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us</title>
    <link rel="stylesheet" href="../css/contact.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

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
                        <li><a href="../view/about.php" >ABOUT</a></li>                    <li><a href="../view/home.php">SERVICE</a></li>
                        <li><a href="../view/news.php">NEWS</a></li>
                        <li><a href="../view/contact.php" style="color: #00AEED;">CONTACT</a></li>
                    </ul>
                </div>
            </div> 
        </div>



    <div class="contact-container">
        <!-- Contact Information Section -->
        <div class="contact-info">
            <h2 class="contact-title">Request Our Services</h2>
            <p class="contact-desc">
            Capture your moments with us. Whether you need stunning photography, cinematic videography, or professional editing, our team is ready to bring your project to life. Reach out today and let's create something unforgettable.
            </p>
            <div class="contact-details">
                <p><strong>Email</strong></p>
                <p>laraey@gmail.com</p>
                <p><strong>Socials</strong></p>
                <p><a href="#">Instagram</a></p>
                <p><a href="#">Twitter</a></p>
                <p><a href="#">Facebook</a></p>
            </div>
        </div>

        <!-- Contact Form Section -->
        <div class="contact-form">
            <form action="../action/add_booking.php" method="POST">
                <input type="text" name="name" placeholder="Name" required>
                <input type="email" name="email" placeholder="Email" required>
                <input type="text" name="phonenumber" placeholder="Phone Number" required>
                <select name="service" required>
                    <option value="" disabled selected>What service are you interested in</option>
                    <option value="photography">Photography</option>
                    <option value="videography">Videography</option>
                    <option value="editing">Editing</option>
                </select>
                <textarea name="message" rows="4" placeholder="Message" required></textarea>
                <button type="submit">Submit</button>
            </form>
        </div>
    </div>

    <script>
            document.addEventListener('DOMContentLoaded', function () {
                const urlParams = new URLSearchParams(window.location.search);
                const message = urlParams.get('msg');
                if (message) {
                    Swal.fire("Notice", message, "info");
                }
            });
    </script>
</body>
</html>
