<?php

#pow buat mangkatin sesuatu
#kode yang bisa dipake berulang
#bisa di isi return

function hitungLuasLingkaran($jari) { #ini yang bakal dipake pas dipanggil
    $phi = 3.14 ;
    $hasil = $phi * pow($jari,2);
    return $hasil ;
}

echo hitungLuasLingkaran(5);