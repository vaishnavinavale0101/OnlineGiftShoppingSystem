<?php
session_start();
if(isset($_SESSION['loggedin']) && $_SESSION['loggedin']==true){
    $loggedin= true;
  }
else{  
    $loggedin = false;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Present For You | Online Gift Shopping Website</title>
    <link rel="stylesheet" href="../styling/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@300&family=Ubuntu&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"> 
</head>
<body >
        <div class="container">
        <?php
            $count=0;
            if(isset($_SESSION['cart']))
            {
                $count=count($_SESSION['cart']);
            }
           echo'<div class="navbar" >
                <div class ="logo" >
                    <a href="index.php"><img src="../images/logo.png" width="100px" /></a>
                </div>
                <nav>
                    <ul id="MenuItems">
                        <li><a href="index.php">Home</a></li>
                        <li><a href="products1.php">Products</a></li>
                        <li><a href="about.php">About</a></li>
                        <li><a href="contact.php">Contact</a></li>';
                        if(!$loggedin){
                        echo
                        '<li><a href="../pages/login.php">Login</a></li>
                        <li><a href="../pages/signup.php">Sign Up</a></li>';}
                        if($loggedin){
                        echo '<li><a href="../pages/logout.php">Logout</a></li>';}
                    echo'</ul>
                    </nav>';
                    if($loggedin)
                    {
                        echo '<a href="cart.php"><img src="../images/cart.png" width="30px" height="30px"/><sup><sup><sup><sup style="font-size:15px;">('.$count.')</sup></sup></sup></sup></a>';
                    }
                    else
                    {
                        echo'<a href="cart.php"><img src="../images/cart.png" width="30px" height="30px"/>';
                    }
    
                    echo '<img src="../images/menu.png" class="menu-icon" onclick="menutoggle()"/> 
                </div>';
            ?>
        </div>
        <!-------------------------------------singleproduct prod1---------------------------->
        <div class="small-container single-product">
            <div class="row-1">
                <div class="col">
                    <img id="ProductImg" width="100%" src="../images/prod7.jpg">
                    <div class="small-img-row">
                        <div class="small-img-col">
                            <img class="small-img" width="100%" src="../images/prod7.jpg">
                        </div>
                        <div class="small-img-col">
                            <img class="small-img" width="100%" src="../images/prod71.jpg">
                        </div>
                        <div class="small-img-col">
                            <img class="small-img" width="100%" src="../images/prod72.jpg">
                        </div>
                    </div>
                </div>
                <div class="col">
                <form action="manage_cart.php" method="POST">
                    <h1>Calm Buddha Show Piece</h1>
                    <h4>&#8377;999</h4> 
                    <input style="width: 10%;" type="number" name="Quantity" min="1" value="1"> 
                    <button type="submit" name="Add_To_Cart" class="btn">Add to cart</button> 
                    <h3>Product Details</h3><br>
                    <ul style="list-style-type:disc;">
                        <li>Colour:	Blue</li>
                        <li>Brand :	eCraftIndia</li>    
                        <li>Material:	Resin</li> 
                        <li>Collection: Name Deity</li>    
                        <li>Item Dimensions (LxWxH): 18 x 12 x 23 Centimeters</li>
                    </ul><br>
                    <p>Gift this peaceful calm blue coloured buddha statue to your well wisher on thier special day</p>
                    <input type="hidden" name="Item_Name" value="Calm Buddha Show Piece">
                        <input type="hidden" name="Price" value="999">
                        <input type="hidden" name="image" value="../images/prod7.jpg">
                        <input type="hidden" name="link" value="prod7details.php">
                </form>
                </div>
            </div>
        </div>



        <!----------------------below products------------------>
        <div class="small-container">
            <div class="row row-2">
                <h2>Other Products</h2>
                
            </div>
        </div>
        <div class="small-container">  
            <div class="row">
                <div class="col-4">
                    <a href="prod3details.php" ><img src="../images/prod3.jpeg" />
                        <h4>Personalized Tree Photo Frame</h4></a>
                    <div class="rating">
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star-half-o"></i>
                    </div>
                    <p>&#8377;1,549</p>
                </div>
                <div class="col-4">
                    <a href="prod1details.php"><img src="../images/prod1.jpg" />
                    <h4>Customized Mug by Rinkon</h4></a>
                    <div class="rating">
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star-half-o"></i>
                    </div>
                    <p>&#8377;199</p>
                </div>
                <div class="col-4">
                    <a href="latest3details.php" ><img src="../images/latest3.jpg" />
                    <h4>Customized Date Bracelet</h4></a>
                    <div class="rating">
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star-half-o"></i>
                    </div>
                    <p>&#8377;899</p>
                </div>
                <div class="col-4">
                    <a href="latest4details.php" ><img src="../images/latest4.jpg" />
                    <h4>Personalized Dried Flowers Background Photo Frame</h4></a>
                    <div class="rating">
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star-half-o"></i>
                    </div>
                    <p>&#8377;799</p>
                </div>    
            </div>
        </div>
    </div>
<!-----------------------------------footer------------>
    <div class="footer">
        <div class="container">
            <div class="row-1">
                <div class="footer-col-1">
                    <img src="../images/logo.png" width="250px"/>
                    <p>Our purpose is to be able to help you find you perfect gift </p>
                </div>
                <div class="footer-col-2">
                    <h3>Useful links</h3>
                    <ul>
                        <li>Coupons</li><br>
                        <li>Blog Post</li><br>
                        <li>Return Policy</li><br>
                        <li>Join Affiliate</li><br>
                    </ul>
                </div>
                <div class="footer-col-3">
                    <h3>Connect with Us</h3>
                    <ul>
                        <li>Facebook</li><br>
                        <li>Twitter</li><br>
                        <li>Instagram</li><br>
                        <li>YouTube</li><br>
                    </ul>
                </div>
            </div>
        </div>
        <hr><p class="copyright">Copyright 2021 - Present For You.Ltd</p></hr>
    </div>
<!---------------------------js for menu toggle------------------------->
<script>
    var MenuItems = document.getElementById("MenuItems");
    MenuItems.style.maxHeight="0px";
    function menutoggle() {
        if(MenuItems.style.maxHeight=="0px")
        {
            MenuItems.style.maxHeight="200px"
        }
        else
        {
            MenuItems.style.maxHeight="0px";
        }
}
</script>
<!---------------------------------------js for prod gallery---------------->
<script>
    var ProductImg = document.getElementById("ProductImg");
    var SmallImg = document.getElementsByClassName("small-img");
    SmallImg[0].onclick=function(){
        ProductImg.src= SmallImg[0].src;
    }

    SmallImg[1].onclick=function(){
        ProductImg.src= SmallImg[1].src;
    }

    SmallImg[2].onclick=function(){
        ProductImg.src= SmallImg[2].src;
    }

</script>

</body>
</html>
