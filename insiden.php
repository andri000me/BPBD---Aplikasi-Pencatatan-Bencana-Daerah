<?php
require('config/config.php');
require('config/spp.class.php');

//Menu Kota / Daftar Kota
if($_GET['halaman']=='daftar' || empty($_GET['halaman'])){
    include('tampilan/insiden/insiden_daftar.php');

//Get DATA KOTA
}elseif($_GET['halaman']=='daftar-list' && !empty($_GET['halaman'])){
    $table = 'rl_kejadian';
    $primaryKey = 'id';
    $columns = array(
        array( 'db' => 'id', 'dt' => 0 ),
        array( 'db' => 'kejadian', 'dt' => 1 ),
        array( 'db' => 'waktu', 'dt' => 2 ),
        array( 'db' => 'nama_kota', 'dt' => 3 ),
        array( 'db' => 'nama_kecamatan', 'dt' => 4 ),
        array( 'db' => 'nama_desa', 'dt' => 5 ),
        array( 'db' => 'rt', 'dt' => 6 ),
        array( 'db' => 'rw', 'dt' => 7 ),
        array( 'db' => 'lokasi', 'dt' => 8 ),
        array( 'db' => 'status', 'dt' => 9 ),
        array( 'db' => 'id',  'dt' => 10, 'formatter' => function( $d, $row ) {
            return '<a class="btn btn-info" href="insiden.php?halaman=ubah&id=' . $d . '">' . 'Ubah' . '</a> <a class="btn btn-danger" href="insiden.php?halaman=hapus&id=' . $d . '">' . 'Hapus' . '</a>';
            } )
    );
    
    echo json_encode(
        SSP::simple( $_GET, $db, $table, $primaryKey, $columns )
    );

//MENU TAMBAH KOTA
}elseif($_GET['halaman']=='tambah' && !empty($_GET['halaman'])){
    if(isset($_POST['insiden'])){
        $data=array(
            "nama_insiden"  => $_POST["insiden"]
        );
        Insert("tb_insiden",$data);
        header("Location:".$domain."insiden.php?halaman=daftar");
    }
    include('tampilan/insiden/insiden_tambah.php');
}elseif($_GET['halaman']=='ubah' && isset($_GET['id']) && !empty($_GET['halaman'])){
    if(isset($_POST['insiden']) && isset($_POST['id'])){
        $data=array(
            "nama_insiden"  => $_POST["insiden"]
        );
        Update("tb_insiden",$data,"WHERE id_insiden = '".$_POST['id']."'");
        header("Location:".$domain."insiden.php?halaman=daftar");
    }
    $quotes_qry="SELECT * FROM tb_insiden WHERE id_insiden='".$_GET["id"]."'";
    $detail=mysqli_fetch_array(mysqli_query($connect,$quotes_qry));;
        
    include('tampilan/insiden/insiden_ubah.php');
}elseif($_GET['halaman']=='hapus' && isset($_GET['id']) && !empty($_GET['halaman'])){
    Delete("tb_insiden","WHERE id_insiden = '".$_GET['id']."'");
    header("Location:".$domain."insiden.php?halaman=daftar");
}
?>