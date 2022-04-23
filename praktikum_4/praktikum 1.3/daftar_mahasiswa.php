<?php

include 'class_mahasiswa.php';
$no = 1;
$data_mahasiswa = [
    [
        "Nama" => "Fendy Setiawan",
        "NIM" => "12124101",
        "Tahun Angkatan" => "2019",
        "Program Studi" => "Teknik Informatika",
        "IPK" => 3.75
    ],
    [
        "Nama" => "Udin",
        "NIM" => "12124110",
        "Tahun Angkatan" => "2020",
        "Program Studi" => "Teknik Informatika",
        "IPK" => 3.50
    ],
    [
        "Nama" => "Yusuf",
        "NIM" => "12124115",
        "Tahun Angkatan" => "2021",
        "Program Studi" => "Sistem Informasi",
        "IPK" => 2.0
    ],
];
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Mahasiswa</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/dt/dt-1.11.5/datatables.min.css" />

</head>

<body>
    <div class="container">
        <table class="table table-bordered" id="dataMahasiswa">
            <thead>
                <tr>
                    <th>
                        No
                    </th>
                    <th>
                        NIM
                    </th>
                    <th>
                        Nama
                    </th>
                    <th>
                        Prodi
                    </th>
                    <th>
                        Thn Angkatan
                    </th>
                    <th>
                        IPK
                    </th>
                    <th>
                        Predikat
                    </th>
                    <th>
                        Aksi
                    </th>
                </tr>
            </thead>
            <tbody>
                <?php
                foreach ($data_mahasiswa as $dm) {
                    $predikat = new Mahasiswa($dm['NIM'], $dm['Nama'], $dm['Tahun Angkatan'], $dm['Program Studi'], $dm['IPK']);
                ?>
                    <tr>
                        <td>
                            <?php echo $no++; ?>
                        </td>
                        <td>
                            <?php echo $dm['NIM']; ?>
                        </td>
                        <td>
                            <?php echo $dm['Nama']; ?>
                        </td>
                        <td>
                            <?php echo $dm['Program Studi']; ?>
                        </td>
                        <td>
                            <?php echo $dm['Tahun Angkatan']; ?>
                        </td>
                        <td>
                            <?php echo $dm['IPK']; ?>
                        </td>
                        <td>
                            <?php echo $predikat->predikat() ?>
                        </td>
                        <td>
                            <a href="">Edit</a>
                            <a href="">Hapus</a>
                        </td>
                    </tr>
                <?php
                }
                ?>
            </tbody>
        </table>
    </div>
</body>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<script type="text/javascript" src="https://cdn.datatables.net/v/dt/dt-1.11.5/datatables.min.js"></script>
<script>
    $(document).ready(function() {
        $('#dataMahasiswa').DataTable();
    });
</script>

</html>