<div class="d-flex justify-content-between align-items-center flex-wrap grid-margin">
    <div>
        <h4 class="mb-3 mb-md-0">Welcome to Dashboard</h4>
    </div>
</div>

<div class="profile-page tx-13">
    <div class="row">
        <div class="col-12 grid-margin">
            <div class="profile-header">
                <div class="cover">
                    <div class="gray-shade"></div>
                    <figure>
                        <img src="../assets/images/profile-cover.jpg" class="img-fluid" alt="profile cover">
                    </figure>
                    <div class="cover-body d-flex justify-content-between align-items-center">
                        <div>
                            <img class="profile-pic" src="../assets/images/faces/face1.jpg" alt="profile">
                            <span class="profile-name"><?=$_SESSION['nama_siswa']?></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row profile-body">
        <!-- left wrapper start -->
        <div class="d-none d-md-block col-md-12 col-xl-12">
            <div class="card rounded">
                <div class="card-body">
                    <div class="d-flex align-items-center justify-content-between mb-2">
                        <h6 class="card-title mb-0">Profil Saya</h6>
                    </div>
                    <div class="mt-3">
                        <label class="tx-11 font-weight-bold mb-0 text-uppercase">NISN</label>
                        <p class="text-muted"><?=$_SESSION['nisn_siswa']?></p>
                    </div>
                    <div class="mt-3">
                        <label class="tx-11 font-weight-bold mb-0 text-uppercase">NIS</label>
                        <p class="text-muted"><?=$_SESSION['nis_siswa']?></p>
                    </div>
                    <div class="mt-3">
                        <label class="tx-11 font-weight-bold mb-0 text-uppercase">Kelas</label>
                        <p class="text-muted"><?=$_SESSION['nama_kelas_siswa']?></p>
                    </div>
                    <div class="mt-3">
                        <label class="tx-11 font-weight-bold mb-0 text-uppercase">Kompetensi Keahlian</label>
                        <p class="text-muted"><?=$_SESSION['kompetensi_keahlian_siswa']?></p>
                    </div>
                    <div class="mt-3">
                        <label class="tx-11 font-weight-bold mb-0 text-uppercase">Alamat</label>
                        <p class="text-muted"><?=$_SESSION['alamat_siswa']?></p>
                    </div>
                    <div class="mt-3">
                        <label class="tx-11 font-weight-bold mb-0 text-uppercase">Nomor Telepon</label>
                        <p class="text-muted"><?=$_SESSION['no_telp_siswa']?></p>
                    </div>
                    <div class="mt-3">
                        <label class="tx-11 font-weight-bold mb-0 text-uppercase">Tahun Ajaran</label>
                        <p class="text-muted"><?=$_SESSION['tahun_ajaran_siswa']?></p>
                    </div>
                    <div class="mt-3">
                        <label class="tx-11 font-weight-bold mb-0 text-uppercase">Nominal Bayar SPP Perbulan</label>
                        <p class="text-muted"><?=rupiah($_SESSION['nominal_bayar_siswa']) ?></p>
                    </div>
                
                </div>
            </div>
        </div>
        <!-- left wrapper end -->
    </div>
</div>