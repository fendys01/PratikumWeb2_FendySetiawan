<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Form Request POST</title>
</head>

<body>
    <div class="card h-100">
        <div class="card-header">
            Belanja Online
        </div>
        <div class="card-body">
            <div class="row">
                <div class="col-md-8">
                    <form method="POST" action="form_post.php">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-4 text-right">
                                    <label class="fw-bold">Customer</label>
                                </div>
                                <div class="col-md-8 mb-3">
                                    <input type="text" name="customer" size="30" class="form-control" placeholder="Customer">
                                </div>
                                <div class="col-md-4 text-right">
                                    <label class="fw-bold">Pilih Produk</label>
                                </div>
                                <div class="col-md-8 mb-3">
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="produk" id="inlineRadio1" value="TV">
                                        <label class="form-check-label" for="inlineRadio1">TV</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="produk" id="inlineRadio2" value="Kulkas">
                                        <label class="form-check-label" for="inlineRadio2">Kulkas</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="produk" id="inlineRadio3" value="Mesin Cuci">
                                        <label class="form-check-label" for="inlineRadio3">Mesin Cuci</label>
                                    </div>
                                </div>
                                <div class="col-md-4 text-right">
                                    <label class="fw-bold">Jumlah</label>
                                </div>
                                <div class="col-md-8 mb-3">
                                    <input type="number" name="jumlah" class="form-control" placeholder="Jumlah">
                                </div>
                                <div class="col-md-8 mb-3">
                                    <button type="submit" name="proses" class="btn btn-primary">Simpan</button>
                                </div>

                            </div>
                        </div>
                    </form>
                </div>
                <div class="col-md-4">
                    <div class="card">
                        <div class="card-header bg-primary text-white">
                            <label>Daftar Harga</label>
                        </div>
                        <div class="card-body">
                            <label>TV : 4.200.000</label>
                            <hr>
                            <label>Kulkas : 3.100.000</label>
                            <hr>
                            <label>Mesin Cuci : 3.800.000</label>
                        </div>
                    </div>
                    <div class="card-footer bg-primary text-white">
                        <label>Harga Dapat Berubah Setiap Saat</label>
                    </div>
                </div>
                <div class="col-md-12 mt-3">
                    <?php
                    if (isset($_POST['proses'])) {
                        $customer = $_POST['customer'];
                        $produk = $_POST['produk'];
                        if ($produk == "TV") {
                            $harga = 4200000;
                        } elseif ($produk == "Kulkas") {
                            $harga = 3100000;
                        } elseif ($produk == "Mesin Cuci") {
                            $harga = 3800000;
                        }
                        $jumlah = $_POST['jumlah'];
                        $total = $harga * $jumlah;
                        echo "<div class='alert alert-success'>
                                <label>Customer : $customer</label>
                                <br>
                                <label>Produk : $produk</label>
                                <br>
                                <label>Jumlah : $jumlah</label>
                                <br>
                                <label>Total : Rp. " . number_format($total) . "</label>
                            </div>";
                    }
                    ?>
                </div>
            </div>
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