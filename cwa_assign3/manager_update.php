<?php

if (isset($_GET['update_id'])) {
    
    $update_id =$_GET['update_id'];
    unset($_GET['update_id']);
}



if (isset($_GET["updated"])) {
    
    $update = $_POST['order_status'] ;
    
    require_once "settings.php";
    $conn = @mysqli_connect($host,$user,$pwd,$sql_db);


    if ($conn) {

        

        $update_query = "update orders set order_status = '$update' where order_id = '$update_id';";
        $cancel_query = "";
        $result = mysqli_query($conn,$update_query);

        if ($result) {
            echo "<p> order updated </p>";
        } else {
            echo "<p>update failed</p>";
        }
    


    } else {
        echo "<p> Unable to connect to the database </p>";
    }
}


if (isset($_GET["delete"])) {

    require_once "settings.php";
    $conn = @mysqli_connect($host,$user,$pwd,$sql_db);
    unset($_GET['update_id']);

    if ($conn) {

        $delete_query = "delete from orders where order_id='$update_id';";
        $result2 = mysqli_query($conn,$delete_query);
        
        echo "<p>Record deleted</p>";
    } else {
        echo "<p> Error </p>";
    }



}

?>

<!DOCTYPE html>
<html lang = "en">
    <head>
        <meta charset = "utf-8" />
        <meta name = "description" content = "Playing with PHP sessions" />
        <title>Update Order</title>
    </head>

    <body>

        
        <?php
        if (isset($_GET['update'])) {

            echo "<form action='manager_update.php?updated=yes&update_id=$update_id' method='post'>";
            
                echo "<select name='order_status' id='order_status'>";
                echo "<option value='FULFILLED'>FULFILLED</option>";
                echo "<option value='PAID'>PAID</option>";
                echo "<option value='ARCHIVED'>ARCHIVED</option>";
                echo "<option value='PENDING'>PENDING</option>";
                echo "</select>";
    
                echo "<input type='submit' />";
            echo "</form>";

        }
        ?>

    </body>
</html>