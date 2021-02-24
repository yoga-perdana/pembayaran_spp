<?php
    include "../koneksi.php";

    $tgl_awal = date('Y-m-d'); //tanggal sekarang

    $tgl1 = date('Y-m-d', strtotime('+30 days', strtotime($tgl_awal)));


?>

<nav class="page-breadcrumb">
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="#">Siswa</a></li>
        <li class="breadcrumb-item active" aria-current="page">Data Siswa</li>
    </ol>
</nav>

<!-- ModalTambahBuku -->
<div class="modal fade" id="produkModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="alert alert-primary" role="alert">
                <!-- Username dan Password Siswa Sudah di Acak, Silahkan Lihat di Detail Siswa -->
            </div>
            <form action="Siswa/ProsesTambahSiswa.php" method="POST">
                <div class="modal-body">
                    <div class="form-group">
                        <label>NISN</label>
                        <input type="number" class="form-control" name="nisn" placeholder="Masukan nisn"
                            required></input>
                    </div>
                    <div class="form-group">
                        <label>NIS</label>
                        <input type="number" name="nis" class="form-control" placeholder="Masukan nis" required>
                    </div>
                    <div class="form-group">
                        <label>Nama</label>
                        <input type="text" name="nama" class="form-control" placeholder="Masukan nama" required>
                    </div>
                    <div class="form-group">
                        <label>Kelas</label>
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
                        <textarea name="alamat" id="" cols="30" rows="10" class="form-control"
                            placeholder="Masukan alamat siswa" required></textarea>
                    </div>
                    <div class="form-group">
                        <label>No. Telp</label>
                        <input type="number" name="no_telp" class="form-control" placeholder="Masukan no telepon siswa"
                            required>
                    </div>
                    <div class="form-group">
                        <label>SPP</label>
                        <select class="form-control" name="spp" required>
                            <?php
                                include "../koneksi.php";

                                $sql = $koneksi->query("SELECT * FROM spp ORDER BY id_spp ASC");

                                while($data = $sql->fetch_assoc()){
                                    echo "<option value='$data[id_spp].$data[tahun].$data[nominal]'>Tahun Ajaran : $data[tahun] | Nominal Bayar Perbulan : $data[nominal]</option>";
                                }
                            ?>
                        </select>
                    </div>
                    <div class="form-group">
                        <label>Jatuh Tempo</label>
                        <input type="date" name="jatuh_tempo" class="form-control" value=<?php echo $tgl1 ?> required>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                    <button type="submit" name="simpan_siswa" class="btn btn-primary">Simpan</button>
                </div>
            </form>
        </div>
    </div>
</div>
<!-- akhir modal -->


<div class="row">
    <div class="col-md-12 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <h6 class="card-title">Data Table</h6>
                <p class="card-description">
                    <button type="button" class="btn btn-primary mt-2 mr-1" data-toggle="modal"
                        data-target="#produkModal"><i class="uil-plus-circle"></i>
                        Tambah Siswa
                    </button>
                </p>
                <div class="table-responsive">
                    <table id="dataTableExample" class="table">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>NISN</th>
                                <th>NIS</th>
                                <th>Nama</th>
                                <th>Kelas</th>
                                <th>Kompetensi Keahlian</th>
                                <th>No. Telp</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php

                                include "../koneksi.php";

                                $no = 1;
                                $sql = $koneksi->query("SELECT * FROM siswa");

                                while ($data=$sql->fetch_assoc()){

                            ?>
                            <tr>
                                <td><?php echo $no++ ; ?></td>
                                <td><?php echo $data['nisn']; ?></td>
                                <td><?php echo $data['nis']; ?></td>
                                <td><?php echo $data['nama']; ?></td>
                                <td><?php echo $data['nama_kelas']; ?></td>
                                <td><?php echo $data['kompetensi_keahlian']; ?></td>
                                <td><?php echo $data['no_telp']; ?></td>
                                <td>
                                    <a href="Beranda.php?hal=DetailSiswa&nisn=<?php echo $data['nisn'] ?>"
                                        class="btn btn-secondary mr-2 mb-2 mb-md-0">Detail</a>
                                    <a href="Siswa/HapusSiswa.php?nisn=<?php echo $data['nisn']; ?>"
                                        onclick="return confirm('Yakin Ingin Menghapus Data Ini ? ')"
                                        class="btn btn-danger mr-2 mb-2 mb-md-0">Hapus</a>
                                    <a href="Beranda.php?hal=EditSiswa&id=<?php echo $data['id'] ?>"
                                        class="btn btn-primary mr-2 mb-2 mb-md-0">Edit</a>
                                </td>
                            </tr>
                            <?php
                                }
                            ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>