<?php

    session_start();

    if (!isset($_SESSION["receipt"])) {
        header("location:enquire.php");
        exit();
    }
    unset($_SESSION["receipt"]);
    $latest_id = $_SESSION["latest_id"];
    echo "<p>", $latest_id, "</p>";


    require_once "settings.php";
    $conn = @mysqli_connect($host,$user,$pwd,$sql_db);

    
    if ($conn) { // if connection successful
        $query = "select * FROM orders WHERE order_id = '$latest_id'";

        $result = mysqli_query($conn, $query);
    
        if ($result) { // if query successful
    
            echo "<table border = '1'>";
            echo "<tr><th>order_id</th> <th>order_cost</th> <th>order_time</th><th>order_status</th><th>first_name</th><th>last_name</th><th>delivery_street_add</th><th>delivery_suburb_town</th><th>delivery_state</th><th>delivery_postcode</th><th>email_id</th><th>phone_number</th><th>preferred_contact</th><th>price</th><th>number_of_meals</th><th>product</th><th>features</th><th>comments</th></tr>";
    

            while ($row = mysqli_fetch_assoc($result)) {
                echo "<tr> <td> {$row['order_id']} </td> ";
                echo " <td> {$row['order_cost']} </td> ";
                echo " <td> {$row['order_time']} </td> ";
                echo " <td> {$row['order_status']} </td> ";
                echo " <td> {$row['first_name']} </td> ";
                echo " <td> {$row['last_name']} </td> ";
                echo " <td> {$row['delivery_street_add']} </td> ";
                echo " <td> {$row['delivery_suburb_town']} </td> ";
                echo " <td> {$row['delivery_state']} </td> ";
                echo " <td> {$row['delivery_postcode']} </td> ";
                echo " <td> {$row['email_id']} </td> ";
                echo " <td> {$row['phone_number']} </td> ";
                echo " <td> {$row['preferred_contact']} </td> ";
                echo " <td> {$row['price']} </td> ";
                echo " <td> {$row['number_of_meals']} </td> ";
                echo " <td> {$row['product']} </td> ";
                echo " <td> {$row['features']} </td> ";
                echo " <td> {$row['comments']} </td> </tr> ";
                
            }
        } else { // if query not successful
            echo "<p> Something is wrong with the query ", $query, "</p>";
        }
    } else { // if connection NOT successful
        echo "<p>Unable to connect to the database.</p>";
    }
?>

