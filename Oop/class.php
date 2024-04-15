<?php

class nilaiUjian {
    public $nim, $matkul, $nilai, $hasil, $grade;

    function __construct($nim, $matkul, $nilai) {
        $this->nim =$nim;
        $this->matkul =$matkul;
        $this->nilai =$nilai;
    }

    public function hasil() {
        if($this->nilai >= 81) {
            return "A";
        } elseif($this->nilai >= 70 && $this->nilai <= 80) {
            return "B";
        } elseif($this->nilai >= 65) {
            return "C";
        } else{
            return "D";
        }
    }

    public function grade() {
        $grade = $this-> hasil();
        if($grade == "A" || $grade == "B") {
            return "LULUS";
        } else {
            return "TIDAK LULUS";
        }
        
    }


}