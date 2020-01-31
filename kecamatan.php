<?php
require('config/config.php');
require('config/spp.class.php');
require('config/select2-function.php');

//MENU KECAMATAN / DAFTAR KECAMATAN
if($_GET['halaman']=='daftar' || empty($_GET['halaman'])){
    include('tampilan/kecamatan/kecamatan_daftar.php');

//Get DATA KECAMATAN
}elseif($_GET['halaman']=='daftar-list' && !empty($_GET['halaman'])){
    $table = 'rl_kec_kot';
    $primaryKey = 'id_kecamatan';
    $columns = array(
        array( 'db' => 'id_kecamatan', 'dt' => 0 ),
        array( 'db' => 'nama_kecamatan', 'dt' => 1 ),
        array( 'db' => 'nama_kota', 'dt' => 2 ),
        array( 'db' => 'id_kecamatan',  'dt' => 3, 'formatter' => function( $d, $row ) {
            return '<a class="btn btn-info" href="kecamatan.php?halaman=ubah&id=' . $d . '">' . 'Ubah' . '</a> <a class="btn btn-danger" href="kecamatan.php?halaman=hapus&id=' . $d . '">' . 'Hapus' . '</a>';
            } )
    );
    
    echo json_encode(
        SSP::simple( $_GET, $db, $table, $primaryKey, $columns )
    );

//Get DATA KOTA
}elseif($_GET['halaman']=='daftar-kota-list' && !empty($_GET['halaman'])){
    daftarkota($_GET['search']);

//MENU TAMBAH KECAMATAN
}elseif($_GET['halaman']=='tambah' && !empty($_GET['halaman'])){
    if(isset($_POST['kecamatan'])){
        $data=array(
            "id_kota"  => $_POST["kota"],
            "nama_kecamatan"  => $_POST["kecamatan"]
        );
        Insert("tb_kecamatan",$data);
        header("Location:".$domain."kecamatan.php?halaman=daftar");
    }
    include('tampilan/kecamatan/kecamatan_tambah.php');
   
//MENU UBAH KECAMATAN
}elseif($_GET['halaman']=='ubah' && isset($_GET['id']) && !empty($_GET['halaman'])){
    if(isset($_POST['kecamatan']) && isset($_POST['id'])){
        $data=array(
            "id_kota"  => $_POST["kota"],
            "nama_kecamatan"  => $_POST["kecamatan"]
        );
        Update("tb_kecamatan",$data,"WHERE id_kecamatan = '".$_POST['id']."'");
        header("Location:".$domain."kecamatan.php?halaman=daftar");
    }
    $quotes_qry="SELECT * FROM tb_kecamatan WHERE id_kecamatan='".$_GET["id"]."'";
    $detail=mysqli_fetch_array(mysqli_query($connect,$quotes_qry));;
        
    include('tampilan/kecamatan/kecamatan_ubah.php');

//MENU HAPUS KECAMATAN
}elseif($_GET['halaman']=='hapus' && isset($_GET['id']) && !empty($_GET['halaman'])){
    Delete("tb_kecamatan","WHERE id_kecamatan = '".$_GET['id']."'");
    header("Location:".$domain."kecamatan.php?halaman=daftar");
}
?>