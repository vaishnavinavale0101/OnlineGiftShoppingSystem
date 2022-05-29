<?php
    session_start();
    if(!isset($_SESSION['loggedin']) || $_SESSION['loggedin']!=true){
        header("location:login.php");
        exit;
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Present For You | Online Gift Shopping Website</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="../styling/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"> 
    <style>
        a:hover{
            color:black;
        }
    </style>
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
                                <li><a href="index.php">Home</a></li>
                                <li><a href="products1.php">Products</a></li>
                                <li><a href="about.php">About</a></li>
                                <li><a href="contact.php">Contact</a></li>
                                <li><a href="../pages/logout.php">Logout</a></li>
                            </ul>
                        </nav>
                        <a href="cart.php"><img src="../images/cart.png" width="30px" height="30px"/><sup><sup style="font-size:15px;">('.$count.')</sup></sup></a>
                        <img src="../images/menu.png" class="menu-icon" onclick="menutoggle()"/> 
                    </div>';
                    ?>
            <div class="row-1">
                <div class="col" style="padding: 30px;">
                    <img src="../images/logo.png" height="270px" width="200px" style=" display: block; margin-left: auto; margin-right: auto;"/>
                    <h2 style="text-align: center; font-weight:bolder ;">Feel free to ask us anything!</h2>
                        <p style="font-size: 17px;">Have doubt or suggestion to make? Feel free to ask anything. If you have any suggestions,
                         please let us know. Your suggestions are highly appreciated. We appreciate your time and try our best to reply
                         to every single message posted here! Keep dropping your precious opinions.</p>
                </div>
                <div class="col"  style="padding: 30px;">
                    <div class="row-1"><h1 style="text-align: center;">Present For You</h1><i class="fa fa-gift" style="font-size:48px;color:rgb(121, 68, 182)"></i></div>
                    <div class="form-floating mb-3">
                        <input type="text" class="form-control" id="name"  placeholder="Full Name">
                        <label for="floatingInput">Full Name</label>
                    </div>
                    <div class="form-floating mb-3">
                        <input type="email" class="form-control" id="email" placeholder="Email">
                        <label for="floatingInput">Email</label>
                    </div>
                    <div class="form-floating mb-3">
                        <input type="tel" class="form-control" id="tel" placeholder="Phone number" maxlength="10" minlength="10">
                        <label for="floatingPassword">Phone number</label>
                    </div>
                    <div class="form-floating">
                        <textarea class="form-control message" id="message" placeholder="Leave a comment here" id="floatingTextarea2" style="height: 100px"></textarea>
                        <label for="floatingTextarea2">Comments</label>
                    </div>
                    <button type="reset" onclick="send()" style="text-align:center; display: block; margin-left: auto; margin-right: auto;" class="btn btn-primary">Send</button>
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
    var MenuItems = document.document.getElementById("MenuItems");
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
    function send()
    {
        var name=document.getElementById("name").value;
        var email=document.getElementById("email").value;
        var tel=document.getElementById("tel").value;
        var message=document.getElementById("message").value;
        if(name.length !=0 && email.length!=0  && tel.length !=0  && message.length !=0)
        {
            alert("Message sent!");
            document.getElementById("message").value="";
        }
        else
            alert("All fields are mandatory!!");
    }
</script>
</body>
</html>

