<?php
// Create database connection using config file
include_once("config.php");
 
// Fetch all users data from database
$result = mysqli_query($mysqli, "SELECT * FROM products INNER JOIN product_categories ON products.category_id = product_categories.id");
?>
 
<html>
<head>    
    <title>Homepage</title>
</head>
 
<body>
 
    <table width='80%' border=1>
 
    <tr>
        <th>Id</th>
        <th>Name</th>
        <th>Category</th>
    </tr>
    <?php  
    $b = 1;
    while($user_data = mysqli_fetch_array($result)) {
        echo "<tr>";
        echo "<td>".$user_data['id']."</td>";
        echo "<td>";
        echo "<td>".$user_data['name']."</td>";
    }
    ?>
    </table>
</body>
</html>