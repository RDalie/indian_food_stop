<?php

session_start();
require_once "settings.php";
$conn = @mysqli_connect($host,$user,$pwd,$sql_db);

if ($conn) {

    if (isset($_GET['mostPopularProducts'])) {
    
        $query = "select product, COUNT(product) AS value_occurrence from orders group by product order by value_occurrence desc limit 1;";
    
        $result = mysqli_query($conn, $query);
        unset($_GET['mostPopularProduct']);
    
     
    
    if ($result) {
    
        echo "<table border = '1'>";
        echo "<tr><th>product</th><th>count</th></tr>";
    
    
        while ($row = mysqli_fetch_assoc($result)) {
            echo "<tr> <td> {$row['product']} </td>";
            echo "<td> {$row['value_occurrence']} </td></tr>";
            
        }
    }

} else {
    echo "<p> result error </p>";
}
}
?>