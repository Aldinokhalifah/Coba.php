<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> 
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Document</title>
</head>
<body>
    <form method="POST">
      <div class="form-group row">
        <label for="nim" class="col-1 col-form-label">NIM</label> 
        <div class="col-9">
          <div class="input-group">
            <div class="input-group-prepend">
              <div class="input-group-text">
                <i class="fa fa-address-card"></i>
              </div>
            </div> 
            <input id="nim" name="nim" type="text" required="required" class="form-control">
          </div>
        </div>
      </div>
      <div class="form-group row">
        <label for="select" class="col-1 col-form-label">Pilih MK</label> 
        <div class="col-9">
          <select id="select" name="select" required="required" class="custom-select">
            <option value="TI">TI</option>
            <option value="SI">SI</option>
            <option value="BD">BD</option>
          </select>
        </div>
      </div>
      <div class="form-group row">
        <label for="nilai" class="col-1 col-form-label">Nilai</label> 
        <div class="col-9">
          <input id="nilai" name="nilai" type="text" required="required" class="form-control">
        </div>
      </div> 
      <div class="form-group row">
        <div class="offset-3 col-9">
          <button name="submit" type="submit" class="btn btn-primary">Simpan</button>
        </div>
      </div>
    </form>

</body>
    <?php
    if(isset($_POST['submit'])) {
        require_once "class.php";

        $nim = $_POST['nim'];
        $matkul = $_POST['select'];
        $nilai = $_POST['nilai'];
        
        $hasilUjian = new nilaiUjian($nim, $matkul, $nilai);

        
        echo "<h2>Hasil Nilai Ujian</h2>";
        echo "<p>NIM: " . $hasilUjian->nim . "</p>";
        echo "<p>Matkul: " . $hasilUjian->matkul . "</p>";
        echo "<p>Nilai: " . $hasilUjian->nilai . " </p>";
        echo "<p>Hasil Ujian: " . $hasilUjian->hasil() . "</p>";
        echo "<p>Grade: " . $hasilUjian->grade() . "</p>";
    }
    ?>
</html>