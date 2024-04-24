<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Drone Parcel Delivery</title>
<link rel="stylesheet" href="styles.css">
</head>
<body>

    <style type="text/css">
        /* Global Styles */
body {
    font-family: Arial, sans-serif;
    margin: 0;
    padding: 0;
}

.container {
    width: 80%;
    margin: 0 auto;
    padding: 20px 0;
}

/* Header Styles */
header {
    background-color: #333;
    color: #fff;
    padding: 20px 0;
}

header h1 {
    margin: 0;
}

header nav ul {
    list-style-type: none;
    padding: 0;
}

header nav ul li {
    display: inline;
    margin-right: 20px;
}

header nav ul li a {
    color: #fff;
    text-decoration: none;
}

/* Hero Section Styles */
#hero {
    background-image: url('drone-parcel-delivery-hero.jpg');
    background-size: cover;
    color: #fff;
    padding: 100px 0;
    text-align: center;
    animation: fadeIn 1s ease-out;
}

#hero h2 {
    font-size: 48px;
    margin-bottom: 30px;
}

#hero .btn {
    background-color: #f8bb11;
    color: #333;
    border: none;
    padding: 15px 30px;
    font-size: 20px;
    text-decoration: none;
    border-radius: 5px;
    transition: background-color 0.3s ease;
}

#hero .btn:hover {
    background-color: #e2a009;
}

/* About Section Styles */
#about {
    background-color: #f4f4f4;
    padding: 50px 0;
}

#about h2 {
    text-align: center;
}

#about p {
    text-align: center;
}

.about-img {
    display: block;
    margin: 0 auto;
    width: 50%;
    border-radius: 10px;
    animation: slideInLeft 1s ease-out;
}

/* Services Section Styles */
#services {
    background-color: #fff;
    padding: 50px 0;
}

.service {
    margin-bottom: 30px;
    text-align: center;
    animation: fadeInUp 1s ease-out;
}

.service-img {
    display: block;
    margin: 0 auto;
    width: 50%;
    border-radius: 10px;
}

/* Contact Section Styles */
#contact {
    background-color: #f4f4f4;
    padding: 50px 0;
    text-align: center;
}

#contact h2 {
    margin-bottom: 30px;
}

#contact form input,
#contact form textarea {
    width: 100%;
    margin-bottom: 20px;
    padding: 10px;
    border: 1px solid #ccc;
    border-radius: 5px;
}

#contact form button {
    background-color: #333;
    color: #fff;
    border: none;
    padding: 10px 20px;
    font-size: 18px;
    cursor: pointer;
    border-radius: 5px;
    transition: background-color 0.3s ease;
}

#contact form button:hover {
    background-color: #555;
}

/* Footer Styles */
footer {
    background-color: #333;
    color: #fff;
    text-align: center;
    padding: 20px 0;
}

/* Animations */
@keyframes fadeIn {
    from {
        opacity: 0;
    }
    to {
        opacity: 1;
    }
}

@keyframes slideInLeft {
    from {
        transform: translateX(-100%);
        opacity: 0;
    }
    to {
        transform: translateX(0);
        opacity: 1;
    }
}

@keyframes fadeInUp {
    from {
        transform: translateY(50px);
        opacity: 0;
   
    }
    to {
        transform: translateY(0);
        opacity: 1;
    }
}
    </style>

<header>
    <div class="container">
        <center><h1>SkyLogistics</h1>
        <p>The Complete Drone Delivery Solution</p><br>
    </center>
        <nav>
            <center>
            <ul>
                <li><a href="#about">About</a></li>
                <li><a href="#services">Services</a></li>
                <li><a href="#contact">Contact</a></li>
                <li><a href="operator/">Operator Login</a></li>
                <li><a href="user/">User login</a></li>
            </ul>
        </center>
        </nav>
    </div>
</header>

<section id="hero">
    <div class="container">
        <h2 style="color: black;">Fast, Reliable Parcel Delivery<br>Using Drones</h2>
        <a href="#services" class="btn">Explore Our Services</a>
    </div>
</section>

<section id="about">
    <div class="container">
        <h2>About Us</h2>
        
        <p>We are a cutting-edge parcel delivery service that utilizes state-of-the-art drones to deliver packages quickly and efficiently.</p>
    </div>
</section>

<section id="services">
    <div class="container">
        <h2>Our Services</h2>
        <div class="service">
           
            <h3>Express Delivery</h3>
            <p>Get your parcels delivered in record time with our express delivery service.</p>
        </div>
        <div class="service">
           
            <h3>Contactless Delivery</h3>
            <p>Stay safe with our contactless delivery option, where drones drop off parcels without any physical contact.</p>
        </div>
        <div class="service">
           
            <h3>Real-time Tracking</h3>
            <p>Track your parcels in real-time and know exactly when they will arrive at their destination.</p>
        </div>
    </div>
</section>

<section id="contact">
    <div class="container">
        <h2>Contact Us</h2>
        <p>Have questions or need assistance? Contact us using the form below.</p>
        <form action="#" method="post">
            <input type="text" name="name" placeholder="Your Name" required>
            <input type="email" name="email" placeholder="Your Email" required>
            <textarea name="message" placeholder="Your Message" required></textarea>
            <button type="submit">Send Message</button>
        </form>
    </div>
</section>

<footer>
    <div class="container">
        <p>&copy; 2024 SkyLogistics. All rights reserved.</p>
    </div>
</footer>

</body>
</html>




<!-- 
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Drone Parcel Delivery</title>
<style>
    /* Global Styles */
    body {
        font-family: 'Roboto', sans-serif;
        margin: 0;
        padding: 0;
        background-color: #f8f8f8;
    }

    .container {
        width: 90%;
        max-width: 1200px;
        margin: 0 auto;
        padding: 20px;
        box-sizing: border-box;
    }

    /* Header Styles */
    header {
        background-color: #333;
        color: #fff;
        padding: 10px 0;
    }

    header .container img {
        width: 120px;
        height: auto;
    }

    header nav ul {
        list-style-type: none;
        padding: 0;
        text-align: center;
    }

    header nav ul li {
        display: inline;
        margin-right: 20px;
    }

    header nav ul li a {
        color: #fff;
        text-decoration: none;
        transition: color 0.3s ease;
    }

    header nav ul li a:hover {
        color: #f8bb11;
    }

    /* Hero Section Styles */
    #hero {
        background-image: url('https://imgs.search.brave.com/xyWPtFQCPnR3TESprzpMDeTRv78ec5mXBrdGwUcV_Bs/rs:fit:500:0:0/g:ce/aHR0cHM6Ly93YWxs/cGFwZXJiYXQuY29t/L2ltZy83NzQ5NTAt/ZHJvbmUtd2FsbHBh/cGVyLWhkLWRvd25s/b2FkLWZyZWUuanBn');
        background-size: cover;
        color: #fff;
        padding: 150px 0;
        text-align: center;
    }

    #hero h2 {
        font-size: 36px;
        line-height: 1.5;
        margin-bottom: 20px;
    }

    #hero .btn {
        background-color: #f8bb11;
        color: #333;
        border: none;
        padding: 15px 30px;
        font-size: 18px;
        text-decoration: none;
        border-radius: 5px;
        transition: background-color 0.3s ease;
    }

    #hero .btn:hover {
        background-color: #e2a009;
    }

    /* About Section Styles */
    #about {
        background-color: #fff;
        padding: 50px 0;
        text-align: center;
    }

    #about img {
        max-width: 100%;
        height: auto;
        margin-bottom: 20px;
    }

    /* Services Section Styles */
    #services {
        background-color: #f4f4f4;
        padding: 50px 0;
        text-align: center;
    }

    .service {
        margin-bottom: 30px;
    }

    .service img {
        width: 100px;
        height: auto;
        margin-bottom: 20px;
    }

    /* Contact Section Styles */
    #contact {
        background-color: #fff;
        padding: 50px 0;
        text-align: center;
    }

    #contact form input,
    #contact form textarea {
        width: calc(100% - 40px);
        margin-bottom: 20px;
        padding: 10px;
        border: 1px solid #ccc;
        border-radius: 5px;
        box-sizing: border-box;
    }

    #contact form button {
        background-color: #333;
        color: #fff;
        border: none;
        padding: 10px 20px;
        font-size: 18px;
        cursor: pointer;
        border-radius: 5px;
        transition: background-color 0.3s ease;
    }

    #contact form button:hover {
        background-color: #555;
    }

    /* Footer Styles */
    footer {
        background-color: #333;
        color: #fff;
        text-align: center;
        padding: 20px 0;
    }
</style>
</head>
<body>

<header>
    <div class="container">
        <a href="index.html"><img src="logo.png" alt="SkyLogistics Logo"></a>
        <nav>
            <ul>
                <li><a href="#about" style="color: #fff; text-decoration: none;">About</a></li>
                <li><a href="#services" style="color: #fff; text-decoration: none;">Services</a></li>
                <li><a href="#contact" style="color: #fff; text-decoration: none;">Contact</a></li>
                <li><a href="operator/" style="color: #fff; text-decoration: none;">Operator Login</a></li>
                <li><a href="user/" style="color: #fff; text-decoration: none;">User Login</a></li>
            </ul>
        </nav>
    </div>
</header>

<section id="hero">
    <div class="container">
        <h2 style="font-size: 36px; line-height: 1.5; margin-bottom: 20px; color: #fff;">Fast, Reliable Parcel Delivery<br>Using Drones</h2>
        <a href="#services" class="btn" style="background-color: #f8bb11; color: #333; border: none; padding: 15px 30px; font-size: 18px; text-decoration: none; border-radius: 5px; transition: background-color 0.3s ease;">Explore Our Services</a>
    </div>
</section>

<section id="about">
    <div class="container">
        <h2 style="text-align: center; color: #333;">About Us</h2>
        <img src="about-image.jpg" alt="About Us Image" style="max-width: 100%; height: auto; margin-bottom: 20px;">
        <p style="text-align: center; color: #333;">We are a cutting-edge parcel delivery service that utilizes state-of-the-art drones to deliver packages quickly and efficiently.</p>
    </div>
</section>

<section id="services">
    <div class="container">
        <h2 style="text-align: center; color: #333;">Our Services</h2>
        <div class="service">
            <img src="express-delivery-icon.png" alt="Express Delivery Icon" style="width: 100px; height: auto; margin-bottom: 20px;">
            <h3>Express Delivery</h3>
            <p>Get your parcels delivered in record time with our express delivery service.</p>
        </div>
        <div class="service">
            <img src="contactless-delivery-icon.png" alt="Contactless Delivery Icon" style="width: 100px; height: auto; margin-bottom: 20px;">
            <h3>Contactless Delivery</h3>
            <p>Stay safe with our contactless delivery option, where drones drop off parcels without any physical contact.</p>
        </div>
        <div class="service">
            <img src="real-time-tracking-icon.png" alt="Real-time Tracking Icon" style="width: 100px; height: auto; margin-bottom: 20px;">
            <h3>Real-time Tracking</h3>
            <p>Track your parcels in real-time and know exactly when they will arrive at their destination.</p>
        </div>
    </div>
</section>

<section id="contact">
    <div class="container">
        <h2 style="text-align: center; color: #333;">Contact Us</h2>
        <p style="text-align: center; color: #333;">Have questions or need assistance? Contact us using the form below.</p>
        <form action="#" method="post">
            <input type="text" name="name" placeholder="Your Name" required style="width: calc(100% - 40px); margin-bottom: 20px; padding: 10px; border: 1px solid #ccc; border-radius: 5px; box-sizing: border-box;">
            <input type="email" name="email" placeholder="Your Email" required style="width: calc(100% - 40px); margin-bottom: 20px; padding: 10px; border: 1px solid #ccc; border-radius: 5px; box-sizing: border-box;">
            <textarea name="message" placeholder="Your Message" required style="width: calc(100% - 40px); margin-bottom: 20px; padding: 10px; border: 1px solid #ccc; border-radius: 5px; box-sizing: border-box;"></textarea>
            <button type="submit" style="background-color: #333; color: #fff; border: none; padding: 10px 20px; font-size: 18px; cursor: pointer; border-radius: 5px; transition: background-color 0.3s ease;">Send Message</button>
        </form>
    </div>
</section>

<footer>
    <div class="container">
        <ul class="social-icons" style="list-style-type: none; padding: 0; text-align: center;">
            <li style="display: inline; margin-right: 10px;"><a href="#"><img src="facebook-icon.png" alt="Facebook"></a></li>
            <li style="display: inline; margin-right: 10px;"><a href="#"><img src="twitter-icon.png" alt="Twitter"></a></li>
            <li style="display: inline; margin-right: 10px;"><a href="#"><img src="instagram-icon.png" alt="Instagram"></a></li>
        </ul>
        <p style="color: #fff;">&copy; 2024 SkyLogistics. All rights reserved.</p>
    </div>
</footer>

</body>
</html> -->
