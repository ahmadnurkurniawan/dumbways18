<?php

    include("config.php");

    $result = mysqli_query($mysqli, "SELECT * FROM motorcycle_tb ORDER BY id_motorcycle DESC");

?>

<html>
    <head>
        <title>RMP Motorcycle</title>
    </head>

    <body>
        <header><h1>RMP Motorcycle</h1></header>

        <a href="addCustomer.php">Add Customer</a> | 
        <a href="addProduct.php">Add Product</a> | 
        <a href="addBrand.php">Add Brand</a>
        <div>
            <?php
                while($motor = mysqli_fetch_array($result)){
                    echo "<tr>";
                    echo "<h2><a href='specification.php'>". $motor['name_motorcycle']."</a></h2><br>";
                    echo "<td>". $motor['image']."</td><br>";
                    echo "<a href='buy.php'>Buy Now</a>";

                }
            ?>
        </div> 

    </body>
</html>