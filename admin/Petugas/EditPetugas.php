<?php
    include "../koneksi.php";

    $id_petugas = $_GET['id_petugas'];
                        
    $sql = mysqli_query($koneksi,"SELECT * FROM petugas WHERE id_petugas='$id_petugas'");

    $tampil = mysqli_fetch_array($sql);

?>

<nav class="page-breadcrumb">
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="#">Petugas</a></li>
        <li class="breadcrumb-item active" aria-current="page">Edit Petugas</li>
    </ol>
</nav>


<form action="Petugas/ProsesUbahPetugas.php" method="POST">
    <div class="modal-body">
        <div class="form-group">
            <label>ID Petugas</label>
            <input type="text" name="id_petugas" value="<?php echo $tampil['id_petugas'] ?>" class="form-control"
                readonly>
        </div>
        <div class="form-group">
            <label>Username</label>
            <input type="text" name="username" value="<?php echo $tampil['username'] ?>" class="form-control" required>
        </div>
        <div class="form-group">
            <label>Password</label>
            <input type="text" name="password" value="<?php echo $tampil['password'] ?>" class="form-control" required>
        </div>
        <div class="form-group">
            <label>Nama Petugas</label>
            <input type="text" name="nama_petugas" value="<?php echo $tampil['nama_petugas'] ?>" class="form-control"
                required>
        </div>
        <div class="form-group">
            <label>Level</label>
            <select name="level" value="<?php echo $tampil['level'] ?>" class="form-control" required>
                <option value="admin" <?php if($tampil['level']=='admin') {echo "selected";} ?>>Admin
                </option>

                <option value="petugas" <?php if($tampil['level']=='petugas') {echo "selected";} ?>>Petugas
                </option>

            </select>
        </div>
    </div>
    <div class="modal-footer">
        <a href="?hal=DataPetugas" class="btn btn-secondary">Kemabli</a>
        <button type="submit" name="simpan_edit" class="btn btn-primary">Simpan</button>
    </div>
</form>