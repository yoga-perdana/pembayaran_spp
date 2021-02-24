<?php
    include "../koneksi.php";

    $id_spp = $_GET['id_spp'];
                        
    $sql = mysqli_query($koneksi,"SELECT * FROM spp WHERE id_spp='$id_spp'");

    $tampil = mysqli_fetch_array($sql);

?>

<nav class="page-breadcrumb">
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="#">Kelas</a></li>
        <li class="breadcrumb-item active" aria-current="page">Edit Kelas</li>
    </ol>
</nav>


<form action="Spp/ProsesUbahSpp.php" method="POST">
    <div class="modal-body">
        <div class="form-group">
            <label>ID SPP</label>
            <input type="text" name="id_spp" value="<?php echo $tampil['id_spp'] ?>" class="form-control" readonly>
        </div>
        <div class="form-group">
            <label>Tahun Ajaran</label>
            <input type="text" name="tahun" value="<?php echo $tampil['tahun'] ?>" class="form-control"
                required>
        </div>
        <div class="form-group">
            <label>Nominal Bayar Perbulan</label>
            <input type="text" name="nominal" value="<?php echo $tampil['nominal'] ?>"
                class="form-control" required>
        </div>
    </div>
    <div class="modal-footer">
        <a href="?hal=DataKelas" class="btn btn-secondary">Kemabli</a>
        <button type="submit" name="simpan_edit" class="btn btn-primary">Simpan</button>
    </div>
</form>