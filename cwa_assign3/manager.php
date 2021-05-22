<?php
    session_start();
?>

<!DOCTYPE html>
<html lang = "en">
    <head>
        <meta charset = "utf-8" />
        <meta name = "description" content = "Playing with PHP sessions" />
        <title>Manage Orders</title>

        <!-- Style Links -->
        <link rel="stylesheet" href="styles/form.css"/>

        <!-- Google Fonts -->
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Lato:ital,wght@0,100;0,300;0,400;1,300&display=swap" rel="stylesheet">


    </head>


    <body>
    <?php

        if (!isset($_SESSION['username'])) {
            header("location:manager_login.php");
            exit();
        }


        if (isset($_SESSION['username'])) {

            $username = $_SESSION['username'];
            echo "<h1>Hello! You are logged in as $username</h1>";
        }
    ?>
        <!-- Links for managing and checking orders -->   

        <section>
            <form action="manager_result.php?customerName=yes" method = 'post'>
            <h2>Search based on customer name</h2>
                
                <p>
                    <label for="first_name">First Name</label>
                    <input type="text" name="first_name_search" id="first_name">

                </p>
        
                <p>
                    <label for="last_name">Last Name</label>
                    <input type="text" name="last_name_search" id="last_name">
                </p>
        

                <p>
                    <input type="submit" id="submit" value="submit" class="submit-reset">
                </p>
            </form>
        </section>


        <section>
            
            <form action="manager_result.php?product=yes" method ='post'>
                
            <h2>Search based on a particular product</h2>
            <p>
                <label for="product">Product</label>
                <input type="text" name="product_search" id="product">

            </p>

            <p> 
                <input type="submit" id="submit" value="submit" class="submit-reset">
            </p>


            </form>
        </section>

        <section id="links">

            <h2>Look up the database</h2>
            <p><a href="manager_result.php?allOrders=yes">All Orders</a></p>
            
            <p><a href="manager_result.php?pending=yes">Orders that are pending</a></p>
    
            <p><a href="manager_result.php?totalCost=yes">Orders sorted by total cost</a></p>
    
            <p><a href="manager_logout.php">Logout</a></p>
        </section>

    </body>
</html>