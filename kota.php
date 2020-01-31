<?php
require('config/config.php');
require('config/spp.class.php');

//Menu Kota / Daftar Kota
if($_GET['halaman']=='daftar' || empty($_GET['halaman'])){
    include('tampilan/kota/kota_daftar.php');

//Get DATA KOTA
}elseif($_GET['halaman']=='daftar-list' && !empty($_GET['halaman'])){
    $table = 'tb_kota';
    $primaryKey = 'id_kota';
    $columns = array(
        array( 'db' => 'id_kota', 'dt' => 0 ),
        array( 'db' => 'nama_kota', 'dt' => 1 ),
        array( 'db' => 'id_kota',  'dt' => 2, 'formatter' => function( $d, $row ) {
            return '<a class="btn btn-info" href="kota.php?halaman=ubah&id=' . $d . '">' . 'Ubah' . '</a> <a class="btn btn-danger" href="kota.php?halaman=hapus&id=' . $d . '">' . 'Hapus' . '</a>';
            } )
    );
    
    echo json_encode(
        SSP::simple( $_GET, $db, $table, $primaryKey, $columns )
    );

//MENU TAMBAH KOTA
}elseif($_GET['halaman']=='tambah' && !empty($_GET['halaman'])){
    if(isset($_POST['kota'])){
        $data=array(
            "nama_kota"  => $_POST["kota"]
        );
        Insert("tb_kota",$data);
        header("Location:".$domain."kota.php?halaman=daftar");
    }
    include('tampilan/kota/kota_tambah.php');
}elseif($_GET['halaman']=='ubah' && isset($_GET['id']) && !empty($_GET['halaman'])){
    if(isset($_POST['kota']) && isset($_POST['id'])){
        $data=array(
            "nama_kota"  => $_POST["kota"]
        );
        Update("tb_kota",$data,"WHERE id_kota = '".$_POST['id']."'");
        header("Location:".$domain."kota.php?halaman=daftar");
    }
    $quotes_qry="SELECT * FROM tb_kota WHERE id_kota='".$_GET["id"]."'";
    $detail=mysqli_fetch_array(mysqli_query($connect,$quotes_qry));;
        
    include('tampilan/kota/kota_ubah.php');
}elseif($_GET['halaman']=='hapus' && isset($_GET['id']) && !empty($_GET['halaman'])){
    Delete("tb_kota","WHERE id_kota = '".$_GET['id']."'");
    header("Location:".$domain."kota.php?halaman=daftar");
}
?>