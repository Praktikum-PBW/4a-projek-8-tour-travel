<?php
if(isset($_GET['no_pesanan'])){
    $id = $_GET['no_pesanan'];

    $query = mysqli_query($koneksi, "SELECT * FROM tb_pesanan WHERE no_pesanan='$id'");
    $data = mysqli_fetch_array($query);

    if(mysqli_num_rows($query) == 1){
    ?>
<div class="row">
    <div class="col-md-12">
        <h4>Tambah Data Pengguna</h4>
        <form action="index.php?page=dashboard_update" method="post">
            <input type="hidden" name="no_pesanan" value="<?= $id ?>">
            <div class="mt-2">
                <label for="tujuan_wisata" class="form-label">Tujuan Wisata</label>
                <input type="text" name="tujuan_wisata" id="tujuan_wisata" class="form-control"
                    value="<?= $data['tujuan_wisata']?>" placeholder="Masukkan Tujuan Wisata">
            </div>
            <div class="mt-2">
                <label for="jmlh_pesan" class="form-label">Jumlah Pesan</label>
                <input type="text" name="jmlh_pesan" id="jmlh_pesan" class="form-control"
                    value="<?= $data['jmlh_pesan']?>" placeholder="Masukkan Jumlah Pesan">
            </div>
            <div class="mt-2">
                <label for="tgl_berangkat" class="form-label">Tanggal Keberangkatan</label>
                <input type="text" name="tgl_berangkat" id="tgl_berangkat" class="form-control"
                    value="<?= $data['tgl_berangkat']?>" placeholder="Masukkan Tanggal Keberangkatan">
            </div>
            <div class="mt-2">
                <label for="jmlh_hari" class="form-label">Jumlah Hari</label>
                <input type="text" name="jmlh_hari" id="jmlh_hari" class="form-control" value="<?= $data['jmlh_hari']?>"
                    placeholder="Masukkan Jumlah Hari">
            </div>
            <div class="mt-2">
                <label for="jam_berangkat" class="form-label">Jam Keberangkatan</label>
                <input type="text" name="jam_berangkat" id="jam_berangkat" class="form-control"
                    value="<?= $data['jam_berangkat']?>" placeholder="Masukkan Jam Keberangkatan">
            </div>
            <div class="mt-2">
                <label for="jam_tiba" class="form-label">Jam Tiba</label>
                <input type="text" name="jam_tiba" id="jam_tiba" class="form-control" value="<?= $data['jam_tiba']?>"
                    placeholder="Masukkan Jam Tiba">
            </div>
            <div class="mt-2">
                <label for="transportasi" class="form-label">Transportasi</label>
                <input type="text" name="transportasi" id="transportasi" class="form-control"
                    value="<?= $data['transportasi']?>" placeholder="Masukkan Transportasi">
            </div>
            <div class="mt-2">
                <label for="penginapan" class="form-label">Penginapan</label>
                <input type="text" name="penginapan" id="penginapan" class="form-control"
                    value="<?= $data['penginapan']?>" placeholder="Masukkan Penginapan">
            </div>
            <div class="mt-2">
                <label for="restoran" class="form-label">Restoran</label>
                <input type="text" name="restoran" id="restoran" class="form-control" value="<?= $data['restoran']?>"
                    placeholder="Masukkan Restoran">
            </div>
            <input type="submit" value="Edit" name="edit" class="btn btn-primary mt-2">
        </form>
    </div>
</div>
<?php
    }else{
        header("Location:index.php?page=dashboard");    
    }
}else{
    header("Location:index.php?page=dashboard");
}
?>