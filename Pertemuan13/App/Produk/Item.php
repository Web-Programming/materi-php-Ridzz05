<?php
namespace App\Produk;

class Item {
    public $nama;

    public function __construct($nama) {
        $this->nama = $nama;
    }

    public function info() {
        return "Item Produk: " . $this->nama . " (Namespace: App\Produk)";
    }
}
