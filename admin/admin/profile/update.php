<?php
if(isset($_POST['edit'])){
    $id = htmlentities(htmlspecialchars(strip_tags(trim($_POST['id_cust']))));
    $username = htmlentities(htmlspecialchars(strip_tags(trim($_POST['username']))));
    $pass = htmlentities(htmlspecialchars(strip_tags(trim($_POST['password']))));
    $nama = htmlentities(htmlspecialchars(strip_tags(trim($_POST['nama_cust']))));
    $alamat = htmlentities(htmlspecialchars(strip_tags(trim($_POST['alamat']))));
    $telp = htmlentities(htmlspecialchars(strip_tags(trim($_POST['no_telp']))));
    $status = htmlentities(htmlspecialchars(strip_tags(trim($_POST['status']))));

    if (empty($pass)) {
        $query = mysqli_query($koneksi, "UPDATE tb_user SET username='$username',nama_cust='$nama',alamat='$alamat', no_telp='$telp' WHERE id_cust='$id'");
    } else {
        $pass = sha1($pass);
        $query = mysqli_query($koneksi, "UPDATE tb_user SET username='$username',password='$pass',nama_cust='$nama',alamat='$alamat', no_telp='$telp' WHERE id_cust='$id'");
    }

    

    if($query){
        header("Location: ../signin.php");
    }else{
        echo "gagal";
    }
}
?>