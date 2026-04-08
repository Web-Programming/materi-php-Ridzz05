<?php

require_once 'App/Produk/Item.php';
require_once 'App/Service/Item.php';

use App\Produk\Item as ProdukItem;
use App\Service\Item as ServiceItem;

$produk = new ProdukItem("Laptop Gaming");

$service = new ServiceItem("Servis Hardware");

// Menampilkan hasil
echo $produk->info() . PHP_EOL;
echo $service->info() . PHP_EOL;
