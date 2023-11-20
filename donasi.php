<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DoLineSyariah.</title>
    <link href="img/logo.ico" rel="shortcut icon">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <style>
        body {
            background-color: green;
        }

        .container {
            margin-top: 30px;
        }
    </style>

</head>

<body>

    <div class="container my-auto shadow-lg bg-light">
        <div class="row">
            <h1>Masukan Nominal</h1>
        </div>
        <form action="" method="POST">
            <div class="row">
                <div class="col">
                    <label for="nama">Masukan Username</label>
                    <input type="text" placeholder="Masukan username" name="username">
                </div>
            </div>

            <div class="row">
                <div class="col">
                    <label for="email">Masukan Email</label>
                    <input type="email" placeholder="Masukan @email" name="email">
                </div>
            </div>


            <div class="row">
                <div class="col">
                    <label for="no_wa">No Whatsapp</label>
                    <input type="number" placeholder="Masukan No Whatsapp" name="wa">
                </div>
            </div>





            <div class="row">
                <div class="col">
                    <label for="jenis">jenis</label>
                    <input type="text" placeholder="Masukan jenis pembayaran" name="jenis">
                </div>
            </div>


            <div class="row">
                <div class="col">
                    <label for="nominal">Masukan Nominal</label>
                    <input type="number" placeholder="Masukan nominal" name="nominal">
                </div>
            </div>


            <button class="btn btn-primary shadow-sm" type="submit " name="donasi">Donasi Sekarang</button>





        </form>

    </div>

    <?php
    include 'koneksi.php';

    if (isset($_POST['donasi'])) {
        $nama = $_POST['username'];
        $email = $_POST['email'];
        $wa = $_POST['wa'];
        $jenis = $_POST['jenis'];
        $nominal = $_POST['nominal'];

        $tambah = mysqli_query($koneksi, "INSERT INTO nominal VALUES('', '$nama', '$email','$wa','$jenis','$nominal')");
        if ($tambah) {
            echo "<script>alert('Donasi Berhasil'); window.location = 'index.php';</script>";
        } else {
            echo "<script>alert('Gagal Donasi ');</script>";
        }
    }





    ?>


    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>
</body>

</html>