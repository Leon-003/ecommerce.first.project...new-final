<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8"/>
        <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
        <meta name="viewport" content="width=device-width,initial-scale=1.0"/>
        <meta name="description" content="This is an E-commerce project"/>
        <title>E-commerce Site</title>
        <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" />
        <link rel="stylesheet" href="style.css"/>
    </head>
    <body>
        <section id="header">
           <a href="#"><img src="img/logo/logo.png" class="logo" alt=""></a>
           <div>
               <ul id="navbar">
                 <li><a href="index.php">Home</a></li>
                 <li><a href="shop.php">Shop</a></li>
                 <li><a href="about.php">About</a></li>
                 <li><a class="active" href="contact.php">Contact</a></li>
                 <li id="lg-bag"><a href="cart.php"><i class="far fa-shopping-cart"></i></a></li>
                 <li> <a href="profile.php">Profile</a></a></li>
                 <a href="#" id="close"><i class="far fa-times"></i></a>
               </ul>
           </div>
           <div id="mobile">
                <a href="cart.html"><i class="far fa-shopping-cart"></i></a>
                <i id="bar" class="fas fa-outdent"></i>
           </div>
        </section>

        <section id="page-header"  class="contact-header">
            <h2>#let's_talk</h2>
            <p>LEAVE A MESSAGE,We love to hear from you!</p>
        </section>
        <section id="contact-details" class="section-p1">
            <div class="details">
                <span>GET IN TOUCH</span>
                <h2>Visit one of our agency locations or contact us today </h2>
                <h3>Head Office</h3>
                <div>
                    <li>
                        <i class="fal fa-map"></i>
                        <p>Binodpur,Rajshahi,Bangladesh</p>
                    </li>
                    <li>
                        <i class="fal fa-envelope"></i>
                        <p>contact@fresh_hunt.com</p>
                    </li>
                    <li>
                        <i class="fal fa-phone-alt"></i>
                        <p>+8801637373</p>
                    </li>
                    <li>
                        <i class="fal fa-clock"></i>
                        <p>Saturday to Friday: 9.00 am to 10.00 pm</p>
                    </li>
                </div>
            </div>
            <div class="map">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3634.509639827648!2d88.6283773!3d24.363568300000004!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39fbefd0a55ea957%3A0x2f9cac3357d62617!2sRajshahi%20University%20of%20Engineering%20%26%20Technology(RUET)!5e0!3m2!1sen!2sbd!4v1727892013633!5m2!1sen!2sbd" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>

            </div>
        </section>
        <section id="form-details" class="">
            <form action="">
                <span>LEAVE A MESSAGE</span>
                <h2>We love to hear from you</h2>
                <input type="text" placeholder="Your Name">
                <input type="text" placeholder="E-mail">
                <input type="text" placeholder="Subject">
                <textarea name="" id="" cols="20" row="10" placeholder="Your Message"></textarea>
                <button class="normal">Submit</button>
            </form>
            <div class="people">
                <div>
                    <img src="img/people/1.png" alt="">
                    <p><span>John Doe</span>Senior Marketing Manager<br>Phone:+8801345555<br>Email:jondoe@gmail.com</p>

                </div>
                <div>
                    <img src="img/people/2.png" alt="">
                    <p><span>William Smith</span>Manager<br>Phone:+88035555<br>Email:williamsmith@gmail.com</p>

                </div>
                <div>
                    <img src="img/people/3.png" alt="">
                    <p><span>Robert Harry</span>Senior Executive<br>Phone:+880149999<br>Email:robertharry@gmail.com</p>

                </div>
            </div>
        </section>
        <section id="newsletter" class="section-p1 section-m1">
            <div class="newstext">
                <h4>Sign Up For Newsletters</h4>
                <p>Get E-mail updates about our latest shop and <span>special offers</span></p>
            </div>
            <div class="form">
                <input type="text" placeholder="Your Email Address">
                <button class="normal">Sign Up</button>

            </div>

        </section>
        <footer class="section-p1">
            <div class="col">
                <img src="img/logo/logo.png" alt="" class="logo">
                <h4>Contact</h4>
                <p><strong>Address:</strong>Mondoler Mor,Binodpur,Rajshahi</p>
                <p><strong>Phone:</strong>+88017484747</p>
                <p><strong>Hours:</strong>10:00-6:00,Sat-Thursday</p>
                <div class="follow">
                    <h4>Follow Us</h4>
                    <div class="icon">
                        <i class="fab fa-facebook"></i>
                        <i class="fab fa-twitter"></i>
                        <i class="fab fa-instagram"></i>
                        <i class="fab fa-youtube"></i>
                    </div>
                </div>
            </div>

            <div class="col">
                <h4>About</h4>
                <a href="#">About Us</a>
                <a href="#">Delivery Information</a>
                <a href="#">Privacy Policy</a>
                <a href="#">Terms & Conditons</a>
                <a href="#">Contact Us</a>   
            </div>


            <div class="col">
                <h4>My Accout</h4>
                <a href="#">Sign In</a>
                <a href="#">View Cart</a>
                <a href="#">My Wishlist</a>
                <a href="#">Track My Order</a>
                <a href="#">Help</a>   
            </div>


            <div class="col install">
                <h4>Install App</h4>
                <p>From App STore or Google Play</p>
                <div class="row">
                    <img src="img/logo/app.jpg" alt="">
                    <img src="img/logo/play.jpg" alt="">
                </div>

                <p>Secured Payment Gateway</p>
                <img src="img/logo/pay.png" alt="">

            </div>

            <div class="copyright">
                <p>© 2024,Tech2 etc-HTML CSS Ecommerce Template</p>
            </div>   

        </footer>
        <script src="script.js"></script>
    </body>
</html>