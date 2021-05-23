<?php

session_start();
require_once "settings.php";
$conn = @mysqli_connect($host,$user,$pwd,$sql_db);

if ($conn) {

    if (isset($_GET['avgPerDay'])) {
    
        $query = "select DATE(order_time) as date, COUNT(product) AS value_occurrence from orders group by DATE(order_time) order by value_occurrence ;";

        $avgQuery = "select AVG(value_occurrence) as 'avg' FROM (select DATE(order_time) as 'date', COUNT(product) AS value_occurrence from orders group by DATE(order_time) order by value_occurrence) as avgs;";
        
    
        $result = mysqli_query($conn, $query);
        unset($_GET['avgPerDay']);
        
        $avgResult = mysqli_query($conn, $avgQuery);
    } 
    
    if ($result) {
    
        echo "<table border = '1'>";
        echo "<tr><th>order_time</th><th>count</th></tr>";
    
    
        while ($row = mysqli_fetch_assoc($result)) {
            
            echo "<tr><td> {$row['date']} </td>";
            echo "<td> {$row['value_occurrence']} </td></tr>";
            
        }

        echo "</table>";
    }

} else {
    echo "<p> result error </p>";
}

    echo "<br/>";


    if ($avgResult) {
        
        echo "<table border = '1'>";
        echo "<tr><th>AVG NUMBER OF ORDERS PER DAY</th></tr>";


        while ($row = mysqli_fetch_assoc($avgResult)) {
            
            echo "<tr><td> {$row['avg']} </td></tr>";
            
        }

        echo "</table>";

    }



?>