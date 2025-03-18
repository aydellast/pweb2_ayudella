<?php

/** Class Tabung */
class Tabung {
    public $jariJari;
    public $tinggi;
    const PI = 3.14;

    /** konstruksi tabung */
    function __construct($jariJari, $tinggi) {
        $this->jariJari = $jariJari;
        $this->tinggi = $tinggi;
    }

    /** Method untuk menghitung luas permukaan */
    function getLuasPermukaan() {
        return 2 * self::PI * $this->jariJari * ($this->jariJari + $this->tinggi);
    }

    /** Method untuk menghitung volume */
    function getVolume() {
        return self::PI * pow($this->jariJari, 2) * $this->tinggi;
    }

     /** Method untuk menghitung keliling alas */
    function getKelilingAlas() {
        return 2 * self::PI * $this->jariJari;
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bangun Ruang Tabung</title>
</head>
<body>
    <div class="section">

        <h2>Contoh Penggunaan Bangun Ruang Tabung</h2>

        <?php
        $tabung = new Tabung(21, 35); // Misalnya jari-jari 14 cm, tinggi 20 cm
        
        echo "Jari-jari: " . $tabung->jariJari . " cm<br>";
        echo "Tinggi: " . $tabung->tinggi . " cm<br>";
        echo '<hr>';
        echo "Keliling Alas: " . number_format($tabung->getKelilingAlas(), 2) . " cm<br>";
        echo "Luas Permukaan: " . number_format($tabung->getLuasPermukaan(), 2) . " cm²<br>";
        echo "Volume: " . number_format($tabung->getVolume(), 2) . " cm³<br>";
        ?>
    </div>
</body>
</html>
