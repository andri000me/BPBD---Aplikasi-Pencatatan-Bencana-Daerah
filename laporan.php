<?php
require('config/config.php');
require('config/spp.class.php');
require('config/select2-function.php');


//Menu Kota / Daftar Kota
if($_GET['halaman']=='cari' || empty($_GET['halaman'])){
    include('tampilan/laporan/laporan.php');
//Get DATA KOTA
}elseif($_GET['halaman']=='daftar-kota-list' && !empty($_GET['halaman'])){
    daftarkota($_GET['search']);

//Get DATA KOTA
}elseif($_GET['halaman']=='daftar-kecamatan-list' && !empty($_GET['halaman'])){
    daftarkecamatan($_GET['kota'],$_GET['search']);

//Get DATA DESA
}elseif($_GET['halaman']=='daftar-desa-list' && !empty($_GET['halaman'])){
    daftardesa($_GET['kecamatan'],$_GET['search']);

//Get DATA KATEGORI
}elseif($_GET['halaman']=='daftar-kategori-list' && !empty($_GET['halaman'])){
    daftarkategori($_GET['search']);
}
?>