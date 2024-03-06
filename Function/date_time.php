<?php
// cara menentukan bebrapa hari kedepan menggunakan fungsi date dan time
echo date("l, d M Y", time()+ 60*60*24*100); //menentukan 100 hari kedepan dari hari ini //
echo "<br>";
echo date("l, d M Y", time()- 60*60*24*100); //menentukan 100 hari kebelakang dari hari ini //
echo "<br>";

?>