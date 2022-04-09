<?php
if(isset($_POST['edit'])){
    $id = htmlentities(htmlspecialchars(strip_tags(trim($_POST['no_pesanan']))));
    $tujuan_wisata = htmlentities(htmlspecialchars(strip_tags(trim($_POST['tujuan_wisata']))));
    $jmlh_pesan = htmlentities(htmlspecialchars(strip_tags(trim($_POST['jmlh_pesan']))));
    $tgl_berangkat = htmlentities(htmlspecialchars(strip_tags(trim($_POST['tgl_berangkat']))));
    $jmlh_hari = htmlentities(htmlspecialchars(strip_tags(trim($_POST['jmlh_hari']))));
    $jam_berangkat = htmlentities(htmlspecialchars(strip_tags(trim($_POST['jam_berangkat']))));
    $jam_tiba = htmlentities(htmlspecialchars(strip_tags(trim($_POST['jam_tiba']))));
    $transportasi = htmlentities(htmlspecialchars(strip_tags(trim($_POST['transportasi']))));
    $penginapan = htmlentities(htmlspecialchars(strip_tags(trim($_POST['penginapan']))));
    $restoran = htmlentities(htmlspecialchars(strip_tags(trim($_POST['restoran']))));

    $query = mysqli_query($koneksi, "UPDATE tb_pesanan SET tujuan_wisata='$tujuan_wisata',jmlh_pesan='$jmlh_pesan',tgl_berangkat='$tgl_berangkat',jmlh_hari='$jmlh_hari',jam_berangkat='$jam_berangkat',jam_tiba='$jam_tiba',transportasi='$transportasi',penginapan='$penginapan',restoran='$restoran' WHERE no_pesanan='$id'");

    if($query){
        header("Location: index.php?page=dashboard");
    }else{
        echo "gagal";
    }
}
?>