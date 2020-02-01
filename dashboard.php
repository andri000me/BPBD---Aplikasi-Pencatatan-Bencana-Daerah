<?php
require('config/config.php');

$tahun = 2020;
$bulan = 01;

$sql01 = "SELECT count(*) as total FROM rl_kejadian WHERE waktu LIKE '".$tahun."-01%'";
$hasil01 = mysqli_fetch_assoc(mysqli_query($connect, $sql01));

$sql02 = "SELECT count(*) as total FROM rl_kejadian WHERE waktu LIKE '".$tahun."-02%'";
$hasil02 = mysqli_fetch_assoc(mysqli_query($connect, $sql02));

$sql03 = "SELECT count(*) as total FROM rl_kejadian WHERE waktu LIKE '".$tahun."-03%'";
$hasil03 = mysqli_fetch_assoc(mysqli_query($connect, $sql03));

$sql04 = "SELECT count(*) as total FROM rl_kejadian WHERE waktu LIKE '".$tahun."-04%'";
$hasil04 = mysqli_fetch_assoc(mysqli_query($connect, $sql04));

$sql05 = "SELECT count(*) as total FROM rl_kejadian WHERE waktu LIKE '".$tahun."-05%'";
$hasil05 = mysqli_fetch_assoc(mysqli_query($connect, $sql05));

$sql06 = "SELECT count(*) as total FROM rl_kejadian WHERE waktu LIKE '".$tahun."-06%'";
$hasil06 = mysqli_fetch_assoc(mysqli_query($connect, $sql06));

$sql07 = "SELECT count(*) as total FROM rl_kejadian WHERE waktu LIKE '".$tahun."-07%'";
$hasil07 = mysqli_fetch_assoc(mysqli_query($connect, $sql07));

$sql08 = "SELECT count(*) as total FROM rl_kejadian WHERE waktu LIKE '".$tahun."-08%'";
$hasil08 = mysqli_fetch_assoc(mysqli_query($connect, $sql08));

$sql09 = "SELECT count(*) as total FROM rl_kejadian WHERE waktu LIKE '".$tahun."-09%'";
$hasil09 = mysqli_fetch_assoc(mysqli_query($connect, $sql09));

$sql10 = "SELECT count(*) as total FROM rl_kejadian WHERE waktu LIKE '".$tahun."-10%'";
$hasil10 = mysqli_fetch_assoc(mysqli_query($connect, $sql10));

$sql11 = "SELECT count(*) as total FROM rl_kejadian WHERE waktu LIKE '".$tahun."-11%'";
$hasil11 = mysqli_fetch_assoc(mysqli_query($connect, $sql11));

$sql12 = "SELECT count(*) as total FROM rl_kejadian WHERE waktu LIKE '".$tahun."-12%'";
$hasil12 = mysqli_fetch_assoc(mysqli_query($connect, $sql12));

$hasil = "[".$hasil01['total'].",".$hasil02['total'].",".$hasil03['total'].",".$hasil04['total'].",".$hasil05['total'].",".$hasil06['total'].",".$hasil07['total'].",".$hasil08['total'].",".$hasil09['total'].",".$hasil10['total'].",".$hasil11['total'].",".$hasil12['total']."]";



include('tampilan/dashboard/dashboard.php');

?>