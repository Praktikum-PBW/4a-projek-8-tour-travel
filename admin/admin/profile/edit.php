<div class="row">
    <div class="col-md-12">
        <h4>Edit Data Pengguna</h4>
        <form action="index.php?page=profile_update" method="post">
            <input type="hidden" name="id_cust" value="<?=$_SESSION['id_cust']?>">
            <div class="mb-2">
                <label for="username" class="form-label">Username</label>
                <input type="username" name="username" id="username" class="form-control"
                    value="<?=$_SESSION['username']?>">
            </div>
            <div class="mb-2">
                <label for="password" class="form-label">Password</label>
                <input type="password" name="password" id="password" class="form-control">
            </div>
            <div class="mb-2">
                <label for="nama_cust" class="form-label">Nama</label>
                <input type="text" name="nama_cust" id="nama_cust" class="form-control"
                    value="<?=$_SESSION['nama_cust']?>">
            </div>
            <div class="mb-2">
                <label for="alamat" class="form-label">Alamat</label>
                <input type="text" name="alamat" id="alamat" class="form-control" placeholder="Masukkan Alamat"
                    value="<?=$_SESSION['alamat']?>">
            </div>
            <div class="mb-2">
                <label for="no_telp" class="form-label">Nomor Telepon</label>
                <input type="tel" name="no_telp" id="no_telp" class="form-control" placeholder="Masukkan Nomor Telepon"
                    value="<?=$_SESSION['no_telp']?>">
            </div>
            <input type="submit" value="Edit" name="edit" class="btn btn-primary">
        </form>
    </div>
</div>