<html>
    <head>
        <title>Tambah Data Produk</title>
    </head>

    <body>
        <h1>Tambah Data Produk</h1>
        <form method="POST" action="addProduct.php" name="formProduct">
            <table>
                <tr>
                    <td>ID Motorcycle</td>
                    <td><input type="number" name="id_motorcycle"></td>
                </tr>

                <tr>
                    <td>Name</td>
                    <td><input type="text" name="name_motorcycle"></td>
                </tr>

                <tr>
                    <td>ID Brand</td>
                    <td><input type="number" name="id_brand"></td>
                </tr>

                <tr>
                    <td>Image</td>
                    <td><input type="file" name="image"></td>
                </tr>

                <tr>
                    <td>Color</td>
                    <td><input type="text" name="color"></td>
                </tr>

                <tr>
                    <td>Specification</td>
                    <td><input type="textarea" name="specification"></td>
                </tr>

                <tr>
                    <td>Stock</td>
                    <td><input type="number" name="stock"></td>
                </tr>

                <tr>
                    <td></td>
                    <td><input type="submit" name="submit" value="submit"></td>
                </tr>
            </table>
            
            <a href="index.php">Kembali</a>
        </form>

        <?php
            if(isset($_POST['submit'])){
                $id_motorcycle = $_POST['id_motorcycle'];
                $name_motorcycle = $_POST['name_motorcycle'];
                $id_brand = $_POST['id_brand'];
                $image = $_POST['image'];
                $color = $_POST['color'];
                $specification = $_POST['specification'];
                $stock = $_POST['stock'];

            include("config.php");

            $result = mysqli_query($mysqli, "INSERT INTO motorcycle_tb (id_motorcycle, name_motorcycle, id_brand, image, color, specification, stock) VALUES ('$id_motorcycle', '$name_motorcycle', '$id_brand', '$image', '$color', '$specification', '$stock')");
            
            echo "Data Berhasil Ditambah";
        }
        ?>

        <?php

            include("config.php");

            $result = mysqli_query($mysqli, "SELECT * FROM motorcycle_tb ORDER BY id_motorcycle ASC");

        ?>

        <table border="1" width="80%">
            <tr>
                <th>ID Motorcycle</th>
                <th>Name Motorcycle</th>
                <th>ID Brand</th>
                <th>Image</th>
                <th>Color</th>
                <th>Specification</th>
                <th>Stock</th>
            </tr>

            <?php
            
                while($motorcycle = mysqli_fetch_array($result)){
                    echo "<tr>";
                    echo "<td>". $motorcycle['id_motorcycle']."</td>";
                    echo "<td>". $motorcycle['name_motorcycle']."</td>";
                    echo "<td>". $motorcycle['id_brand']."</td>";
                    echo "<td>". $motorcycle['image']."</td>";
                    echo "<td>". $motorcycle['color']."</td>";
                    echo "<td>". $motorcycle['specification']."</td>";
                    echo "<td>". $motorcycle['stock']."</td>";
                }

            ?>
        </table>
    </body>
</html>