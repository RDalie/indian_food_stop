<?php
    require_once "settings.php";
    $conn = @mysqli_connect($host,$user,$pwd,$sql_db);





    if ($conn) {

        if (isset($_GET['allOrders'])) {
            $query = "select order_id, order_time, order_cost, first_name, last_name FROM orders;";

            $result = mysqli_query($conn, $query);
            unset($_GET['allOrders']);

        }

        if (isset($_GET['customerName'])) {

            $first_name = $_POST['first_name_search'];
            $last_name = $_POST['last_name_search'];
            
            $query = "select order_id, order_time, order_cost, first_name, last_name FROM orders where first_name = '$first_name' and last_name = '$last_name';";

            $result = mysqli_query($conn, $query);
            unset($_GET['customerName']);

        }
        if (isset($_GET['product'])) {

            $product = $_POST['product_search'];

            $query = "select order_id, order_time, order_cost, first_name, last_name FROM orders where product = '$product';";

            $result = mysqli_query($conn, $query);
            unset($_GET['product']);
           

        }
        if (isset($_GET['pending'])) {

            $query = "select order_id, order_time, order_cost, first_name, last_name FROM orders where order_status = 'PENDING';";

            $result = mysqli_query($conn, $query);
            unset($_GET['pending']);

        }

        if (isset($_GET['totalCost'])) {

            $query = "select order_id, order_time, order_cost, first_name, last_name FROM orders order by order_cost ;";

            $result = mysqli_query($conn, $query);
            unset($_GET['totalCost']);

        }

         
        if ($result) { // if query successful
    
            echo "<table border = '1'>";
            echo "<tr><th>order_id</th> <th>order_time</th> <th>order_cost</th><th>first_name</th><th>last_name</th></tr>";
    
    
            while ($row = mysqli_fetch_assoc($result)) {
                echo "<tr> <td> {$row['order_id']} </td> ";
                echo " <td> {$row['order_time']} </td> ";
                echo " <td> {$row['order_cost']} </td> ";
                echo " <td> {$row['first_name']} </td> ";
                echo " <td> {$row['last_name']} </td> </tr>";
            }

        } else { // if query not successful
            echo "<p> Something is wrong with the query ", $query, "</p>";
        }
        



    } else {
        echo "<p> result error </p>";
    }
?>