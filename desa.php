<?php
require('config/config.php');
require('config/spp.class.php');
require('config/select2-function.php');

//MENU KECAMATAN / DAFTAR KECAMATAN
if($_GET['halaman']=='daftar' || empty($_GET['halaman'])){
    include('tampilan/desa/desa_daftar.php');

//Get DATA KECAMATAN
}elseif($_GET['halaman']=='daftar-list' && !empty($_GET['halaman'])){
    $table = 'rl_des_kec';
    $primaryKey = 'id_desa';
    $columns = array(
        array( 'db' => 'id_desa', 'dt' => 0 ),
        array( 'db' => 'nama_desa', 'dt' => 1 ),
        array( 'db' => 'nama_kecamatan', 'dt' => 2 ),
        array( 'db' => 'id_desa',  'dt' => 3, 'formatter' => function( $d, $row ) {
            return '<a class="btn btn-info" href="desa.php?halaman=ubah&id=' . $d . '">' . 'Ubah' . '</a> <a class="btn btn-danger" href="desa.php?halaman=hapus&id=' . $d . '">' . 'Hapus' . '</a>';
            } )
    );
    
    echo json_encode(
        SSP::simple( $_GET, $db, $table, $primaryKey, $columns )
    );

//Get DATA KOTA
}elseif($_GET['halaman']=='daftar-kota-list' && !empty($_GET['halaman'])){
    daftarkota($_GET['search']);
    //Get DATA KOTA
}elseif($_GET['halaman']=='daftar-kecamatan-list' && !empty($_GET['halaman'])){
    daftarkecamatan($_GET['kota'],$_GET['search']);

//MENU TAMBAH KECAMATAN
}elseif($_GET['halaman']=='tambah' && !empty($_GET['halaman'])){
    if(isset($_POST['desa'])){
        $data=array(
            "id_kecamatan"  => $_POST["kecamatan"],
            "nama_desa"  => $_POST["desa"]
        );
        Insert("tb_desa",$data);
        header("Location:".$domain."desa.php?halaman=daftar");
    }
    include('tampilan/desa/desa_tambah.php');
   
//MENU UBAH KECAMATAN
}elseif($_GET['halaman']=='ubah' && isset($_GET['id']) && !empty($_GET['halaman'])){
    if(isset($_POST['desa']) && isset($_POST['id'])){
        $data=array(
            "id_kecamatan"  => $_POST["kecamatan"],
            "nama_desa"  => $_POST["desa"]
        );
        Update("tb_desa",$data,"WHERE id_desa = '".$_POST['id']."'");
        header("Location:".$domain."desa.php?halaman=daftar");
    }
    $quotes_qry="SELECT * FROM tb_desa WHERE id_desa='".$_GET["id"]."'";
    $detail=mysqli_fetch_array(mysqli_query($connect,$quotes_qry));;
        
    include('tampilan/desa/desa_ubah.php');

//MENU HAPUS KECAMATAN
}elseif($_GET['halaman']=='hapus' && isset($_GET['id']) && !empty($_GET['halaman'])){
    Delete("tb_desa","WHERE id_desa = '".$_GET['id']."'");
    header("Location:".$domain."desa.php?halaman=daftar");
}
?>