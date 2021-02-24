<?php
    include "../koneksi.php";

    $id_kelas = $_GET['id_kelas'];
                        
    $sql = mysqli_query($koneksi,"SELECT * FROM kelas WHERE id_kelas='$id_kelas'");

    $tampil = mysqli_fetch_array($sql);

?>

<nav class="page-breadcrumb">
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="#">Kelas</a></li>
        <li class="breadcrumb-item active" aria-current="page">Edit Kelas</li>
    </ol>
</nav>


<form action="Kelas/ProsesUbahKelas.php" method="POST">
    <div class="modal-body">
        <div class="form-group">
            <label>ID Kelas</label>
            <input type="text" name="id_kelas" value="<?php echo $tampil['id_kelas'] ?>" class="form-control" readonly>
        </div>
        <div class="form-group">
            <label>Kelas</label>
            <input type="text" name="nama_kelas" value="<?php echo $tampil['nama_kelas'] ?>" class="form-control"
                required>
        </div>
        <div class="form-group">
            <label>Kompetensi Keahlian</label>
            <input type="text" name="kompetensi_keahlian" value="<?php echo $tampil['kompetensi_keahlian'] ?>"
                class="form-control" required>
        </div>
    </div>
    <div class="modal-footer">
        <a href="?hal=DataKelas" class="btn btn-secondary">Kemabli</a>
        <button type="submit" name="simpan_edit" class="btn btn-primary">Simpan</button>
    </div>
</form>