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
                            <img class="profile-pic" src="../assets/images/faces/face1.jpg" alt="profile">
                            <span class="profile-name"><?php echo $tampil['nama_petugas'] ?></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row profile-body">
        <div class="d-none d-md-block col-md-12 col-xl-12">
            <div class="card rounded">
                <div class="card-body">
                    <form action="ProsesEditProfil.php" method="POST">
                        <div class="modal-body">
                            <div class="form-group">
                                <label>Nama</label>
                                <input type="text" class="form-control" name="nama"
                                    value="<?php echo $tampil['nama_petugas'] ?>" required></input>
                            </div>
                            <div class="form-group">
                                <label>Username</label>
                                <input type="text" name="username" value="<?php echo $tampil['username'] ?>"
                                    class="form-control" required>
                            </div>
                            <div class="form-group">
                                <label>Password</label>
                                <input type="text" name="password" value="<?php echo $tampil['password'] ?>"
                                    class="form-control" required>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <a href="?hal=Profil" class="btn btn-secondary">Kemabli</a>
                            <button type="submit" name="simpan_edit" class="btn btn-primary">Simpan</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>