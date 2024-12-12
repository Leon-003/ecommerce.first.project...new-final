<?php
   @include 'config.php';
   if(isset($_POST['add_to_cart'])){
    $product_name=$_POST['product_name'];
    $product_price=$_POST['product_price'];
    $product_image=$_POST['product_image'];
    $product_quantity=1;

    $selct_cart=mysqli_query($conn,"SELECT * FROM `cart` WHERE name='$product_name'");

    if(mysqli_num_rows($selct_cart)>0){
        $message[]='product already added to cart';

    }else{
        $insert_product=mysqli_query($conn,"INSERT INTO `cart`(name,price,image,quantity)
        VAlues('$product_name','$product_price','$product_image','$product_quantity')");
        $message[]='prodcut added to cart successfully';
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
    <?php
        if(isset($message)){
            foreach($message as $message){
                echo '<div class="message"><span>'.$message.'</span><i class="fas fa-times" onclick="this.
                parentElement.style.display=`none`;"></i></div>';
            };
           }; 
        ?> 
        <section id="header">
           <a href="#"><img src="img/logo/logo.png" class="logo" alt=""></a>
           <div>
               <ul id="navbar">
                 <li><a href="index.php">Home</a></li>
                 
                 <li><a class="active" href="product.php">Products</a></li>
                 <li><a href="about.php">About</a></li>
                 <li><a href="contact.php">Contact</a></li>
                 <?php
                  $selcect_rows=mysqli_query($conn,"SELECT * FROM `cart`") or die('query failed');
                  $row_count=mysqli_num_rows($selcect_rows);
                 ?>
                 <li id="lg-bag"><a href="cart.php"><i class="far fa-shopping-cart"></i><font color="blue"><span><?php echo $row_count?></span></font></a></li>
                 <li><a href="login.php">Login</a></li>
                 
                 <a href="#" id="close"><i class="far fa-times"></i></a>
               </ul>
           </div>
           <div id="mobile">
                <?php
                  $selcect_rows=mysqli_query($conn,"SELECT * FROM `cart`") or die('query failed');
                  $row_count=mysqli_num_rows($selcect_rows);
                ?>
                <a href="cart.php"><i class="far fa-shopping-cart"></i><span><?php echo $row_count?></span></a>
                <i id="bar" class="fas fa-outdent"></i>
           </div>
        </section>

        <section id="product1" class="section-p1">
             <center><h1 class="headingg">LATEST PRODUCTS</h1></center>
             <div class="pro-container">
                <?php
                   $select_products=mysqli_query($conn,"SELECT* FROM `products`");
                   if(mysqli_num_rows($select_products)>0){
                    while($fetch_product=mysqli_fetch_assoc($select_products)){
                  ?>

                  <form action="" method="POST">
                    <div class="pro">
                        <img src="img/products/<?php echo $fetch_product['image']; ?>" alt="">
                        <div class="des">
                        <h5><?php echo $fetch_product['name']; ?></h5>
                        <div class="star">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>

                        </div>
                        
                        <div class="price">TK:<?php echo $fetch_product['price']; ?></div>
                        </div>
                        <input type="hidden" name="product_name" value="<?php echo $fetch_product['name'];?>">
                        <input type="hidden" name="product_price" value="<?php echo $fetch_product['price'];?>">
                        <input type="hidden" name="product_image" value="<?php echo $fetch_product['image'];?>">
                        
                         <button class="normal" name="add_to_cart">Add to Cart</button>
                         
                        

                    </div>
                  </form>
                  <?php
                    };
                   };
                   

                   
                ?>

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