<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Nilai Mahasiswa</title>

</head>


<body>




    <div class="container m-5">
        <h5>Form Nilai Ujian</h5>
        <hr>

        <form action="#" method="post">

            <div class="d-flex justify-content-center ">
                <div class="col-md-2">
                    <label class="form-label fw-bold">NIM</label>
                </div>
                <div class="col-md-6">
                    <input type="number" class="form-control" name="nim" required name="NIM Anda" placeholder="Masukan NIM">
                </div>
            </div>

            <div class="d-flex justify-content-center mt-3">
                <div class="col-md-2">
                    <label class="form-label fw-bold">Nama</label>
                </div>
                <div class="col-md-6">
                    <input type="text" class="form-control" name="nama" required name="NIM Anda" placeholder="Masukan Nama">
                </div>
            </div>

            <div class="d-flex justify-content-center mt-3">
                <div class="col-md-2">
                    <label class="form-label fw-bold">Pilih Matkul</label>
                </div>
                <div class="col-md-6">
                    <select class="form-select" required name="matkul">
                        <option selected>- Pilih Matkul - </option>
                        <option value="DDP">Dasar-Dasar Pemprograman</option>
                        <option value="BDI">Basis Data I</option>
                        <option value="WEB1">Pemprograman Web</option>
                    </select>
                </div>
            </div>

            <div class="d-flex justify-content-center mt-3">
                <div class="col-md-2">
                    <label class="form-label fw-bold">Nilai</label>
                </div>
                <div class="col-md-6">
                    <input type="number" required class="form-control" name="nilai" placeholder="Nilai">
                </div>
            </div>

            <div class="d-flex justify-content-center mt-3">
                <div class="col-md-2">

                </div>
                <div class="col-md-6">
                    <button type="submit" class="btn btn-success" name="submit">Kirim</button>
                    <button type="button" class="btn btn-primary"><a style="text-decoration: none; color:white;" href="class_nilaimahasiswa.php">Reset Data</a></button>
                </div>
            </div>

        </form>

        <hr>

        <?php

        require_once "class_nilaimahasiswa.php";

        $data  = new NilaiMahasiswa($_POST['nim'] ?? '', $_POST['nama'] ?? '', $_POST['matkul'] ?? '', $_POST['nilai'] ?? '');

        $data->hasil();

        echo "<br/><b>Hasil Ujian</b> : " . $data->grade();
        echo "<br/><b>Grade</b> : " . $data->kelulusan();

        ?>

        <hr>

    </div>



    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

</body>

</html>