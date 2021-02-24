<?php
    include "../koneksi.php";
    //bikin nomor transaksi otomatis
    $query = "SELECT MAX(id_kelas) AS maxKode FROM kelas";
    $hasil = mysqli_query($koneksi,$query);
    $data = mysqli_fetch_array($hasil);
    $kodeKelas = $data['maxKode'];
    $noUrut = (int) substr($kodeKelas, 1);
    $noUrut++;
    $unik = "K";
    $noBaru = $unik . sprintf("%04s", $noUrut);

?>

<nav class="page-breadcrumb">
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="#">Siswa</a></li>
        <li class="breadcrumb-item active" aria-current="page">Data Kelas</li>
    </ol>
</nav>

<!-- ModalTambahBuku -->
<div class="modal fade" id="produkModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <form action="Kelas/ProsesTambahKelas.php" method="POST">
                <div class="modal-body">
                    <div class="form-group">
                        <label>ID Kelas</label>
                        <input type="text" class="form-control" name="id_kelas" value=<?php echo $noBaru ?>
                            readonly></input>
                    </div>
                    <div class="form-group">
                        <label>Nama Kelas</label>
                        <input type="text" class="form-control" name="kelas" placeholder="Contoh : XII RPL 2"
                            required></input>
                    </div>
                    <div class="form-group">
                        <label>Kompetensi Keahlian</label>
                        <input type="text" class="form-control" name="kompetensi"
                            placeholder="Contoh : Rekayasa Perangkat Lunak" required></input>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary mr-2 mb-2 mb-md-0"
                        data-dismiss="modal">Batal</button>
                    <button type="submit" name="simpan_kelas" class="btn btn-primary mr-2 mb-2 mb-md-0">Simpan</button>
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
                <h6 class="card-title">Tabel Data</h6>
                <p class="card-description">
                    <button type="button" class="btn btn-primary mt-2 mr-1" data-toggle="modal"
                        data-target="#produkModal"><i class="uil-plus-circle"></i>
                        Tambah Kelas
                    </button>
                </p>
                <div class="table-responsive">
                    <table id="dataTableExample" class="table">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>ID Kelas</th>
                                <th>Nama Kelas</th>
                                <th>Kompetensi Keahlian</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php

                                include "../koneksi.php";

                                $no = 1;
                                $sql = $koneksi->query("SELECT * FROM kelas");

                                while ($data=$sql->fetch_assoc()){

                            ?>
                            <tr>
                                <td><?php echo $no++ ; ?></td>
                                <td><?php echo $data['id_kelas']; ?></td>
                                <td><?php echo $data['nama_kelas']; ?></td>
                                <td><?php echo $data['kompetensi_keahlian']; ?></td>
                                <td>
                                    <a href="Kelas/HapusKelas.php?id_kelas=<?php echo $data['id_kelas']; ?>"
                                        onclick="return confirm('Yakin Ingin Menghapus Data Ini ? ')"
                                        class="btn btn-danger mr-2 mb-2 mb-md-0">Hapus</a>
                                    <a href="Beranda.php?hal=EditKelas&id_kelas=<?php echo $data['id_kelas'] ?>"
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