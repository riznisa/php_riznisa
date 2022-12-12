<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Soal A</title>
</head>
<body>
    <h1>Tampilan No.1 </h1>
    <form method="post" action="soal1b.php">
        <table>
            <tr>
                <td>Inputkan jumlah baris</td>
                <td><input type="text" name="baris">
                    <?php $txtbaris = isset($_POST['baris'])?$_POST['baris']: '';; 
                    echo $txtbaris; ?> </td>
                <td>Contoh: 1</td>
            </tr>
            <tr>
                <td>Inputkan jumlah kolom</td>
                <td><input type="text" name="kolom">
                    <?php $txtkolom = isset($_POST['kolom'])?$_POST['kolom']: '';; 
                    echo $txtkolom; ?> </td>
                <td>Contoh: 3</td>
            </tr>

        </table>
        <button type="submit">SUBMIT</button>
    </form>

</body>
</html>