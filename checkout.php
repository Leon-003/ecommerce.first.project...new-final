<?php
   @include 'config.php';
   if(isset($_POST['order_btn'])){
    $name=$_POST['name'];
    $number=$_POST['number'];
    $email=$_POST['email'];
    $method=$_POST['method'];
    $flat=$_POST['flat'];
    $street=$_POST['street'];
    $city=$_POST['city'];
    $country=$_POST['country'];
    $pin_code=$_POST['pin_code'];


    $cart_query=mysqli_query($conn,"SELECT * FROM `cart`");
    $price_total=0;
    if(mysqli_num_rows($cart_query)>0){
        while($product_item=mysqli_fetch_assoc($cart_query)){
            $product_name[]=$product_item['name'].'('.$product_item['quantity'].')';
            $product_price=number_format($product_item['price']*$product_item['quantity']);
            $price_total+=$product_price;
            
        };
    };
       $total_product=implode(',',$product_name);
    $detail_query=mysqli_query($conn,"INSERT INTO `order` (name,number,email,method,flat,street,city,country,pin_code,total_products,total_price) VALUES ('$name','$number','$email','$method','$flat','$street','$city','$country','$pin_code','$total_product','$price_total')") or die('query failed');

    if($cart_query && $detail_query){
        echo "<div id='loginbody'>
    <div class='message-container'>
        <h1>Thanks for Shopping!</h1><br>
        <div class='order-detail'>
            <span>".$total_product."</span><br>
            <br><span class='total'>Total:TK.".$price_total."</span>
        </div>
        <div class='customer-details'>
            <p> Your Name:<span>".$name."</span></p>
            <p> Your Number:<span>".$number."</span></p>
            <p> Your Email:<span>".$email."</span></p>
            <p> Your Address:<span>".$flat.",".$street.",".$city.",".$country.",".$pin_code."</span></p>
            <p> Your Payment Mode:<span></span></p>
            <p> (*pay when product arrives*) <span></span></p>
        </div>
        <button class='normal'><a href='product.php'>Continue Shopping</a></button>
    </div>
</div>
        ";
    }


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
        <section id="header">
           <a href="#"><img src="img/logo/logo.png" class="logo" alt=""></a>
           <div>
               <ul id="navbar">
                 <li><a href="index.php">Home</a></li>
                 <li><a href="product.php">Products </a></li>
                 <li><a href="about.php">About</a></li>
                 <li><a href="contact.php">Contact</a></li>
                 <li id="lg-bag"><a class="active" href="cart.php"><i class="far fa-shopping-cart"></i></a></li>
                 <li> <a href="profile.php">Profile</a></a></li>
                 <a href="#" id="close"><i class="far fa-times"></i></a>
               </ul>
           </div>
           <div id="mobile">
                <a href="cart.html"><i class="far fa-shopping-cart"></i></a>
                <i id="bar" class="fas fa-outdent"></i>
           </div>
        </section>
        <section>
            <h3><p align="center"><font color="red">Complete Your Order</font></p></h3>
            
            <div id=loginbody>
            <form action="" method="post">
                <div id="subtotal" class="display-order">
                <?php
                   $select_cart=mysqli_query($conn,"SELECT * FROM  `cart`");
                   $total=0;
                   $grand_total=0;
                   if(mysqli_num_rows($select_cart)>0){
                    while($fetch_cart=mysqli_fetch_assoc($select_cart)){
                        $total_price=number_format($fetch_cart['price']*$fetch_cart['quantity']);
                        $grand_total=$total+=$total_price;
                ?>  
                <span><?= $fetch_cart['name'];?>(<?=$fetch_cart['quantity'];?>)</span>
                <?php 
                    }
                }else{
                        echo "<div class='display-order'><span>Your Cart is Empty!</span></div>";
                    } 
                ?>
                <font color="blue"><span class="grand-total">Total:<?=$grand_total;?></span></font>
            </div>

                <div id="logincontainer">
                    <span>Your Name</span>
                    <input type="text" placeholder="Enter Your Name" name="name" required>
                </div>
                <div id="logincontainer">
                    <span>Your Number</span>
                    <input type="number" placeholder="Enter Your Number" name="number" required>

                </div>
                <div id="logincontainer">
                    <span>Your Email</span>
                    <input type="email" placeholder="Enter Your Email" name="email" required>

                </div>
                <div id="logincontainer">
                    <span>Payment Method</span>
                    <select name="method">
                        <option value="Cash On Delivery">Cash On Delivery</option>
                        <option value="Credit Cart">Credit Cart</option>
                        <option value="Bkash">Bkash</option>
                    </select>
                </div>
                <div id="logincontainer">
                    <span>Address line 1</span>
                    <input type="text" placeholder="e.g. Flat NO." name="flat" required>
                </div>
                <div id="logincontainer">
                    <span>Address line 2</span>
                    <input type="text" placeholder="e.g. Street Name" name="street" required>
                </div>
                <div id="logincontainer">
                    <span>City</span>
                    <input type="text" placeholder="e.g. Dhaka" name="city" required>
                </div>
                <div id="logincontainer">
                    <span>Country</span>
                    <input type="text" placeholder="e.g. Bangladesh" name="country" required>
                </div>
                <div id="logincontainer">
                    <span>Pin Code</span>
                    <input type="text" placeholder="e.g. 123456" name="pin_code" required>
                </div>
                <button class="normal" name="order_btn">Order Now</button>
            </form>
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