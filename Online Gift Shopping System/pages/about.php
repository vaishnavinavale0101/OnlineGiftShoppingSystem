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
<!-------------------------------------account page--------------------------->
    
    <div class="account-page" style="margin:0% 20% ; background: url('../images/about.jpg') no-repeat center ; background-position: center;
    background-repeat: no-repeat;
    background-size: cover;">
        <div class="container">
            <div class="text">
            <span style="font-size:40px;font-weight:bolder; background:white">Present For You</span><br><br>
                <p style="color: black; background:white">
                    Present For You is an Online Gift Shopping Website designed to fulfill the Gifting needs 
                    of the Customer. It helps you to find your the best Gift for every Occassion.It contains 
                    various categories of products with wide range of variety. It has an interactive and User-friendly 
                    interface that let's you choose your gifts with ease.  
                </p>
            </div>
    
        </div>
    </div>



<!-----------------------------------footer--------------------------->
    <div class="footer" >
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
<!-------------------------------js for toggle from---------------->
<script>
    var LoginForm=document.getElementById("LoginForm");
    var RegForm=document.getElementById("RegForm");
    var Indicator=document.getElementById("Indicator");
    function register(){
        RegForm.style.transform="translateX(0px)";
        LoginForm.style.transform="translateX(0px)";
        Indicator.style.transform="translateX(100px)";
    }
    function login(){
        RegForm.style.transform="translateX(300px)";
        LoginForm.style.transform="translateX(300px)";
        Indicator.style.transform="translateX(0px)";
    }
</script>
</body>
</html>
