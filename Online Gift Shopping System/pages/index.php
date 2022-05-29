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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"> 
</head>
<body>
    <div class="header">
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
                        <li><a href="">Home</a></li>
                        <li><a href="products1.php">Products</a></li>
                        <li><a href="about.php">About</a></li>
                        <li><a href="contact.php">Contact</a></li>';
                        if(!$loggedin)
                        {
                        echo
                        '<li><a href="../pages/login.php">Login</a></li>
                        <li><a href="../pages/signup.php">Sign Up</a></li>';
                    }
                        if($loggedin)
                        {
                        echo '<li><a href="../pages/logout.php">Logout</a></li>';
                    }
                    echo'</ul>
                </nav>';
                if($loggedin)
                {
                    echo'
                <a href="cart.php"><img src="../images/cart.png" width="30px" height="30px"/><sup><sup><sup><sup style="font-size:15px;">('.$count.')</sup></sup></sup></sup></a>';
                }
                else
                {
                    echo '<a href="cart.php"><img src="../images/cart.png" width="30px" height="30px"/>';
                }
            echo '<img src="../images/menu.png" class="menu-icon" onclick="menutoggle()"/> 
            </div>
            <div class="row-1">
                <div class="col">
                    <h1>Gifts Specially For You! </h1>
                    <p style="color: black;">Enjoy Little Moments of Life with Gifts to You and Your Dear Ones.<br> 
                        Gifts made with Love for your Loved Ones </p>
                        <br>
                    <a href="" class="btn" > Explore more &#9755</a>
                </div>
                <div class="col">
                    <img src="../images/img.jpg" height="450px" width="400px" />
                </div>
            </div>
        </div>';
        ?>
    </div>
    <!--------------------featured categories---------------------->
    <div class="categories">
        <h1 style="text-align: center;">Categories</h1><br>
        <div class="small-container">
            <div class="row">
                <div class="col-4">
                    <a href="cat1details.php"><img src="../images/cat1.jpg"/><br><p>Birthdays</p></a>
                </div>
                <div class="col-4">
                    <a href="cat2details.php"><img src="../images/cat2.jpg"/><br><p>Personalized</p></a>
                </div>
                <div class="col-4">
                    <a href="cat3details.php"><img src="../images/cat3.jpg"/><br><p>Chocolates</p></a>
                </div>
            </div>
        </div>
    </div>
    <!----------------------best sellers------------------------------>
    <div class="small-container">
        <h1 class="title">Best Sellers</h1>
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
        </div>
<!-------------------------------Latest Products----------------------------------->
        <h2 class="title">Latest Products</h2>
        <div class="row">
            <div class="col-4">
                <a href="latest1details.php" ><img src="../images/latest1.jpg" />
                <h4>Butterfly Golden Bracelet by Diva</h4></a>
                <div class="rating">
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star-o"></i>
                </div>
                <p>&#8377;299</p>
            </div>
            <div class="col-4">
                <a href="latest2details.php" ><img src="../images/latest2.jpg" />
                <h4>Bourge Sport Shoes for Men</h4></a>
                <div class="rating">
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star-o"></i>
                </div>
                <p>&#8377;1,999</p>
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
<!-----------------------------------footer------------>
    <div class="footer">
        <div class="container">
            <div class="row-1">
                <div class="footer-col-1">
                <img src="../images/logo.png" width="250px"/>
                    <p>Our purpose is to be able to help you find you perfect gift </p>
                </div>
                <div>
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
    function menutoggle() 
    {
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

