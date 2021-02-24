<?php
    include "../koneksi.php";

    $username = $_GET['username'];
                        
    $sql = $koneksi->query("SELECT * FROM petugas WHERE username='$username'");

    $tampil = $sql->fetch_assoc();

?>

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
                            <img class="profile-pic" src="../assets/images/faces/stmj.png" alt="profile">
                            <span class="profile-name"><?php echo $tampil['nama_petugas'] ?></span>
                        </div>
                        <div class="d-none d-md-block">
                            <a href="Beranda.php?hal=EditProfil&username=<?php echo $tampil['username'] ?>"
                                class=" btn btn-primary btn-icon-text btn-edit-profile">
                                <i data-feather="edit" class="btn-icon-prepend"></i> Edit profile
                            </a>
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
                    <p>Hi! aku <?php echo $tampil['nama_petugas'] ?>. Aku adalah <?php echo $tampil['level'] ?> di Hatimu
                        </p>
                    <div class="mt-3">
                        <label class="tx-11 font-weight-bold mb-0 text-uppercase">username</label>
                        <p class="text-muted"><?php echo $tampil['username'] ?></p>
                    </div>
                    <div class="mt-3">
                        <label class="tx-11 font-weight-bold mb-0 text-uppercase">Password:</label>
                        <p class="text-muted"><?php echo $tampil['password'] ?></p>
                    </div>
                </div>
            </div>
        </div>
        <!-- left wrapper end -->
    </div>
</div>