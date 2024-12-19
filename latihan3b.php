<?php

// Contoh menggunakan isset ( )
$var1 = "Halo";
$var2 = null;

if (isset($var1)) {
    echo "\$var1 diset dan nilainya adalah: $var1\n";
} else {
    echo "\$var1 belum diset atau bernilai null\n";
}

if (isset($var2)) {
    echo "\$var2 diset dan nilainya adalah: $var2\n";
} else {
    echo "\$var2 belum diset atau bernilai null\n";
}

// Contoh menggunakan empty()

$var3 = " ";
$var4 = "Halo";

if (empty($var3)) {
    echo "\$var3 kosong atau belum diset\n";
} else {
    echo "\$var3 memiliki nilai: $var3\n";
}

if (empty($var4)) {
    echo "\$var4 kosong atau belum diset\n";
} else {
    echo "\$var4 memiliki nilai: $var4\n";
}
?>