<?php
require_once 'class_persegi_panjang.php';

$persegi_panjang = new PersegiPanjang(10, 5);

echo 'Luas Persegi Panjang : ' . $persegi_panjang->getLuas();
echo 'Keliling Persegi Panjang : ' . $persegi_panjang->getKeliling();
