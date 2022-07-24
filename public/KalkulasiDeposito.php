<?php
header("Content-Type:application/json");

include('../vendor/autoload.php');

use MathPHP\Finance;

define("HARI_BULAN", 30);
define("HARI_TAHUN", 360);
define("BULAN_TAHUN", 12);

if (isset($_POST['jumlahDeposito']) && 
    $_POST['jangkaWaktu'] &&
    $_POST['bungaPertahun'] ) {

    $_jumlahDeposito = $_POST['jumlahDeposito'];
    $_jangkaWaktu = $_POST['jangkaWaktu'];
    $_bungaPertahun = $_POST['bungaPertahun'];

    $hasil = hitung_deposito($_jumlahDeposito, $_jangkaWaktu, $_bungaPertahun);
    response($hasil);

} else {
    response("Invalid request.");
}


function response($data, $metode=0){
    $res['data'] = $data;
    $res['metode'] = $metode;
    $json_response = json_encode($res);
    echo $json_response;
}


function hitung_deposito($jumlahDeposito, $jangkaWaktu, $sukuBunga) {
    $angsuran = [];
    $pajak = 20;
    $sukuBunga = $sukuBunga / 100;
    $jangkaWaktuBulan = $jangkaWaktu*30;
    $keuntunganBunga = ($jumlahDeposito*$sukuBunga*$jangkaWaktuBulan)/365 ;
    $potonganPajak = $keuntunganBunga*0.2;
    $totalBunga = $keuntunganBunga-$potonganPajak;
    $bungaPerbulan = ($keuntunganBunga/$jangkaWaktu)*0.8;
    $depositoAkhir = $jumlahDeposito+$totalBunga;

    array_push($angsuran, [
        "bungaBulan"          => $bungaPerbulan,
        "pajak"          => $pajak,
        "totalBunga"         => round($totalBunga),
        "totalDepositoAkhir"      => round($depositoAkhir)
    ]);

    return $angsuran;
}


