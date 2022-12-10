<!DOCTYPE html>
<html>

<body>

    <?php
    $balls = [1, 1, 1, 1, 1, 1, 2, 1, 1];
    $price = 100;
    $firstBall;
    // tidak dilakukan inisialisasi nilai awal dalam variabel
    // tidak dilakukan pemanggilan variabel ini dalam code program (useless variable)

    $timbang = 0;

    // Perulangan berikut menerapkan logika yang salah, karena menghitung banyaknya penimbangan di keseluruhan bola tanpa menentukan variabel bola terberat.
    // Adapun solusi yang bisa dilakukan yaitu dengan menerapkan logika algoritma 'Divide and Conquer' dengan kombinasi perulangan
    // untuk mencari bola terberat sekaligus menghitung total penimbangan dengan biaya terkecil.
    for ($i = 0; $i <= count($balls) - 1; $i++) {
        if ($i < count($balls) - 1) {
            $timbang++;
        } else {
            break;
        }
    }

    echo "bola standar = " . $balls[0] . "<br>";
    // hanya mereturnkan nilai dari baris array awal, yang mana itu belum pasti bola standar
    // posisi bola standar masih acak di dalam array balls dengan total sebanyak 8 bola, bukan hanya 1  

    echo "bola lebih berat = " . $balls[$timbang] . "<br>";
    // mengembalikan nilai yang salah untuk menentukan nilai bola terberat, karena urutan array masih acak
    // sehingga tidak bisa disimpulkan bahwa posisi bola terberat berada di index terakhir atau sejumlah banyaknya penimbangan

    echo "berat total = " . ($balls[0] * 8 + $balls[$timbang]) . "<br>";
    // berat total tidak bisa dihitung dengan menjumlahkan nilai index awal ($balls[0]) dan akhir ($balls[$timbang])
    // karena index awal tidak bisa mewakili nilai bola standart, demikinan dengan index akhir tidak mewakili nilai bola terberat (Array belum urut)
    // logika demikian hanya bisa diterapkan jika array dalam kondisi urut.

    echo "biaya total = " . $timbang * $price . "<br>";

    // ===================================================================================================================================================

    // ALGORITMA PENYELESAIAN YANG BENAR
    // 1. Tentukan biaya per penimbangan dan tetapkan ke 100.
    // 2. Tentukan jumlah total bola dan atur menjadi 9.
    // 3. Tentukan larik bola, dengan bola yang lebih berat pada indeks 0. Setel ke [1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0].
    // 4. Tentukan biaya total dan jumlah penimbangan, dan atur keduanya menjadi 0.
    // 5. Jika ada lebih dari satu bola yang tersisa:
    //      - Bagilah bola menjadi dua kelompok.
    //      - Timbang kedua kelompok bola.
    //      - Meningkatkan biaya dan jumlah penimbangan.
    //      - Jika kedua kelompok memiliki nomor yang sama, bola yang lebih berat harus berada di kelompok lain. Setel larik bola ke grup lain.
    //      - Jika tidak, bola yang lebih berat harus berada di grup dengan total lebih tinggi. Setel larik bola ke grup itu.
    // 6. Keluarkan indeks bola yang tersisa, yaitu indeks bola yang lebih berat.
    // 7. Keluarkan biaya akhir dan jumlah penimbangan.
    ?>

</body>

</html>