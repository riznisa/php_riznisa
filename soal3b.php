<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Soal 3b</title>
</head>
<body>
    <h1 align="center"> Laporan Hobi dan Person</h1>
    <form action="" method="get">
        <label for="cari">Cari Hobi</label>
        <input type="text" name="cari">
        <br>
    </form>

    <?php
        if(isset($_GET['cari'])){
            $cari = $_GET['cari'];
        }
    ?>
    <table border="1" align="center" width="70%">
        <tr>
            <th>Hobi</th>
            <th>Jumlah Person</th>
        </tr>

        <?php
            include "koneksi.php";

            $getdata = mysqli_query($koneksi, "SELECT * FROM hobi 
            ORDER BY person_id desc") or die (mysqli_error($koneksi));

            if (isset($_GET['cari'])) {
                $getdata = mysqli_query($koneksi, "SELECT * FROM hobi WHERE hobi LIKE '%". 
               $cari."%'");
            }

            while($tampil = mysqli_fetch_array($getdata)){
                echo "
                <tr>
                    <td align='left'>$tampil[hobi]</td>
                    <td align='right'>$tampil[person_id]</td>
                </tr>";
            }
        ?>
    </table>
</body>
</html>