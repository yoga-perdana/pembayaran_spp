<nav class="page-breadcrumb">
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="#">Laporan</a></li>
        <li class="breadcrumb-item active" aria-current="page">Generate Laporan</li>
    </ol>
</nav>

<div class="row">
    <div class="col-md-12 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <h6 class="card-title">Data Table</h6>
                <div class="table-responsive">
                    <table class="table">
                        <tr>
                            <th>Nama Laporan</th>
                            <th width="200">Cetak</th>
                        </tr>
                        <tr>
                            <td>
                                Laporan Data Siswa
                            </td>
                            <td>
                                <a href="Laporan/LaporanSiswa.php" target="_blank"><button
                                        class="btn btn-primary btn-sm">
                                        Cetak</button></a>
                            </td>
                        </tr>

                        <form class="col-md-2" action="Laporan/LaporanPembayaran.php" method="GET" target="_blank">
                            <td>
                                <b>Laporan Pembayaran</b>
                            </td>
                            <td>
                                Mulai Tanggal <input class="form-control" type="date" name="tgl1"
                                    value="<?= date('Y-m-d') ?>">
                                Sampai Tanggal <input class="form-control" type="date" name="tgl2"
                                    value="<?= date('Y-m-d') ?>">
                                    <br>
                                <button class="btn btn-success btn-lg" type="submit" name="tampil">Tampilkan</button>
                            </td>
                        </form>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>