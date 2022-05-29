<?php
    session_start();
    if(!isset($_SESSION['loggedin']) || $_SESSION['loggedin']!=true){
        header("location:login.php");
        exit;
    }
    
    $_SESSION['online']=false;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Present For You | Online Gift Shopping Website</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="../styling/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@300&family=Ubuntu&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"> 
    <style>
        .table{
            font-size:20px;
        }
        .table a:hover{
            color:black;
        }
        .form-check-input:checked
        {
            background-color: rgb(121, 68, 182);
            border-color: rgb(121, 68, 182);
        }
        img{
            pointer-events: none;
        }
    </style>
    
</head>
<body>
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
                    <a href="cart.php"><img src="../images/cart.png" width="30px" height="30px"/><sup style="font-size:15px;">('.$count.')</sup></a>
                    <img src="../images/menu.png" class="menu-icon" onclick="menutoggle()"/> 
                </div>';
            ?>
    </div>
<!---------------------------------cart item details---------------------->
<div class="container" style="padding-bottom:150px">
    <div class="row">
        <div class="col-lg-12 text-center my-5">
            <h2>Cart Contents</h2>
        </div>
        <div class="col-lg-12">
            <table class="table">
            <thead class="text-center">
                <tr>
                <th scope="col">Serial No</th>
                <th scope="col">Product</th>
                <th scope="col">Price</th>
                <th scope="col">Quantity</th>
                <th scope="col"></th>
                </tr>
            </thead>
            <tbody class="text-center ">
                <?php 
                $total=0;
                if(isset($_SESSION['cart']))
                {
                    foreach ($_SESSION['cart'] as $key => $value)
                    {
                        $sr=$key+1;
                        $total=$total+($value['Price']*$value['Quantity']);
                        echo"
                        <tr>
                            <td>$sr.</td>
                            <td>";echo"<img src='",$value['image'],"' width='100' height='100' />"; echo"</td>
                            <td> <a href='$value[link]'>$value[Item_Name]</a></td>
                            <td>$value[Price]</td>
                            <td> <input class='text-center' type='number' value='$value[Quantity]' min='1' max='30'> </td>
                            <td>
                                <form action='manage_cart.php' method='POST'>
                                    <button name='Remove_Item' class='btn-sm btn-outline-danger'>Remove</button>
                                    <input type='hidden' name='Item_Name' value='$value[Item_Name]'>
                                </form>
                            </td>
                        </tr>
                        ";
                    }
                }
                ?>
            </tbody>
            </table>    
        </div>
        <?php
        if($total!=0)
        {
            echo'
            <div class="col-lg-5" style="">
                <div class="border bg-light rounded p-4">
                    <h4>Total:</h4>
                    <h5 class="text-right">&#8377;'.$total .'</h5>
                    <br>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                            <label class="form-check-label" for="flexRadioDefault1">
                                Cash On Delivery
                            </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2" checked>
                            <label class="form-check-label" for="flexRadioDefault2">
                                Online Payment
                            </label>
                    </div><br>
                    <button class="btn-sm btn-success" id="checkout" style="background:rgb(121, 68, 182);border:none; padding: 8px;">Check out</button>
                </div>
            </div> ';          
        }  
        else
        {
            echo'
            <div class="col-lg-5" style="">
                <div class="border bg-light rounded p-4">
                    <h4>Total:</h4>
                    <h5 class="text-right">&#8377;'.$total .'</h5>
                </div>
            </div>';
        }
        ?> 
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
                <div class="footer-col-2 ">
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
    document.getElementById("checkout").onclick = function (){
        if(document.getElementById('flexRadioDefault1').checked)
        {
            <?php
            $_SESSION['online'] =false;
            ?>
            window.location.href='success1.php';    
        }
        else if(document.getElementById('flexRadioDefault2').checked)
        {
            <?php
            $_SESSION['online'] =true;
            ?>
            window.location.href='transaction.php';   
        }
    }
</script>
</body>
</html>
