<?php
$host = "localhost"; // Nama hostnya
$username = "root"; // Username
$password = ""; // Password (Isi jika menggunakan password)
$database = "mitrans"; // Nama databasenya
$koneksi = mysqli_connect($host, $username, $password, $database); // Koneksi ke MySQL

include "koneksi.php";
// 

$nama = $_POST['nama'];
$alamat = $_POST['alamat'];
$email = $_POST['email'];
$biaya = 100000;
$order_id= rand();
$transaction_status= 1;
$transaction_id="";
// menginput data ke database
mysqli_query($koneksi,"insert into peserta  values('','$nama','$alamat','$biaya','$order_id','$transaction_status','$transaction_id','$email')");
 
// mengalihkan halaman kembali ke index.php
header("location:./Payment/examples/snap/checkout-process-simple-version.php?order_id=$order_id");
?>

