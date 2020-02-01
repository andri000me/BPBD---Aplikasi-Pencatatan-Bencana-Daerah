<?php
function daftarkota($search){
    global $connect;
    
    if ($connect->connect_error) {
        die("Koneksi Gagal: " . $conn->connect_error);
    }
    
    $sql = "SELECT * FROM tb_kota WHERE nama_kota LIKE '%$search%' ORDER BY nama_kota ASC";
    $result = $connect->query($sql);
    
    if ($result->num_rows > 0) {
        $list = array();
        $key=0;
        while($row = $result->fetch_assoc()) {
            $list[$key]['id'] = $row['id_kota'];
            $list[$key]['text'] = $row['nama_kota']; 
        $key++;
        }
        echo json_encode($list);
    } else {
        echo "hasil kosong";
    }
    $connect->close();
   }
function daftarkecamatan($kota,$search){
    global $connect;
    
    if ($connect->connect_error) {
        die("Koneksi Gagal: " . $conn->connect_error);
    }
    
    $sql = "SELECT * FROM tb_kecamatan WHERE id_kota = ".$kota." OR nama_kecamatan LIKE '%$search%' ORDER BY nama_kecamatan ASC";
    $result = $connect->query($sql);
    
    if ($result->num_rows > 0) {
        $list = array();
        $key=0;
        while($row = $result->fetch_assoc()) {
            $list[$key]['id'] = $row['id_kecamatan'];
            $list[$key]['text'] = $row['nama_kecamatan']; 
        $key++;
        }
        echo json_encode($list);
    } else {
        echo "hasil kosong";
    }
    $connect->close();
}
?>