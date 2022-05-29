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
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="../styling/style1.css">
    <title>Present For You | Online Gift Shopping Website</title>
</head>
<body   class="body">
    <div class="wrapper">
        <h2>Payment Form</h2>
        <form onsubmit="success.php" method="post">
            <h4>Account</h4>
            <div class="input-group">
                <div class="input-box">
                <input type="text" placeholder="First Name" required class="name">
                <i class="fa fa-user icon"></i>
                </div>
                <div class="input-box">
                    <input type="text" placeholder="Last Name" required class="name">
                    <i class="fa fa-user icon"></i>
                </div>
            </div>

            <div class="input-group">
                <div class="input-box">
                <input type="email" placeholder="Email Address" required class="name">
                <i class="fa fa-envelope icon"></i>
                </div>
            </div>
            <div class="input-group">
                <div class="input-box">
                <h4>Date of Birth</h4>
                <input type="tel" maxlength=2  placeholder="dd" class="dob" >
                <input type="tel" maxlength=2  placeholder="mm" class="dob" >
                <input type="tel" maxlength=4  placeholder="yyyy" class="dob" >
                </div>
                <div class="input-box">
                    <h4>Gender</h4>
                    <input type="radio" name="gender" checked id="b1" class="radio">
                    <label for="b1">Male</label>
                    <input type="radio" name="gender" id="b2" class="radio">
                    <label for="b2">Female</label>
                </div>
            </div> 
            <div class="input-group">
                <div class="input-box">
                    <h4>Payment Details</h4>
                    <input type="radio" name="pay" checked id="bc1" class="radio">
                    <label for="bc1">Credit Card</label>
                    <input type="radio" name="pay" id="bc2" class="radio">
                    <label for="bc2">Paypal</label>
                </div> 
            </div>
            <div class="input-group">
                <div class="input-box">
                    <input type="tel" maxlength="16" minlength="16" placeholder="Card Number" required class="name">
                    <i class="fa fa-credit-card icon"></i>
                </div>
            </div>
            <div class="input-group">
                <div class="input-box">
                    <input type="password" maxlength="3" minlength="3" placeholder="Card CVV" required class="name">
                    <i class="fa fa-user icon"></i>
                </div>
                
                <div class="input-box">
                <select>
                        <option>01</option>
                        <option>02</option>
                        <option>03</option>
                        <option>04</option>
                        <option>05</option>
                        <option>06</option>
                        <option>07</option>
                        <option>08</option>
                        <option>09</option>
                        <option>10</option>
                        <option>11</option>
                        <option>12</option>
                    </select>
                    <select>
                        <option>2022</option>
                        <option>2023</option>
                        <option>2024</option>
                        <option>2025</option>
                        <option>2026</option>
                        <option>2027</option>
                        <option>2028</option>
                        <option>2029</option>
                        <option>2030</option>
                        <option>2031</option>
                    </select>
                </div>
            </div>
            <br><br><br>
            
            <a href="success2.php" class="btn">Pay Now</a>
        </form>
    </div>
</body>

</html>