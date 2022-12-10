<?php

// Mendefinisikan biaya 1 kali menimbang
$cost = 100;

// Mendefinisikan jumlah bola
$numBalls = 9;

// Mendefinisikan array yang menyimpan nilai berat masing-masing bola, dengan nilai 2 sebagai bola terberat
$balls = [1, 1, 1, 1, 1, 1, 2, 1, 1];

// Mendefinisikan variabel yang akan menyimpan total baiaya dan total penimbangan
$totalCost = 0;
$numWeights = 0;

// Perulangan untuk menentukan biaya terkecil
while (true) {
    // jika tersisa 1 bola, maka bola itu harus yang terberat
    if (count($balls) === 2) {
        // Output the result
        echo "Bola terberat berada pada index: " . array_keys($balls)[0] . "<br>";
        break;
    }

    // jika persyaratan di atas tidak terpenuhi, maka dilakukan pembagian bola
    // Membagi bola ke dalam 2 grup, yang mana menggunakan 'array_slice'dengan parameter 0 akan mengembalikan pembulatan pembagian terkecil  
    $half = count($balls) / 2;
    $group1 = array_slice($balls, 0, $half);
    $group2 = array_slice($balls, $half);

    // menghitung total berat bola diantara 2 grup
    $group1Total = array_sum($group1);
    $group2Total = array_sum($group2);

    // menghitung biaya dan total penimbangan
    $totalCost += $cost;
    $numWeighIns++;

    // jika 2 grup memiliki total berat yang sama, maka bola terberat harus berada di grub lain
    if ($group1Total === $group2Total) {
        $balls = $group1Total > 0 ? $group2 : $group1;
    } else {
        // Jika tidak, bola yang lebih berat harus berada di grup dengan total lebih tinggi
        $balls = $group1Total > $group2Total ? $group1 : $group2;
    }
}

// Output biaya akhir dan jumlah penimbangan
echo "Total biaya terkecil: " . " Rp " . $totalCost . "<br>";
echo "Total penimbangan: " . $numWeighIns;
