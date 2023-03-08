<?php 
$nama_customer = $_POST["customer"];
$nama_produk = $_POST["produk"];
if($nama_produk == "tv"){
    $harga = 4000000;
}elseif($nama_produk =="kulkas"){
    $harga = 3000000;
}
else{
    $harga = 2000000;
}
$jumlah = $_POST["jumlah"];
$total_bayar = $harga * $jumlah;    
?>