<?php
/*-------------------------------------signup-------------------------------*/
$showAlert = false;
$showError = false;
if($_SERVER["REQUEST_METHOD"] == "POST"){
    include '../partials/_dbconnect.php';
    $mail = $_POST["mail"];
    $username = $_POST["username"];
    $phone = $_POST["phone"];
    $address = $_POST["address"];
    $password = $_POST["password"];
    $cpassword = $_POST["cpassword"];
    $exists= mysqli_query($con, "SELECT * FROM `users` WHERE `users`.`name` = '$username' ");
    if(!strlen($mail)|| !strlen($username)||!strlen($phone)||!strlen($address)||!strlen($password)||!strlen($cpassword) )
    {
        $showError = "all fields are mandatory";
    }
    else if(($password == $cpassword) && mysqli_num_rows($exists) == false)
    {
        $hash = password_hash($password, PASSWORD_DEFAULT);
        $sql = "INSERT INTO `users` ( `mail`, `name`, `phone`, `address`, `passhash`, `date`) VALUES  ('$mail','$username','$phone',' $address', '$hash', current_timestamp())";
        $result = mysqli_query($con, $sql);
        if ($result){
            $showAlert =true;
        }
    }
    else if($password != $cpassword){
        $showError = "Passwords do not match";
    }
    else
    {
        $showError = "User already exists";
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
        
        
        <!--------------------------------------signup------------------------------->
        
        <?php    
            if($showAlert){
                echo '<script type="text/javascript">'; 
                echo 'alert("Success! You can now Login");'; 
                echo 'window.location.href = "login.php";';
                echo '</script>';
            }

        if($showError == "User already exists"){
        echo '
            <script type="text/javascript">
            alert("Error! User already exists");
            </script>
        </script>';
        }
        if($showError == "Passwords do not match"){
            echo '
                <script type="text/javascript">
                alert("Error! Passwords do not match");
                </script>
            </script>';
        }
        if($showError == "all fields are mandatory"){
            echo '
            <script type="text/javascript">
            alert("Error! All fields are mandatory");
            </script>
            </script>';
        }
        ?>
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
        

<!-------------------------------------account page--------------------------->
<div class="account-page">
    <div class="container">
        <div class="row"></div>
        <div class="col-2">
            <div class="form-container" style="height: 550px;">
                <div class="form-btn">
                    <span>Sign Up</span>
                    <hr id="Indicator"> 
                </div>
                <form id="RegForm" action="signup.php" method="post">
                    <input type="email" id="mail" name="mail"   placeholder="Email">
                    <input type="text" id="username" name="username" placeholder="Username">
                    <input type="phone" id="phone" maxlength="10" minlength="10" name="phone" placeholder="Phone"><br><br>
                    <textarea style="width: 100%; height: 50px; border: 1px solid #ccc;" id="address" name="address" placeholder=" Enter Address"></textarea>
                    <input type="Password" id="password" name="password" placeholder="Set Password">
                    <input type="Password" id="cpassword" name="cpassword" placeholder="Confirm Password">
                    <button type="submit" class="btn">Sign Up</button>
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
</script>
</body>
</html>