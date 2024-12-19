<?php
function faktorial($a) {
    // Jika $a adalah 0 atau 1, faktorialnya adalah 1
    if ($a <= 1) {
        return 1;
    } else {
        // Rekursif: panggil kembali fungsi faktorial
        return $a * faktorial($a - 1);
    }
}

// Panggil fungsi dan cetak hasilnya
$angka = 8;
echo "Faktorial dari $angka = " . faktorial($angka);
?>