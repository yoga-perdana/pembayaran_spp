<div class="d-flex justify-content-between align-items-center flex-wrap grid-margin">
    <div>
        <h4 class="mb-3 mb-md-0">Welcome to Dashboard</h4>
    </div>
</div>

<div class="row">
    <div class="col-12 col-xl-12 stretch-card">
        <div class="row flex-grow">
            <div class="col-md-4 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <div class="d-flex justify-content-between align-items-baseline">
                            <h6 class="card-title mb-0">Data Siswa Sudah Bayar SPP</h6>
                            <div class="dropdown mb-2">
                                <button class="btn p-0" type="button" id="dropdownMenuButton2" data-toggle="dropdown"
                                    aria-haspopup="true" aria-expanded="false">
                                    <i class="icon-lg text-muted pb-3px" data-feather="more-horizontal"></i>
                                </button>
                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton2">
                                    <a class="dropdown-item d-flex align-items-center" href="?hal=HistoriPembayaranSpp"><i
                                            data-feather="eye" class="icon-sm mr-2"></i> <span class="">Lihat</span></a>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-6 col-md-12 col-xl-5">
                                <?php
                                    require '../koneksi.php';
                                    $query = "SELECT pembayaran.*,siswa.nisn,siswa.nama,siswa.nama_kelas
                                    FROM pembayaran INNER JOIN siswa ON pembayaran.nisn=siswa.nisn
                                    WHERE tgl_bayar ORDER BY kode_pembayaran ASC";
                                    $query_run = mysqli_query($koneksi,$query);

                                    $row = mysqli_num_rows($query_run);
                                    echo '<h3>'.$row.' </h3>';
                                ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div> <!-- row -->