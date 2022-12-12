<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>soal1b</title>
</head>
<body>
    <h1>Tampilan No. 1b</h1>
    <form action="soal1b.php" method="post">
        <table>
            <tr>
                <td>1.1: </td>
                <td><input type="text" name="input1"></td>
                <td>1.2: </td>
                <td><input type="text" name="input2"></td>
                <td>1.3: </td>
                <td><input type="text" name="input3"></td>
            </tr>
        </table>
        <button type="submit" name="submit">SUBMIT</button>
    </form>

    <?php
        $text1 = isset($_POST['input1'])?$_POST['input1']: '';
        $text2 = isset($_POST['input2'])?$_POST['input2']: '';
        $text3 = isset($_POST['input3'])?$_POST['input3']: '';

        echo "1.1: " .$text1;
        echo "<br> 1.2: " .$text2;
        echo "<br> 1.3: " .$text3;
    ?>
</body>
</html>