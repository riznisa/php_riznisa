<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Soal 3A</title>
</head>
<body>

    <h1 align="center">Data Person</h1>
    <table border="1" align="center" width="70%">
        <tr>
            <th width="50">No.</th>
            <th>Nama</th>
            <th>Alamat</th>
        </tr>

        <?php
            include "koneksi.php";

            $getdata = mysqli_query($koneksi, "SELECT * FROM person") or die (mysqli_error($koneksi));

            while($tampil = mysqli_fetch_array($getdata)){
                echo "
                <tr>
                    <td align='left'>$tampil[id]</td>
                    <td align='left'>$tampil[nama]</td>
                    <td align='left'>$tampil[alamat]</td>
                </tr>";
            }
        ?>
    </table>

    <h1 align="center">Data Hobi</h1>
    <table border="1" align="center" width="70%">
        <tr>
            <th width="50">No.</th>
            <th>Person id</th>
            <th>Hobi</th>
        </tr>

        <?php
            include "koneksi.php";

            $getdata = mysqli_query($koneksi, "SELECT * FROM hobi") 
            or die (mysqli_error($koneksi));

            while($tampil = mysqli_fetch_array($getdata)){
                echo "
                <tr>
                    <td align='left'>$tampil[id]</td>
                    <td align='left'>$tampil[person_id]</td>
                    <td align='left'>$tampil[hobi]</td>
                </tr>";
            }
        ?>
    </table>

    <h1 align="center">Data Person dan Hobi</h1>
    <table border="1" align="center" width="70%">
        <tr>
            <th width="50">Id</th>
            <th>Nama</th>
            <th>Alamat</th>
            <th>person_id</th>
            <th>Hobi</th>
        </tr>

        <?php
            include "koneksi.php";

            $getdata = mysqli_query($koneksi, "SELECT * FROM person 
            INNER JOIN hobi ON person.id = hobi.id") or die (mysqli_error($koneksi));

            while($tampil = mysqli_fetch_array($getdata)){
                echo "
                <tr>
                    <td align='left'>$tampil[id]</td>
                    <td align='left'>$tampil[nama]</td>
                    <td align='left'>$tampil[alamat]</td>
                    <td align='left'>$tampil[person_id]</td>
                    <td align='left'>$tampil[hobi]</td>
                </tr>";
            }
        ?>
    </table>
</body>
</html>