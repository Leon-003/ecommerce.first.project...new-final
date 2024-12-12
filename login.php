<?php
    //start the session
    session_start();
    if(isset($_SESSION['user'])) header('location:profile.php');
    $error_message='';
    if($_POST)
    {
        include('database/connection.php');

        $username =$_POST['username'];
        $password =$_POST['password'];
        
        $query = 'SELECT * FROM users WHERE users.email="'.$username.'" AND users.pass_word="'.$password.'"';  
        $stmt=$conn->prepare($query);
        $stmt->execute();
        
        
        if($stmt->rowCount()>0) {
            $stmt->setFetchMode(PDO::FETCH_ASSOC);
            $user =$stmt->fetchAll()[0];
            $_SESSION['user']=$user;
            header('Location:profile.php');
            
        } 
        else $error_message='Please make sure that username and password are correct';
        


    }

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
        <?php if(!empty($error_message)) { ?>
            <div>
                 <center> <p style="color:red;" ><strong>Error:</strong><br> <?= $error_message  ?></p></center>
            </div>
        <?php }?>
        <section id="header">
           <a href="#"><img src="img/logo/logo.png" class="logo" alt=""></a>
           <div>
               <ul id="navbar">
                 <li><a href="index.php">Home</a></li>
                 <li><a href="product.php">Products</a></li>
                 <li><a href="about.php">About</a></li>
                 <li><a href="contact.php">Contact</a></li>
                 <li id="lg-bag"><a href="cart.php"><i class="far fa-shopping-cart"></i></a></li>
                 <li> <a class="active" href="login.php">Profile</a></a></li>
                 <a href="#" id="close"><i class="far fa-times"></i></a>
               </ul>
           </div>
           <div id="mobile">
                <a href="cart.html"><i class="far fa-shopping-cart"></i></a>
                <i id="bar" class="fas fa-outdent"></i>
           </div>
        </section>
        
        <section id="login">
           
            <div id="loginbody">
                <form action="login.php" method="POST">
                    <div id="logincontainer">
                        <label for="">Username</label>
                        <input placeholder="username"  name="username" type="text"/>
                    </div>
                    <div id="logincontainer"> 
                        <label for="">Password</label>
                        <input placeholder="password" name="password" type="password"/>
                    </div>
                    <div>
                        <button id="buttoncontainer" class="normal">Login</button>
                    </div>
                    
                </form>
            </div>
        </section>
        <section id="register">
            <div id="text">
                <font color="red" size="5px"><b><center>New here?</center></b></font>
            </div>
            <div id="fa">
            <center><button id="reg" class="normal"><a href="register.php">Register</a></button></center>
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