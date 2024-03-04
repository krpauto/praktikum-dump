<?php

// Abstract class Mobil
abstract class Mobil {
    // Abstract method cekMerek
    abstract public function cekMerek();
}

// Class Bus, turunan dari Mobil
class Bus extends Mobil {
    public function cekMerek() {
        echo "Merek Bus";
    }
}

// Class Truk, turunan dari Mobil
class Truk extends Mobil {
    public function cekMerek() {
        echo "Merek Truk";
    }
}

// Class Mobil, turunan dari Mobil
class MobilBiasa extends Mobil {
    public function cekMerek() {
        echo "Merek Mobil Biasa";
    }
}

// Membuat objek untuk 3 class turunan
$bus = new Bus();
$truk = new Truk();
$mobilBiasa = new MobilBiasa();

// Memanggil method cekMerek pada 3 objek turunan
$bus->cekMerek(); // Output: Merek Bus
echo "<br>";
$truk->cekMerek(); // Output: Merek Truk
echo "<br>";
$mobilBiasa->cekMerek(); // Output: Merek Mobil Biasa

?>
