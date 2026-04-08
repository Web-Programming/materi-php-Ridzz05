<?php
class Mobil{
    public $warna;
    public $merk;

    public function __construct($warna, $merk){
        $this->warna = $warna;
        $this->merk = $merk;
    }

    public function info(){
        return "Mobil " . $this->merk . " berwarna " . $this->warna;
    }
}

$mobil1 = new Mobil("Merah", "Toyota");
$mobil2 = new Mobil("Biru", "Honda");

echo $mobil1->info();
echo $mobil2->info();
