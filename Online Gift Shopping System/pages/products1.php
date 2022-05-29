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
    <!------------------------------------------------------------------------------------------->
        <div class="small-container">
            <div class="row-1 row-2">
                <h1>All Products</h1>
                <select>
                    <option>Sort by Popularity</option>
                    <option>Sort by Price</option>
                    <option>Sort by Rating</option>
                    <option>Sort by Sale</option>
                    <option>Sort by Latest</option>
                </select>
            </div>
            <div class="row">
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
                    <a href="prod2details.php" ><img src="../images/prod2.jpg" />
                    <h4>Chocolate Oreo Cake</h4></a>
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
                    <a href="prod3details.php" ><img src="../images/prod3.jpeg" />
                        <h4>Personalized Tree Photo Frame</h4></a>
                    <div class="rating">
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star-o"></i>
                    </div>
                    <p>&#8377;1,549</p>
                </div>
                <div class="col-4">
                    <a href="prod4details.php" ><img src="../images/prod4.jpg" />
                    <h4>Combo of 2 Watches for Women from SK</h4></a>
                    <div class="rating">
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star-o"></i>
                    </div>
                    <p>&#8377;699</p>
                </div>
                <div class="col-4">
                    <a href="prod5details.php" ><img src="../images/prod5.jpg" />
                    <h4>Baggit Black HandBag for Women</h4></a>
                    <div class="rating">
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star-half-o"></i>
                        <i class="fa fa-star-o"></i>
                    </div>
                    <p>&#8377;669</p>
                </div>
                <div class="col-4">
                    <a href="prod6details.php" ><img src="../images/prod6.jpg" />
                    <h4>Customized Name Keychain Stainless Steel</h4></a>
                    <div class="rating">
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star-o"></i>
                    </div>
                    <p>&#8377;399</p>
                </div>
                <div class="col-4">
                    <a href="prod7details.php" ><img src="../images/prod7.jpg" />
                    <h4>Calm Buddha Show Piece</h4></a>
                    <div class="rating">
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star-half-o"></i>
                    </div>
                    <p>&#8377;999</p>
                </div>
                <div class="col-4">
                    <a href="prod8details.php" ><img src="../images/prod8.jpg" />
                    <h4>Muti colored Dream Catcher</h4></a>
                    <div class="rating">
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star-o"></i>
                    </div>
                    <p>&#8377;399</p>
                </div>
            </div>
            <div class="page-btn">
                <a href="products1.php"><span>1</span></a>
                <a href="products2.php"><span>2</span></a>
                <span>3</span>
                <span>&#8594;</span>
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
<!---------------------------js for menu toggle-->
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
</body>
</html>
