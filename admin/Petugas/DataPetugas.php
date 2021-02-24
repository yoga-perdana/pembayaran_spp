<?php
    include "../koneksi.php";
    //bikin nomor transaksi otomatis
    $query = "SELECT MAX(id_petugas) AS maxKode FROM petugas";
    $hasil = mysqli_query($koneksi,$query);
    $data = mysqli_fetch_array($hasil);
    $kodePetugas = $data['maxKode'];
    $noUrut = (int) substr($kodePetugas, 1);
    $noUrut++;
    $unik = "P";
    $noBaru = $unik . sprintf("%04s", $noUrut);

?>

<nav class="page-breadcrumb">
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="#">Petugas</a></li>
        <li class="breadcrumb-item active" aria-current="page">Data Petugas</li>
    </ol>
</nav>

<!-- ModalTambahBuku -->
<div class="modal fade" id="produkModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <form action="Petugas/ProsesTambahPetugas.php" method="POST">
                <div class="modal-body">
                    <div class="form-group">
                        <label>ID Petugas</label>
                        <input type="text" class="form-control" name="id_petugas" value=<?php echo $noBaru ?>
                            readonly></input>
                    </div>
                    <div class="form-group">
                        <label>Username</label>
                        <input type="text" name="username" class="form-control" placeholder="Masukan username" required>
                    </div>
                    <div class="form-group">
                        <label>Password</label>
                        <input type="password" name="password" class="form-control" placeholder="Masukan password" required>
                    </div>
                    <div class="form-group">
                        <label>Nama Petugas</label>
                        <input type="text" name="nama_petugas" class="form-control" placeholder="Masukan nama petugas"
                            required>
                    </div>
                    <div class="form-group">
                        <label>Level</label>
                        <select name="level" class="form-control" required>
                            <option value="ADMIN">Admin</option>
                            <option value="PETUGAS">Petugas</option>
                        </select>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                    <button type="submit" name="simpan_petugas" class="btn btn-primary">Simpan</button>
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
                        Tambah Petugas
                    </button>
                </p>
                <div class="table-responsive">
                    <table id="dataTableExample" class="table">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>ID Petugas</th>
                                <th>Username</th>
                                <th>Nama Petugas</th>
                                <th>Level</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php

                                include "../koneksi.php";

                                $no = 1;
                                $sql = $koneksi->query("SELECT * FROM petugas");

                                while ($data=$sql->fetch_assoc()){

                            ?>
                            <tr>
                                <td><?php echo $no++ ; ?></td>
                                <td><?php echo $data['id_petugas']; ?></td>
                                <td><?php echo $data['username']; ?></td>
                                <td><?php echo $data['nama_petugas']; ?></td>
                                <td><?php echo $data['level']; ?></td>
                                <td>
                                    <a href="Petugas/HapusPetugas.php?id_petugas=<?php echo $data['id_petugas']; ?>"
                                        onclick="return confirm('Yakin Ingin Menghapus Data Ini ? ')"
                                        class="btn btn-danger mr-2 mb-2 mb-md-0">Hapus</a>
                                    <a href="Beranda.php?hal=EditPetugas&id_petugas=<?php echo $data['id_petugas'] ?>" class="btn btn-primary mr-2 mb-2 mb-md-0">Edit</a>
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