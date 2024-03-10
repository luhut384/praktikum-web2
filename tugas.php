<?php

echo "<h3>Soal No 1 Looping I Love PHP</h3>";

echo "Output: <br> <br>LOOPING PERTAMA: <br>";
for ($i = 2; $i <= 20; $i += 2) {
    echo "    $i - I Love PHP <br>";
}

echo "<br>LOOPING KEDUA: <br>";
for ($i = 20; $i >= 2; $i -= 2) {
    echo "    $i - I Love PHP <br>";
}

echo "<h3>Soal No 2 Function Tentukan Nilai</h3>";

function tentukan_nilai($nilai) {
    if ($nilai >= 85 && $nilai <= 100) {
        return "Sangat Baik";
    } elseif ($nilai >= 70 && $nilai < 85) {
        return "Baik";
    } elseif ($nilai >= 60 && $nilai < 70) {
        return "Cukup";
    } else {
        return "Kurang";
    }
}

echo tentukan_nilai(98); //Sangat Baik
echo tentukan_nilai(76); //Baik
echo tentukan_nilai(67); //Cukup
echo tentukan_nilai(43); //Kurang

?>