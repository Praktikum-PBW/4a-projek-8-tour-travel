<?php
if (isset($_GET['no_pesanan'])){
    $id = $_GET['no_pesanan'];

    $query = mysqli_query($koneksi, "DELETE FROM tb_pesanan WHERE no_pesanan='$id'");

    if($query){
        header("Location: index.php?page=dashboard");
    }else{
        echo "gagal";
    }
}
?>