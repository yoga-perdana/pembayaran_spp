<?php
    include "../koneksi.php";

    $nisn = $_GET['nisn'];
                        
    $sql = $koneksi->query("SELECT * FROM siswa WHERE nisn='$nisn'");

    $tampil = $sql->fetch_assoc();

?>


<nav class="page-breadcrumb">
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="#">Siswa</a></li>
        <li class="breadcrumb-item"><a href="?hal=DataSiswa">Data Siswa</a></li>
        <li class="breadcrumb-item active" aria-current="page">Detail Siswa</li>
    </ol>
</nav>

<form>
        <div class="form-group">
            <label>NISN</label>
            <input type="number" class="form-control" name="nisn" value="<?php echo $tampil['nisn'] ?>"
                readonly></input>
        </div>
        <div class="form-group">
            <label>NIS</label>
            <input type="number" name="nis" class="form-control" value="<?php echo $tampil['nis'] ?>" readonly>
        </div>
        <div class="form-group">
            <label>Nama</label>
            <input type="text" name="nama" class="form-control" value="<?php echo $tampil['nama'] ?>" readonly>
        </div>
        <div class="form-group">
            <label>ID Kelas</label>
            <input type="text" name="nama" class="form-control" value="<?php echo $tampil['id_kelas'] ?>" readonly>
        </div>
        <div class="form-group">
            <label>Kelas</label>
            <input type="text" name="nama" class="form-control" value="<?php echo $tampil['nama_kelas'] ?>" readonly>
        </div>
        <div class="form-group">
            <label>Kompetensi Keahlian</label>
            <input type="text" name="nama" class="form-control" value="<?php echo $tampil['kompetensi_keahlian'] ?>"
                readonly>
        </div>
        <div class="form-group">
            <label>Alamat</label>
            <input name="alamat" class="form-control" value="<?php echo $tampil['alamat'] ?>" readonly>
        </div>
        <div class="form-group">
            <label>No. Telp</label>
            <input type="number" name="no_telp" class="form-control" value="<?php echo $tampil['no_telp'] ?>" readonly>
        </div>
        <div class="form-group">
            <label>ID SPP</label>
            <input type="text" name="id_spp" class="form-control" value="<?php echo $tampil['id_spp'] ?>" readonly>
        </div>
        <div class="form-group">
            <label>Tahun Ajaran</label>
            <input type="text" name="no_telp" class="form-control" value="<?php echo $tampil['tahun_ajaran'] ?>"
                readonly>
        </div>
        <div class="form-group">
            <label>Nominal Bayar Perbulan</label>
            <input type="text" name="no_telp" class="form-control"
                value="<?php echo rupiah($tampil['nominal_bayar']) ?>" readonly>
        </div>
    </div>
    <div class="modal-footer">
        <a href="?hal=DataSiswa" class="btn btn-secondary">Kembali</a>
    </div>
</form>