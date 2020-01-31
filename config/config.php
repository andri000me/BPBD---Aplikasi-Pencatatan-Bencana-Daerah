<?php
error_reporting(0);
//Session
session_start();
//Tambah Fungsi
require_once("database-function.php");

//Host Website dengan "http" atau "https" dan di akhiri "/"
$domain = 'http://192.168.0.137/bpbd/';

//Database
$db['user']='root';
$db['pass']='';
$db['db']='bpbd';
$db['host']='localhost';

$connect = new mysqli($db['host'], $db['user'], $db['pass'], $db['db']);
if (!$connect) {
    die ("Koneksi Gagal: " . mysqli_connect_error());
} else {
    $connect->set_charset('utf8');
}
?>