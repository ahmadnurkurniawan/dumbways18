<html>
    <head>
        <title>Tambah Data Pelanggan</title>
    </head>

    <body>
        <h1>Tambah Data Pelanggan</h1>
        <form method="POST" action="addCustomer.php" name="formCustomer">
            <table>
                <tr>
                    <td>Name Customer</td>
                    <td><input type="text" name="name_customer"></td>
                </tr>

                <tr>
                    <td>Address</td>
                    <td><input type="text" name="address"></td>
                </tr>

                <tr>
                    <td>Phone</td>
                    <td><input type="number" name="phone"></td>
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
                $name_customer = $_POST['name_customer'];
                $address = $_POST['address'];
                $phone = $_POST['phone'];

            include("config.php");

            $result = mysqli_query($mysqli, "INSERT INTO customer_tb (name_customer, address, phone) VALUES ('$name_customer', '$address', '$phone')");
            
            echo "Data Berhasil Ditambah";
        }
        ?>

        <?php

            include("config.php");

            $result = mysqli_query($mysqli, "SELECT * FROM customer_tb ORDER BY id_customer ASC");

        ?>

        <table border="1" width="80%">
            <tr>
                <th>ID Customer</th>
                <th>Name Customer</th>
                <th>Address</th>
                <th>Phone</th>
            </tr>

            <?php
            
                while($pelanggan = mysqli_fetch_array($result)){
                    echo "<tr>";
                    echo "<td>". $pelanggan['id_customer']."</td>";
                    echo "<td>". $pelanggan['name_customer']."</td>";
                    echo "<td>". $pelanggan['address']."</td>";
                    echo "<td>". $pelanggan['phone']."</td>";
                }

            ?>
        </table>
    </body>
</html>