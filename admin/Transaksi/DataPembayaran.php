<nav class="page-breadcrumb">
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="#">Pembayaran</a></li>
        <li class="breadcrumb-item active" aria-current="page">Data Pembayaran</li>
    </ol>
</nav>




<div class="row">
    <div class="col-md-12 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <h6 class="card-title">Data Table</h6>
                <div class="alert alert-primary" role="alert">
                    Cari Siswa, Lalu Klik Tabel Bayar Pada Kolom Aksi
                </div>
                <div class="table-responsive">
                    <table id="dataTableExample" class="table">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>NISN</th>
                                <th>Nama Siswa</th>
                                <th>Tahun Ajaran</th>
                                <th>Nominal</th>
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
                                <td><?php echo $data['nama']; ?></td>
                                <td><?php echo $data['tahun_ajaran']; ?></td>
                                <td><?php echo rupiah($data['nominal_bayar']); ?></td>
                                <td>
                                    <a href="Beranda.php?hal=TabelBayar&nisn=<?php echo $data['nisn'] ?>"
                                        class="btn btn-primary mr-2 mb-2 mb-md-0">Tabel Bayar</a>
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