<?php
include_once 'koneksi.php';
include_once 'models/Kartu.php';

//step pertama yaitu menangkap request form
$kode = $_POST['kode'];
$nama = $_POST['nama'];
$diskon = $_POST['diskon'];
$iburan = $_POST['iburan'];


//menangkap form diatas dijadikan array
$data =[
    $kode,
    $nama,
    $diskon,
    $iburan
];
$model = new Kartu();
$tombol = $_REQUEST['proses'];
switch($tombol){
    case 'simpan':$model->simpan($data); break;
    case 'ubah':
        $data[] =$_POST['idx']; $model->ubah($data); 
        break;
    default:
    header('Location:index.php?url=kartu');
    break;
}
header('Location:index.php?url=kartu');
?>