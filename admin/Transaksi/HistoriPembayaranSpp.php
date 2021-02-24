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
                    <table class="table">
                    <thead class="thead-dark">
                            <tr>
                                <th>No</th>
                                <th>Kode Pembayaran</th>
                                <th>ID Petugas</th>
                                <th>NISN</th>
                             
                                <th>Tanggal Bayar</th>
                                <th>Bulan & Tahun di Bayar</th>
                                <th>ID SPP</th>
                                <th>Jumlah Bayar</th>
                                <th>Status</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php

                            include "../koneksi.php";

                            $no = 1;
                            $sql = $koneksi->query("SELECT * FROM pembayaran WHERE status='Lunas'");

                            while ($data=$sql->fetch_assoc()){

                            ?>
                            <tr>
                                <td><?php echo $no++ ; ?></td>
                                <td><?php echo $data['kode_pembayaran']; ?></td>
                                <td><?php echo $data['id_petugas']; ?></td>
                                <td><?php echo $data['nisn']; ?></td>
                                
                                <td><?php echo $data['tgl_bayar']; ?></td>
                                <td><?php echo $data['bulan_bayar']; ?></td>
                                <td><?php echo $data['id_spp']; ?></td>
                                <td><?php echo rupiah($data['jumlah_bayar']); ?></td>
                                <td>
                                    <div class="badge badge-success font-size-13 font-weight-normal">
                                        <?php echo $data['status']; ?></div>
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