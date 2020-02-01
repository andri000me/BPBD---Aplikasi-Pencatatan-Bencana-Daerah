<?php
require('config/config.php');
require('config/spp.class.php');

//Menu Kota / Daftar Kota
if($_GET['halaman']=='daftar' || empty($_GET['halaman'])){
    include('tampilan/kategori/kategori_daftar.php');

//Get DATA KOTA
}elseif($_GET['halaman']=='daftar-list' && !empty($_GET['halaman'])){
    $table = 'tb_kategori';
    $primaryKey = 'kode';
    $columns = array(
        array( 'db' => 'kode', 'dt' => 0 ),
        array( 'db' => 'kode', 'dt' => 1 ),
        array( 'db' => 'kejadian', 'dt' => 2 ),
        array( 'db' => 'kategori', 'dt' => 3 ),
        array( 'db' => 'kode',  'dt' => 4, 'formatter' => function( $d, $row ) {
            return '<a class="btn btn-info" href="kategori.php?halaman=ubah&id=' . $d . '">' . 'Ubah' . '</a> <a class="btn btn-danger" href="kategori.php?halaman=hapus&id=' . $d . '">' . 'Hapus' . '</a>';
            } )
    );
    
    echo json_encode(
        SSP::simple( $_GET, $db, $table, $primaryKey, $columns )
    );

//MENU TAMBAH KOTA
}elseif($_GET['halaman']=='tambah' && !empty($_GET['halaman'])){
    if(isset($_POST['kategori'])){
        $data=array(
            "kode"  => $_POST["kode"],
            "kejadian"  => $_POST["nama"],
            "kategori"  => $_POST["kategori"]
        );
        Insert("tb_kategori",$data);
        header("Location:".$domain."kategori.php?halaman=daftar");
    }
    include('tampilan/kategori/kategori_tambah.php');

//MENU UBAH KOTA
}elseif($_GET['halaman']=='ubah' && isset($_GET['id']) && !empty($_GET['halaman'])){
    if(isset($_POST['kategori']) && isset($_POST['id'])){
        $data=array(
            "kode"  => $_POST["kode"],
            "kejadian"  => $_POST["kejadian"],
            "kategori"  => $_POST["kategori"]
        );
        Update("tb_kategori",$data,"WHERE kode = '".$_POST['id']."'");
        header("Location:".$domain."kategori.php?halaman=daftar");
    }
    $quotes_qry="SELECT * FROM tb_kategori WHERE kode='".$_GET["id"]."'";
    $detail=mysqli_fetch_array(mysqli_query($connect,$quotes_qry));;
        
    include('tampilan/kategori/kategori_ubah.php');

//MENU HAPUS KOTA
}elseif($_GET['halaman']=='hapus' && isset($_GET['id']) && !empty($_GET['halaman'])){
    Delete("tb_kategori","WHERE id_kategori = '".$_GET['id']."'");
    header("Location:".$domain."kategori.php?halaman=daftar");
}
?>