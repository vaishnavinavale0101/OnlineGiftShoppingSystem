<?php 
/*-------------------------------------login-------------------------------*/
$login = false;
$showError = false;
if($_SERVER["REQUEST_METHOD"] == "POST")
{
    include '../partials/_dbconnect.php';
    $username = $_POST["username"];
    $password = $_POST["password"]; 
    $sql = "Select * from users where name='$username'";
    $result = mysqli_query($con, $sql);
    $num = mysqli_num_rows($result);
    if ($num == 1)
    {
        $row=mysqli_fetch_assoc($result);
        if (password_verify($password, $row['passhash']))
        { 
            $login = true;
            session_start();
            $_SESSION['loggedin'] = true;
            $_SESSION['username'] = $username;
            header("location: index.php");
        } 
        else
        {
            $showError = "Invalid Credentials";
        }
    } 
    else
    {
        $showError = "Invalid Credentials";
    }
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
<body>
        <div class="container">
            <div class="navbar" >
                <div class ="logo" >
                    <a href="index.php"><img src="../images/logo.png" width="100px" /></a>
                </div>
                <nav>
                    <ul id="MenuItems">
                        <li><a href="index.php">Home</a></li>
                        <li><a href="products1.php">Products</a></li>
                        <li><a href="about.php">About</a></li>
                        <li><a href="contact.php">Contact</a></li>
                        <li><a href="login.php">Login</a></li>
                        <li><a href="signup.php">Sign Up</a></li>
                    </ul>
                </nav>
                <a href="cart.php"><img src="../images/cart.png" width="30px" height="30px"/></a>
                <img src="../images/menu.png" class="menu-icon" onclick="menutoggle()"/> 
            </div>
        </div>
        
        <!-------------------------------------login------------------------------->
        <?php if($login){
            echo '
                <script type="text/javascript">
                alert("Welcome");
                </script>';
            }
            if($showError){
            echo '
                <script type="text/javascript">
                alert("Error!Wrong Password or Username");
                </script>';
            }
        ?>


<!-------------------------------------account page--------------------------->
<div class="account-page">
    <div class="container">
        <div class="row"></div>
        <div class="col-2">
            <div class="form-container" style="height: 400px;">
                <div class="form-btn">
                    <span>Login</span>
                    <hr id="Indicator"> 
                </div>
                <form id="LoginForm" action="login.php" method="post" onsubmit="return login();">
                    <input type="text"  id="username" name="username"placeholder="Username">
                    <input type="Password" id="password" name="password"  placeholder="Password">
                    <button type="submit" class="btn">Login</button>
                </form>
            </div>
        </div>

    </div>
</div>





<!-----------------------------------footer--------------------------->
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

    var username=GetElementById('username');
    var password=GetElementById('password');
    login(){
        if(username.length()==0)
        {
            alert("Username cannot be empty");
            return false;
        }    
        if(password.length()==0)
        {
            alert("Password cannot be empty");
            return false;
        }
        return true;
        

</script>
</body>
</html>