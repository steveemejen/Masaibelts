<?php
session_start();

require_once('C:\xampp\htdocs\HTML\connect.php');

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Website</title>
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"/>
    <link rel="stylesheet" href="style.css"/>
    
</head>
<body>
    <section id="header">
        <a href="#"><img src="img/banner/logo.jpg" class="logo" alt=""></a>
        <div>
            <ul id="navbar">
                <li><a  href="index.html">Home</a></li>
                <li><a  href="shop.html">Shop</a></li>
                <li><a  href="blog.html">Blog</a></li>
                <li><a  href="about.html">About</a></li>
                <li><a class="active" href="contact.html">Contact</a></li>
                <li id="lg-bag"><a href="cart.html"><i class="far fa-shopping-bag"></i></a></li>
                <a href="#" id="close"><i class="far fa-times"></i></a>

            </ul>
        </div>
        <div id="mobile">
            <a href="cart.html"><i class="far fa-shopping-bag"></i></a>
            <i id="bar" class="fas fa-outdent"></i>
        </div>
    </section>

    <section id="page-header" class="about-header">
    <h2>#lets_talk</h2>
         <p>LEAVE A MESAGE, We Love to hear from you!</p>
    </section>
    <section id="contact-details" class="section-p1">
        <div class="details">
            <span>GET IN TOUCH</span>
            <h2>Visit one of our agency locations or contact us today</h2>
            <h3>Head Office</h3>
            <div>
                <li>
                    <i class="far fa-map"></i>
                    <p>25 Biashara street Karen 1UL Nairobi</p>
                </li>
                <li>
                    <i class="far fa-envelope"></i>
                    <p>steveemejen931@gmail.com</p>
                </li>
                <li>
                    <i class="far fa-phone-alt"></i>
                    <p>0701726348</p>
                </li>
                <li>
                    <i class="far fa-clock"></i>
                    <p>Monday to Saturday 8.00am to 16pm</p>
                </li>
            </div>
        </div>
        <div class="map">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3988.911588321619!2d36.
            88908437372718!3d-1.2215430355561925!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.
            1!3m3!1m2!1s0x182f158c13f1972f%3A0x4e0069129fa12202!2sRegional%20Centre%20For%20Mapping%20Of%20Resources%20For%20Development!5e0!3m2!
            1sen!2ske!4v1714988150044!5m2!1sen!2ske" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>

    </section>
    <section id="form-details">
        <form action="connect.php" method="POST">
            <span>LEAVE A MESSAGE</span>
            <h2>We love to hear from you</h2>
            <input type="text" placeholder="Your Name" name="name" id="name">
            <input type="text" placeholder="E-mail" name="email">
            <input type="text" placeholder="Subject" name="Subject">
            <textarea name="" id="" cols="30" rows="10" placeholder="Your Message" name="Message"></textarea>
            <button class="normal">Submit</button>
           </form>
           <div class="people">
            <div>
                <img src="img/people/1.png" alt="">
                <p><span>John Etoo</span>Senior Marketing Manager<br>Phone: +254 721 732181
                    <br>E-mail:simonemuria1998@gmail.com</p>
            </div>
            <div>
                <img src="img/people/2.png" alt="">
                <p><span>Steve Emejen</span>Senior Marketing Manager<br>Phone: +254 113 470114
                    <br>E-mail:steveemejen931@gmail.com</p>
            </div>
            <div>
                <img src="img/people/3.png" alt="">
                <p><span>Simon Loree</span>Senior Marketing Manager<br>Phone: +254 112 992018
                    <br>E-mail:simonloree2@gmail.com</p>
            </div>
           </div>
    </section>
    <section id="newsletter" class="section-p1 section-m1">
        <div class="newstext">
            <h4>Sign up for newsletter</h4>
            <p>Get E-mail updates about our latest shop and <span>special offers.</span></p>
        </div>
        <div class="form">
            <input type="text" placeholder="your email adress">
            <button class="normal">Sign Up</button>

        </div>
    </section>
        <footer class="section-p1">
            <div class="col">
                <h4>Contact</h4>
                <p><strong>Address: </strong> Ronald ngala, street 9, Nairobi</p>
                <p><strong>Phone: </strong> (+254) 01 1347 0114 /(+254) 07 0172 6348</p>
                <p><strong>Hours: </strong> 08:00 - 18:00, Mon - Sat</p>
                <div class="follow">
                    <h4>follow us</h4>
                    <div class="icon">
                        <i class="fab fa-facebook-f"></i>
                        <i class="fab fa-twitter"></i>
                        <i class="fab fa-instagram"></i>
                        <i class="fab fa-telegram"></i>
                        <i class="fab fa-whatsapp"></i>
                    </div>
                </div>
            </div>
            <div class="col">
                <h4>About</h4>
                <a href="#">About us</a>
                <a href="#">Delivery Information</a>
                <a href="#">Private Policy</a>
                <a href="#">Terms & Conditions</a>
                <a href="#">Contact Us</a>
            </div>
            <div class="col">
                <h4>My Account</h4>
                <a href="#">Sign In</a>
                <a href="#">View Cart</a>
                <a href="#">My Wishlist</a>
                <a href="#">Track My Order</a>
                <a href="#">Help</a>
            </div>
            <div class="col install">
                <h4>Install App</h4>
                <p>From App Store or Google Play</p>
                <div class="row">
                    <img src="img/pay/app.jpg" alt="">
                    <img src="img/pay/play.jpg"alt="">
                </div>
                <p>Secured Payment Gateways</p>
                <img src="img/pay/pay.jpg" alt="">

            </div>
            <div class="copyright">
                <p>copyright © 2024 Legends Fashions. All rights reserved.</p>

            </div>
        </footer>


<script src="script.js"></script>
</body>
</html>