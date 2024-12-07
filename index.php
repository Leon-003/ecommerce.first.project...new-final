<?php
   include('database/connection.php');
?>

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
                 <li><a class="active" href="index.php">Home</a></li>
                 <li><a href="shop.php">Shop</a></li>
                 <li><a href="about.php">About</a></li>
                 <li><a href="contact.php">Contact</a></li>
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

        <section id="hero">
             
            <h4>Weekend-offer</h4>
            <h2>Super Deals</h2>
            <h1>On all Products</h1>
            <p><b><font color="red">save more with promo code & up to 60% off!</font></b></p>
            <button><h4>Shop Now</h4></button>
        </section>
 
        <section id="feature" class="section-p1">
            <div class="fe-box">
                <img src="img/features/F1.png">
                <h6>Free Shipping</h6>
            </div>

            <div class="fe-box">
                <img src="img/features/f2.png">
                <h6>Online Order</h6>
            </div>

            <div class="fe-box">
                <img src="img/features/f3.png">
                <h6>Save Money</h6>
            </div>

            <div class="fe-box">
                <img src="img/features/f5.png">
                <h6>Happy Sell</h6>
            </div>

            <div class="fe-box">
                <img src="img/features/f6.png">
                <h6>Support</h6>
            </div>
        </section>

        <section id="product1" class="section-p1">
            <h2>Special Pakages & Offers</h2>
            <div class="pro-container">
                <div class="pro">
                    <img src="img/products/noodles.jfif" alt="">
                    <div class="des">
                        <h5>Noodles</h5>
                        <div class="star">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>

                        </div>
                        <h4>TK.140</h4>
                    </div>
                    <a href="#"><i class="fal fa-shopping-cart cart "></i></a>
                </div>


                <div class="pro">
                    <img src="img/products/coffee.jfif" alt="">
                    <div class="des">
                        <h5>Coffe</h5>
                        <div class="star">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>

                        </div>
                        <h4>TK.220</h4>
                    </div>
                    <a href="#"><i class="fal fa-shopping-cart cart "></i></a>
                </div>


                <div class="pro">
                    <img src="img/products/tea.jfif" alt="">
                    <div class="des">
                        <h5>Tea</h5>
                        <div class="star">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>

                        </div>
                        <h4>TK.100</h4>
                    </div>
                    <a href="#"><i class="fal fa-shopping-cart cart "></i></a>
                </div>


                <div class="pro">
                    <img src="img/products/tomato.jfif" alt="">
                    <div class="des">
                        <h5>Tomatoo</h5>
                        <div class="star">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>

                        </div>
                        <h4>TK.50(per-kg)</h4>
                    </div>
                    <a href="#"><i class="fal fa-shopping-cart cart "></i></a>
                </div>


                <div class="pro">
                    <img src="img/products/apple.jfif" alt="">
                    <div class="des">
                        <h5>Apple</h5>
                        <div class="star">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>

                        </div>
                        <h4>TK.300(per-kg)</h4>
                    </div>
                    <a href="#"><i class="fal fa-shopping-cart cart "></i></a>
                </div>


                <div class="pro">
                    <img src="img/products/orange.jfif" alt="">
                    <div class="des">
                        <h5>Orrange</h5>
                        <div class="star">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>

                        </div>
                        <h4>TK.400(per-kg)</h4>
                    </div>
                    <a href="#"><i class="fal fa-shopping-cart cart "></i></a>
                </div>


                <div class="pro">
                    <img src="img/products/chicken.jfif" alt="">
                    <div class="des">
                        <h5>Chicken</h5>
                        <div class="star">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>

                        </div>
                        <h4>TK.300(per-kg)</h4>
                    </div>
                    <a href="#"><i class="fal fa-shopping-cart cart "></i></a>
                </div>


                <div class="pro">
                    <img src="img/products/onion.jfif" alt="">
                    <div class="des">
                        <h5>Onion</h5>
                        <div class="star">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>

                        </div>
                        <h4>TK.80(per-kg)</h4>
                    </div>
                    <a href="#"><i class="fal fa-shopping-cart cart "></i></a>
                </div>
            
 
            </div>

        </section>

        <section id="banner" class="section-m1">
            <h4>Surprises!!!</h4>
            <h2>Up to <span>70% off </span>-All Grocery Products</h2>
            <button class="normal">Explore More </button>
        </section>

        /*best selling*/

        <section id="product1" class="section-p1">
            <h2>Best Selling Products</h2>
            <div class="pro-container">
                <div class="pro">
                    <img src="img/products/beef.jfif" height="300" width="400">
                    <div class="des">
                        <h5>Beef</h5>
                        <div class="star">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>

                        </div>
                        <h4>TK.700(per-kg)</h4>
                    </div>
                    <a href="#"><i class="fal fa-shopping-cart cart "></i></a>
                </div>


                <div class="pro">
                    <img src="img/products/cake.jfif" height="300" width="400">
                    <div class="des">
                        <h5>Cake</h5>
                        <div class="star">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>

                        </div>
                        <h4>TK.500(per-pound)</h4>
                    </div>
                    <a href="#"><i class="fal fa-shopping-cart cart "></i></a>
                </div>


                <div class="pro">
                    <img src="img/products/potato.jfif" alt="">
                    <div class="des">
                        <h5>Potato</h5>
                        <div class="star">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>

                        </div>
                        <h4>TK.50(per-kg)</h4>
                    </div>
                    <a href="#"><i class="fal fa-shopping-cart cart "></i></a>
                </div>


                <div class="pro">
                    <img src="img/products/papaya.jfif" height="300" width="400">
                    <div class="des">
                        <h5>Papaya</h5>
                        <div class="star">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>

                        </div>
                        <h4>TK.70(per-kg)</h4>
                    </div>
                    <a href="#"><i class="fal fa-shopping-cart cart "></i></a>
                </div>


                <div class="pro">
                    <img src="img/products/pasta.jfif" alt="">
                    <div class="des">
                        <h5>Pasta</h5>
                        <div class="star">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>

                        </div>
                        <h4>TK.430</h4>
                    </div>
                    <a href="#"><i class="fal fa-shopping-cart cart "></i></a>
                </div>


                <div class="pro">
                    <img src="img/products/soup.jfif" height="300" width="400">
                    <div class="des">
                        <h5>Soup</h5>
                        <div class="star">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>

                        </div>
                        <h4>TK.750</h4>
                    </div>
                    <a href="#"><i class="fal fa-shopping-cart cart "></i></a>
                </div>


                <div class="pro">
                    <img src="img/products/ice-cream.jfif" height="300" width="400">
                    <div class="des">
                        <h5>Ice-Cream</h5>
                        <div class="star">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>

                        </div>
                        <h4>TK.150</h4>
                    </div>
                    <a href="#"><i class="fal fa-shopping-cart cart "></i></a>
                </div>


                <div class="pro">
                    <img src="img/products/chocolate.jfif"  height="300" width="400">
                    <div class="des">
                        <h5>Chocolate</h5>
                        <div class="star">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>

                        </div>
                        <h4>TK.350</h4>
                    </div>
                    <a href="#"><i class="fal fa-shopping-cart cart "></i></a>
                </div>
            
 
            </div>

        </section>
        
        <section id="sm-banner" class="section-p1">
              <div class="banner-box">
                <h4>Crazy Deals!</h4>
                <h2>Buy 1 get 1 Free</h2>
                <span>The most fresh product is on sell at FRESH HUNT</span>
                 <button class="white">Learn More</button>
              </div>

              <div class="banner-box banner-box2">
                <h4>Upcoming Products</h4>
                <h2>Comming Soon..</h2>
                <span>The best product is here!</span>
                 <button class="white">Collections</button>
              </div>

        </section>
        <section id="banner3">
            <div class="banner-box">
                
                <h2>SEASONAL VEGETABLE</h2>
                <h3>Winter Vegetable -20% OFF</h3>
            </div> 

            <div class="banner-box banner-box2">
                
                <h2>SEASONAL FRUITS</h2>
                <h3>Summer fruits -30% OFF</h3>
            </div>

            <div class="banner-box banner-box3">
                
                <h2>See!!!</h2>
                <h3>Winter Fruits -40% OFF</h3>
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