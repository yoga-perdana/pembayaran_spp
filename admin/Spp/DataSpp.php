<?php
    include "../koneksi.php";
    //bikin nomor transaksi otomatis
    $query = "SELECT MAX(id_spp) AS maxKode FROM spp";
    $hasil = mysqli_query($koneksi,$query);
    $data = mysqli_fetch_array($hasil);
    $kodeSpp = $data['maxKode'];
    $noUrut = (int) substr($kodeSpp, 1);
    $noUrut++;
    $unik = "S";
    $noBaru = $unik . sprintf("%04s", $noUrut);


?>

<nav class="page-breadcrumb">
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="#">SPP</a></li>
        <li class="breadcrumb-item active" aria-current="page">Data SPP</li>
    </ol>
</nav>


<!-- ModalTambahBuku -->
<div class="modal fade" id="produkModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <form action="Spp/ProsesTambahSpp.php" method="POST">
                <div class="modal-body">
                    <div class="form-group">
                        <label>ID Spp</label>
                        <input type="text" name="id_spp" class="form-control" value=<?php echo $noBaru ?> readonly>
                    </div>
                    <div class="form-group">
                        <label>Tahun Ajaran</label>
                        <input type="varchar0" name="tahun" class="form-control" placeholder="Contoh : 2020/2021" maxlenght="10" required>
                    </div>
                    <div class="form-group">
                        <label>Nominal Bayar Perbulan</label>
                        <input type="text" id="rupiah" name="nominal" class="form-control" placeholder="Contoh : 250000" maxlenght="25" required>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                    <button type="submit" name="simpan_spp" class="btn btn-primary">Simpan</button>
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
                        Tambah SPP
                    </button>
                </p>
                <div class="table-responsive">
                    <table id="dataTableExample" class="table">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>ID SPP</th>
                                <th>Tahun Ajaran</th>
                                <th>Nominal Bayar Perbulan</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php

                                include "../koneksi.php";

                                $no = 1;
                                $sql = $koneksi->query("SELECT * FROM spp");

                                while ($data=$sql->fetch_assoc()){

                            ?>
                            <tr>
                                <td><?php echo $no++ ; ?></td>
                                <td><?php echo $data['id_spp']; ?></td>
                                <td><?php echo $data['tahun']; ?></td>
                                <td><?php echo rupiah($data['nominal']); ?></td>
                                <td>
                                    <a href="Spp/HapusSpp.php?id_spp=<?php echo $data['id_spp']; ?>"
                                        onclick="return confirm('Yakin Ingin Menghapus Data Ini ? ')"
                                        class="btn btn-danger mr-2 mb-2 mb-md-0">Hapus</a>
                                    <a href="Beranda.php?hal=EditSpp&id_spp=<?php echo $data['id_spp'] ?>" class="btn btn-primary mr-2 mb-2 mb-md-0">Edit</a>
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