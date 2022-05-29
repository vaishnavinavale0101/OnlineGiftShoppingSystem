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
    <title>Present For You | Online Gift Shopping Website</title>
    <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<style>
    *{
        font-family:'Times New Roman';
    }
    form{
        padding:10%;
    }
</style>
</head>
<body style="text-align:center;" >
    
            <div class="alert alert-success" style="font-size:30px;" role="alert">
            Transaction completed successfully & Order placed succesfully!!
            </div>
    
    <form action="manage_cart.php" method="POST">
        <button type="submit" name="Success" class="btn btn-primary">Continue Shopping</button>
    </form>
</body>
</html>