<?php
    include "../koneksi.php";

    $id = $_GET['id'];
                        
    $sql = mysqli_query($koneksi,"SELECT * FROM siswa WHERE id='$id'");

    $tampil = mysqli_fetch_array($sql);

    $tgl_awal = date('Y-m-d'); //tanggal sekarang

    $tgl1 = date('Y-m-d', strtotime('+30 days', strtotime($tgl_awal)));

?>

<nav class="page-breadcrumb">
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="#">Siswa</a></li>
        <li class="breadcrumb-item active" aria-current="page">Edit Siswa</li>
    </ol>
</nav>


<form action="Siswa/ProsesUbahSiswa.php" method="POST">
    <div class="modal-body">
    <div class="form-group">
            
            <input type="hidden" class="form-control" name="id" value="<?php echo $tampil['id'] ?>"
                required></input>
        </div>
        <div class="form-group">
            <label>NISN</label>
            <input type="hidden" class="form-control" name="id" value="<?php echo $tampil['id'] ?>"
                required></input>
            <input type="number" class="form-control" name="nisn" value="<?php echo $tampil['nisn'] ?>"
                required></input>
        </div>
        <div class="form-group">
            <label>NIS</label>
            <input type="number" name="nis" class="form-control" value="<?php echo $tampil['nis'] ?>" required>
        </div>
        <div class="form-group">
            <label>Nama</label>
            <input type="text" name="nama" class="form-control" value="<?php echo $tampil['nama'] ?>" required>
        </div>
        <div class="form-group">
            <label>Kelas</label>
            <input type="text" class="form-control"
                value="<?php echo $tampil['nama_kelas'] ?> <?php echo $tampil['kompetensi_keahlian'] ?>" readonly>
            <br>
            <div class="alert alert-primary" role="alert">
                Silahkan Pilih Kelas Untuk Merubah
            </div>
            <select class="form-control" name="kelas" required>
                <?php
                    include "../koneksi.php";

                    $sql = $koneksi->query("SELECT * FROM kelas ORDER BY id_kelas ASC");

                    while($data = $sql->fetch_assoc()){
                        echo "<option value='$data[id_kelas].$data[nama_kelas].$data[kompetensi_keahlian]'>$data[nama_kelas] $data[kompetensi_keahlian]</option>";
                    }
                ?>
            </select>
        </div>
        <div class="form-group">
            <label>Alamat</label>
            <br>
            <textarea name="alamat" cols="143" rows="10"> <?php echo $tampil['alamat'] ?></textarea>
        </div>
        <div class="form-group">
            <label>No. Telp</label>
            <input type="number" name="no_telp" class="form-control" value="<?php echo $tampil['no_telp'] ?>" required>
        </div>
        <div class="form-group">
            <label>Tahun Ajaran</label>
            <input type="text" class="form-control" value="<?php echo $tampil['tahun_ajaran'] ?>" readonly>
            <br>
            <div class="alert alert-primary" role="alert">
                Silahkan Pilih Tahun Ajaran Untuk Merubah
            </div>
            <select class="form-control" name="tahun" required>
                <?php
                    include "../koneksi.php";

                    $sql = $koneksi->query("SELECT * FROM spp ORDER BY id_spp ASC");

                    while($data = $sql->fetch_assoc()){
                        echo "<option value='$data[id_spp].$data[tahun]'>$data[tahun]</option>";
                    }
                ?>
            </select>
        </div>
        <div class="form-group">
            <label>Nominal Bayar Perbulan</label>
            <input type="text" class="form-control" value="<?php echo rupiah($tampil['nominal_bayar']) ?>" readonly>
            <br>
            <div class="alert alert-primary" role="alert">
                Silahkan Pilih Nominal Untuk Merubah
            </div>
            <select class="form-control" name="nominal" required>
                <?php
                    include "../koneksi.php";

                    $sql = $koneksi->query("SELECT * FROM spp ORDER BY id_spp ASC");

                    while($data = $sql->fetch_assoc()){
                        echo "<option value='$data[nominal]'>$data[nominal]</option>";
                    }
                ?>
            </select>
        </div>
    </div>
    <div class="modal-footer">
        <a href="?hal=DataSiswa" class="btn btn-secondary">Kemabli</a>
        <button type="submit" class="btn btn-primary">Simpan</button>
    </div>
</form>