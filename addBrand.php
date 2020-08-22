<html>
    <head>
        <title>Tambah Data Brand</title>
    </head>

    <body>
        <h1>Tambah Data Brand</h1>
        <form method="POST" action="addBrand.php" name="formBrand">
            <table>
                <tr>
                    <td>ID Brand</td>
                    <td><input type="number" name="id_brand"></td>
                </tr>

                <tr>
                    <td>Name Brand</td>
                    <td><input type="text" name="name_brand"></td>
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
                $id_brand = $_POST['id_brand'];
                $name_brand = $_POST['name_brand'];

            include("config.php");

            $result = mysqli_query($mysqli, "INSERT INTO brand_tb (id_brand, name_brand) VALUES ('$id_brand', '$name_brand')");
            
            echo "Data Berhasil Ditambah";
        }
        ?>

        <?php

            include("config.php");

            $result = mysqli_query($mysqli, "SELECT * FROM brand_tb ORDER BY id_brand ASC");

        ?>

        <table border="1" width="80%">
            <tr>
                <th>ID Brand</th>
                <th>Name Brand</th>
            </tr>

            <?php
            
                while($brand = mysqli_fetch_array($result)){
                    echo "<tr>";
                    echo "<td>". $brand['id_brand']."</td>";
                    echo "<td>". $brand['name_brand']."</td>";
                }

            ?>
        </table>
    </body>
</html>