<?php
    @include 'config.php';
    if(isset($_POST['update_update_btn'])){  
        $update_value=$_POST['update_quantity'];
        $update_id=$_POST['update_quantity_id'];
        $update_quantity_query=mysqli_query($conn,"UPDATE `cart` SET quantity = '$update_value' WHERE p_id='$update_id'");
        if($update_quantity_query){
            header('location:cart.php');
        };
    };
    if(isset($_GET['remove'])){
        $remove_id=$_GET['remove'];
        mysqli_query($conn,"DELETE FROM `cart` WHERE p_id='$remove_id'");
        header('location:cart.php');
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

        <section id="page-header"  class="contact-header">
            <h2>#let's_talk</h2>
            <p>LEAVE A MESSAGE,We love to hear from you!</p>
        </section>
        <section id="cart" class="section-p1">
            <table width="100%">
                <thead>
                    <tr>
                        <td>Image</td>
                        <td>Product</td>
                        <td>Price</td>
                        <td>Quantity</td>
                        <td>Subtotal</td>
                        <td>Action</td>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $select_cart=mysqli_query($conn,"SELECT* FROM `cart`");
                    $grand_total=0;
                    if(mysqli_num_rows($select_cart)>0){
                        while($fetch_cart=mysqli_fetch_assoc($select_cart)){
                       ?>
                       <tr>
                         <td><img src="img/products/<?php echo $fetch_cart['image']; ?>" alt=""></td>
                         <td><?php echo $fetch_cart['name'];?></td>
                         <td>TK.<?php echo number_format($fetch_cart['price']);?> </td>
                         <td>
                            <form action="" method="POST">
                                 <input type="hidden" name="update_quantity_id" value="<?php echo $fetch_cart['p_id'];?>">
                                 <input type="number"  name="update_quantity" min="1" value="<?php echo $fetch_cart['quantity'];?>">
                                 <input type="submit" value="update" name="update_update_btn">

                            </form>
                        </td>
                         <td><?php echo $sub_total=number_format($fetch_cart['price']*$fetch_cart['quantity']);?></td>
                         <td><a href="cart.php? remove=<?php echo $fetch_cart['p_id'];?>" onclick="return confirm('remove item from cart?')" class="delete-btn"><i class="fas fa-trash"></i>Remove</a></td>
                       </tr>
                       <?php
                        $grand_total+=$sub_total;
                        };
                    };
                    ?>
                    <tr>
                    
                </tbody>
            </table>
        </section>
        <section id="cart-add" class="section-p1">
            <div id="coupon">
                <h4>Apply Coupon</h4>
                <div>
                    <input type="text" placeholder="Enter Your Coupon">
                    <button class="normal">Apply</button>
                </div>
            </div>
            <div id="subtotal">
                <h4>Cart Totals</h4>
                    <table>
                        <tr>
                            <td>Cart Subtotal</td>
                            <td>TK.<?php echo $grand_total;?></td>
                        </tr>
                        <tr>
                            <td>Shipping</td>
                            <td>Free</td>
                        </tr>
                        <tr>
                            <td><strong>Total</strong></td>
                            <td><strong>TK.<?php echo $grand_total;?></strong></td>
                        </tr>

                    </table>
                    <button class="normal"><a href="checkout.php" class="btn <?=($grand_total >1)?'':'disabled';?>">Proceed to checkout</a></button>
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
        
    </body>
</html>
