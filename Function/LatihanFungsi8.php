<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Menentukkan hari kedepan dan kebelakang</h1>

    <form action="" method="post">
        <label for="">pilih lah apakah anda ingin menghitung hari kedepan atau kebelakang:</label>
        <select name="pilihan">
            <option value="Kedepan">Kedepan</option>
            <option value="Kebelakang">Kebelakang</option>
        </select> <br>

        <label for="">berapa hari yang anda inginkan</label>
        <input type="number" name="hari">  <br>
       
        <button name="Submit" type="submit">Submit</button>
    </form>

    <?php
    if(isset($_POST['Submit'])) {
        $pilihan = $_POST['pilihan'];
        $hari = $_POST['hari'];

        switch($pilihan) {
            case 'Kedepan':
                if($hari == '') {
                    echo "Masukkan data yang valid";
                } else {
                    echo "maka $hari hari $pilihan adalah:";
                    echo date("l, d M Y", time() + 60*60*24*$hari);
                }
                break;
            case 'Kebelakang' :
                if($hari == '') {
                    echo "Masukkan data yang valid";
                } else {
                    echo "maka $hari hari $pilihan adalah:";
                    echo date("l, d M Y", time() - 60*60*24*$hari);
                }
                break;
            default:
                echo "Masukkan data yang valid";
                break;
        } 
    }
    ?>
</body>
</html>
