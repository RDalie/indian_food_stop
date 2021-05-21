<?php
    
?>

<!DOCTYPE html>
<html lang = "en">
    <head>
        <meta charset = "utf-8" />
        <meta name = "description" content = "Playing with PHP sessions" />
        <title>Manage Orders</title>
    </head>

    <body>





 

        <!-- Links for managing and checking orders -->   

        <section>
            <h1>Search based on customer name</h1>
            <form action="manager_result.php?customerName=yes" method = 'post'>
                <label for="first_name">First Name</label>
                <input type="text" name="first_name_search" id="first_name">
        
                <label for="last_name">Last Name</label>
                <input type="text" name="last_name_search" id="last_name">
        
                <input type="submit" id="submit" value="submit">
            </form>
        </section>


        <section>
            <h1>Search based on a particular product</h1>

            <form action="manager_result.php?product=yes" method ='post'>

                <label for="product">Product</label>
                <input type="text" name="product_search" id="product">

                <input type="submit" id="submit" value="submit">

            </form>
        </section>

        <p><a href="manager_result.php?allOrders=yes">All Orders</a></p>
        
        <p><a href="manager_result.php?pending=yes">Orders that are pending</a></p>

        <p><a href="manager_result.php?totalCost=yes">Orders sorted by total cost</a></p>

    </body>
</html>