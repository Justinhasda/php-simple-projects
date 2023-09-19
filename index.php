
<?php

    // $_POST method

    if (isset($_POST["submit"])){

        if(empty($_POST["name"])){ ?>
           <div class="notice"><h3><?php echo "Please Enter Your Username";?></h3></div> 
        <?php
        }
        else if(empty($_POST["password"])){ ?>
            <div class="notice"><h3><?php echo "Please Enter Your Password";?></h3></div>
        <?php
        }
        else{ ?>
            <div class="success"><h3><?php echo "Successfully Login";?></h3></div>

        <?php
        }
    }

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Form</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="bootstrap.min.css">
</head>
<body>
    
    <form action="index.php" method="post" class="p-5">
        <div class="mb-3">
            <label for="name" class="form-label">Username</label>
            <input type="text" name="name" class="form-control" id="name">
        </div>
        <div class="mb-3">
            <label for="password" class="form-label">Password</label>
            <input type="password" name="password" class="form-control" id="password">
        </div>
        <button type="submit" name="submit" class="btn btn-primary ps-5 pe-5">Login</button>
    </form>


    <!-- <br><br><br><br><br><br> -->

    <!-- <a href="./index.php">Home</a> -->

    <script src="bootstrap.min.js"></script>
</body>
</html>
