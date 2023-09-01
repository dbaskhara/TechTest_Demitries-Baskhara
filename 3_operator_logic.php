<?php
function customDivision($atas, $bawah) {
    if ($bawah == 0) {
        return "Cannot divide by zero";
    }

    if ($atas < $bawah) {
        return 0;
    }

    $hasil_bagi = 0;
    while ($atas >= $bawah) {
        $atas -= $bawah;
        $hasil_bagi++;
    }

    return $hasil_bagi;
}

$angka1 = 20;
$angka2 = 5;
$hasil = customDivision($angka1, $angka2);
echo "Result: $hasil";  // Output: Result: 4
?>
