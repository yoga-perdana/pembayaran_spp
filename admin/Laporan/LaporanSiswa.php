<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laporan Siswa</title>
    <style>
    body {
        font-family: arial;
    }

    .print {
        margin-top: 10px;
    }

    @media print {
        .print {
            display: none;
        }
    }

    table {
        border-collapse: collapse;
    }
    </style>
</head>

<body>
    <b align="center">LAPORAN DATA SISWA</b>
    <br>
    <br>
    <br>
    <table border="1" cellspacing="" cellpadding="4" width="100%">
        <thead>
            <tr>
                <th>No</th>
                <!-- <th>Username</th>
                <th>Password</th> -->
                <th>NISN</th>
                <th>NIS</th>
                <th>Nama</th>
                <th>Kelas</th>
                <th>Kompetensi Keahlian</th>
                <th>Alamat</th>
                <th>Tahun Ajaran</th>
                <th>No. Telp</th>
            </tr>
        </thead>
        <tbody>
            <?php

                include "../../koneksi.php";

                $no = 1;
                $sql = $koneksi->query("SELECT * FROM siswa");

                while ($data=$sql->fetch_assoc()){

            ?>
            <tr>
                <td align="center"><?php echo $no++ ; ?></td>
                <td align="center"><?php echo $data['nisn']; ?></td>
                <td align="center"><?php echo $data['nis']; ?></td>
                <td><?php echo $data['nama']; ?></td>
                <td><?php echo $data['nama_kelas']; ?></td>
                <td><?php echo $data['kompetensi_keahlian']; ?></td>
                <td><?php echo $data['alamat']; ?></td>
                <td align="center"><?php echo $data['tahun_ajaran']; ?></td>
                <td><?php echo $data['no_telp']; ?></td>
            </tr>
            <?php
                }
            ?>
        </tbody>
    </table>
    <br>
    <br>
    <br>
    <br>
    <table width="100%">
        <tr>
            <td></td>
            <td width="200px">
                <p>Ponorogo , <?= date('Y-m-d') ?> <br />
                    Petugas,
                    <br />
                    <br />
                    <br />
                    <p>__________________________</p>
            </td>
        </tr>
    </table>

    <a href="#" onclick="window.print();"><button class="print">CETAK</button></a>
</body>

</html>