<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Form Request GET</title>
</head>

<body>
    <div class="card h-100">
        <div class="card-header">
            Sistem Penilaian
        </div>
        <div class="card-body">
            <h4>Form Nilai Siswa</h4>
            <hr>
            </hr>
            <form method="GET" action="form_get.php">
                <div class="container w-50">
                    <div class="row">
                        <div class="col-md-4 text-right">
                            <label class="fw-bold">Nama Lengkap</label>
                        </div>
                        <div class="col-md-8 mb-3">
                            <input type="text" name="nama" size="30" class="form-control" placeholder="Nama Lengkap">
                        </div>
                        <div class="col-md-4 text-right">
                            <label class="fw-bold">Mata Kuliah</label>
                        </div>
                        <div class="col-md-8 mb-3">
                            <select name="matkul" class="form-control">
                                <option value="DDP">Dasar Dasar Pemrograman</option>
                                <option value="BDI">Basis Data I</option>
                                <option value="WEB1">Pemrograman Web</option>
                            </select>
                        </div>
                        <div class="col-md-4 text-right">
                            <label class="fw-bold">Nilai UTS</label>
                        </div>
                        <div class="col-md-8 mb-3">
                            <input type="number" name="nilai_uts" class="form-control" placeholder="Nilai UTS">
                        </div>
                        <div class="col-md-4 text-right">
                            <label class="fw-bold">Nilai UAS</label>
                        </div>
                        <div class="col-md-8 mb-3">
                            <input type="number" name="nilai_uas" class="form-control" placeholder="Nilai UAS">
                        </div>
                        <div class="col-md-4 text-right">
                            <label class="fw-bold">Nilai Tugas/Praktikum</label>
                        </div>
                        <div class="col-md-8 mb-3">
                            <input type="number" name="nilai_tugas" class="form-control" placeholder="Nilai Tugas">
                        </div>
                        <div class="col-md-4"></div>
                        <div class="col-md-8 mb-3">
                            <button type="submit" name="proses" class="btn btn-primary">Simpan</button>
                        </div>
                        <div class="col-md-12">
                            <?php
                            if (isset($_GET['proses'])) {
                                $nama = $_GET['nama'];
                                $matkul = $_GET['matkul'];
                                $nilai_uts = $_GET['nilai_uts'];
                                $nilai_uas = $_GET['nilai_uas'];
                                $nilai_tugas = $_GET['nilai_tugas'];
                                $nilai_akhir = ($nilai_uts + $nilai_uas + $nilai_tugas) / 3;
                                echo "Nama Lengkap : " . $nama . "<br>";
                                echo "Mata Kuliah : " . $matkul . "<br>";
                                echo "Nilai UTS : " . $nilai_uts . "<br>";
                                echo "Nilai UAS : " . $nilai_uas . "<br>";
                                echo "Nilai Tugas : " . $nilai_tugas . "<br>";
                                echo "Nilai Akhir : " . $nilai_akhir . "<br>";
                            }
                            ?>
                        </div>
                    </div>
                </div>
            </form>
        </div>
        <div class="card-footer text-muted">
            Develop By @Asnur <?= date('Y') ?>
        </div>
    </div>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
</body>

</html>