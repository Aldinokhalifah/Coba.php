<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Menentukkan hari kelahiran mu</h1>
    <form method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
        <label for="">Masukkan tanggal lahir</label>
        <input type="number" name="tanggal" max="31" required>
        <br>
        <label for="">Masukkan bulan lahir</label>
        <input type="number" name="bulan" max="12" required>
        <br>
        <label for="">Masukkan tahun lahir</label>
        <input type="number" name="tahun" required>
        <br>
        <button name="Submit" type="submit">Submit</button>
    </form>

    <?php
    if(isset($_POST['Submit'])) {
        $tanggal = $_POST['tanggal'];
        $bulan =  $_POST['bulan'];
        $tahun =  $_POST['tahun'];
    
        echo date("l, d-M-Y", mktime(0,0,0,$bulan,$tanggal,$tahun));
    }
    ?>
</body>
</html>
