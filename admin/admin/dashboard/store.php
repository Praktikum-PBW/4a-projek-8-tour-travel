<?php
if(isset($_POST['tambah'])){
    $tujuan_wisata = htmlentities(htmlspecialchars(strip_tags(trim($_POST['tujuan_wisata']))));
    $jmlh_pesan = htmlentities(htmlspecialchars(strip_tags(trim($_POST['jmlh_pesan']))));
    $tgl_berangkat = htmlentities(htmlspecialchars(strip_tags(trim($_POST['tgl_berangkat']))));
    $jmlh_hari = htmlentities(htmlspecialchars(strip_tags(trim($_POST['jmlh_hari']))));
    $jam_berangkat = htmlentities(htmlspecialchars(strip_tags(trim($_POST['jam_berangkat']))));
    $jam_tiba = htmlentities(htmlspecialchars(strip_tags(trim($_POST['jam_tiba']))));
    $transportasi = htmlentities(htmlspecialchars(strip_tags(trim($_POST['transportasi']))));
    $penginapan = htmlentities(htmlspecialchars(strip_tags(trim($_POST['penginapan']))));
    $restoran = htmlentities(htmlspecialchars(strip_tags(trim($_POST['restoran']))));

    $query = mysqli_query($koneksi, "INSERT INTO tb_pesanan VALUES(null,null,'$tujuan_wisata','$jmlh_pesan','$tgl_berangkat','$jmlh_hari','$jam_berangkat','$jam_tiba','$transportasi','$penginapan','$restoran')");

    if($query){
        header("Location: index.php?page=dashboard");
    }else{
        echo "gagal";
    }
}
?>