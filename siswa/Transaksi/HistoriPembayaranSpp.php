<nav class="page-breadcrumb">
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="#">Pembayaran</a></li>
        <li class="breadcrumb-item active" aria-current="page">Histori Pembayaran SPP</li>
    </ol>
</nav>

<div class="row">
    <div class="col-md-12 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <h6 class="card-title">Data Table</h6>
                <div class="table-responsive">
                    <table class="table ">
                    <thead class="thead-dark">
                            <tr>
                                <th>No</th>
                                <th>Kode Pembayaran</th>
                                <th>NIS</th>
                                <th>Jatuh Tempo</th>
                                <th>Tanggal Bayar</th>
                                <th>Bulan Bayar</th>
                                <th>Tahun Bayar</th>
                                <th>Jumlah Bayar</th>
                                <th>Status</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php

                            include "../koneksi.php";
                            $no = 1;
                            $sql = $koneksi->query("SELECT * FROM pembayaran WHERE nisn = '$_SESSION[nisn_siswa]'  ORDER BY status='Belum Bayar' ASC");

                            while ($data=$sql->fetch_assoc()){

                            ?>
                            <tr>
                                <td><?php echo $no++ ; ?></td>
                                <td><?php echo $data['kode_pembayaran']; ?></td>
                                <td><?php echo $data['nisn']; ?></td>
                                <td><?php echo $data['jatuh_tempo']; ?></td>
                                <td><?php echo $data['tgl_bayar']; ?></td>
                                <td><?php echo $data['bulan_bayar']; ?></td>
                                <td><?php echo $data['tahun_bayar']; ?></td>
                                <td><?php echo rupiah($data['jumlah_bayar']); ?></td>
                                <td>
                                    <?php echo $data['status']; ?>
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