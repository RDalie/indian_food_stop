<?php

session_start();
require_once "settings.php";
$conn = @mysqli_connect($host,$user,$pwd,$sql_db);

if (isset($_POST['from'])) {

    $from=date('Y-m-d',strtotime($_POST['from']));
}

if (isset($_POST['to'])) {

    $to=date('Y-m-d',strtotime($_POST['to']));
}

if ($conn) {

    $query = "select order_id, order_time, order_cost, first_name, last_name FROM orders where order_time between '$from' and '$to'";
    $result = mysqli_query($conn, $query);

    if ($result) { // if query successful
    
        echo "<table border = '1'>";
        echo "<tr><th>order_id</th> <th>order_time</th> <th>order_cost</th><th>first_name</th><th>last_name</th><th>order_update</th><th>order_delete</th></tr>";


        while ($row = mysqli_fetch_assoc($result)) {
            echo "<tr> <td> {$row['order_id']} </td> ";
            echo " <td> {$row['order_time']} </td> ";
            echo " <td> {$row['order_cost']} </td> ";
            echo " <td> {$row['first_name']} </td> ";
            echo " <td> {$row['last_name']} </td>";
            echo "<td> <a href='manager_update.php?update=yes&update_id={$row['order_id']}'> Update </a> </td> ";
            echo "<td> <a href='manager_update.php?delete=yes&update_id={$row['order_id']}'>Delete</a> </td> </tr> ";
        } 

} else {
    echo "<p>Something is wrong with the query", $query, "</p>";
}


} else {

    echo "<p>Unable to connect to the database</p>";


}






?>