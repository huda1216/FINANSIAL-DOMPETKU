<?php 
    // Ambil data dari form
    $saldo = $_POST['saldo'];
    $metode = $_POST['metode'];

    // Tampilkan hasil input
    echo
    '<br>Jumlah: ' . htmlspecialchars($saldo) . 
    '<br>metode: ' . htmlspecialchars($metode);
?>
