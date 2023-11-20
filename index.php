<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DoLineSyariah.</title>
    <link href="img/logo.ico" rel="shortcut icon">
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" />

</head>

<body id="body">

    <?php


    session_start();

    if (isset($_SESSION['user']['username'])) {
        $greeting = "Hai, " . $_SESSION['user']['username'];
        $link = "index.php";
        $buttonText = "Logout";
        $buttonLink = "logout.php";
    } else {
        $greeting = "daftar";
        $link = "register.php";
        $buttonText = "Login";
        $buttonLink = "login.php";
    }



    ?>


    <!-- header -->
    <header>
        <nav class="navbar navbar-expand-lg navbar-dark shadow-sm fixed-top">
            <div class="container">
                <a class="navbar-brand" style="font-weight: 700;" href="#">&nbsp; DoLineSyariah.</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                        <li class="nav-item lank">
                            <a class="nav-link act" aria-current="page" href="#">Home</a>
                        </li>
                        <li class="nav-item lank">
                            <a class="nav-link" href="#aboutus">About Us</a>
                        </li>
                        <li class="nav-item lank">
                            <a class="nav-link" href="#our">Our Service</a>
                        </li>
                        <li class="nav-item lank">
                            <a class="nav-link" href="#ourservice">Contact</a>
                        </li>
                        <?php if (isset($_SESSION['user']['username'])) { ?>
                            <li class="nav-item">
                                <p class="nav-link text-white"><?php echo $greeting; ?></p>
                            </li>
                            <li class="nav-item">
                                <a href="logout.php" class="btn btn-primary ms-1">logout</a>
                            </li>
                        <?php } else { ?>
                            <li class="nav-item">
                                <a href="register.php" class="btn btn-success">Register</a>
                            </li>
                            <li class="nav-item">
                                <a href="login.php" class="btn btn-outline-success ms-1">log in</a>
                            </li>
                        <?php } ?>
                    </ul>
                </div>
            </div>
        </nav>


        <div class="judul container text-center">
            <img width="20%" height="auto" src="img/logo.png" alt="" style="display: inline-block; border-radius: 20px;">
            <div id="hh">
                <h1>Gak Perlu Ribet<br> Nyari Tempat Untuk<br> Berbagi Donasi.</h1>
            </div>
        </div>
    </header>
    <!-- akhir header -->
    <!-- awal -->
    <main>
        <div class="isi-dari-semuanya container">
            <div class="row">
                <div class="aboutus col-5" style="margin-right: 20px;" id="au">
                    <h2>About Us</h2>
                    <p>Selamat datang di DoLineSyariah, platform donasi online yang berkomitmen untuk membuat perubahan positif dalam kehidupan orang-orang di seluruh dunia. Di DoLineSyariah, kami percaya bahwa kebaikan bisa menyebar dengan cepat jika kita semua berkontribusi.</p>
                </div>
                <div class="our col">
                    <h2>Tujuan Kita</h2>
                    <p>Tujuan kami di DoLineSyariah adalah mempermudah dan memfasilitasi kebaikan dengan menghubungkan orang-orang yang peduli dengan penyebab yang mereka dukung. Kami berusaha memberdayakan masyarakat untuk berbagi sumber daya mereka, baik itu dalam bentuk keuangan, waktu, atau sumber daya lainnya, untuk membantu mereka yang membutuhkan.</p>
                </div>
            </div>
            <div class="row">
                <div class="apa col">
                    <h2>Kami Menyediakan
                    </h2>
                    <div class="isi">
                        <div>
                            <div class="h">
                                <div class="is container">
                                    <div class="logocard">
                                        <svg xmlns="http://www.w3.org/2000/svg" height="2em" viewBox="0 0 512 512"><!--! Font Awesome Free 6.4.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. -->
                                            <path d="M32 32c17.7 0 32 14.3 32 32V400c0 8.8 7.2 16 16 16H480c17.7 0 32 14.3 32 32s-14.3 32-32 32H80c-44.2 0-80-35.8-80-80V64C0 46.3 14.3 32 32 32zM160 224c17.7 0 32 14.3 32 32v64c0 17.7-14.3 32-32 32s-32-14.3-32-32V256c0-17.7 14.3-32 32-32zm128-64V320c0 17.7-14.3 32-32 32s-32-14.3-32-32V160c0-17.7 14.3-32 32-32s32 14.3 32 32zm64 32c17.7 0 32 14.3 32 32v96c0 17.7-14.3 32-32 32s-32-14.3-32-32V224c0-17.7 14.3-32 32-32zM480 96V320c0 17.7-14.3 32-32 32s-32-14.3-32-32V96c0-17.7 14.3-32 32-32s32 14.3 32 32z" />
                                        </svg>
                                    </div>
                                    <h5 id="h1">OPEN DONATION</h5>
                                    <hr>
                                    <p>Donasi untuk kebersamaan</p>
                                </div>
                            </div>
                        </div>
                        <div>
                            <div class="i">
                                <div class="is container">
                                    <div class="logocard">
                                        <svg xmlns="http://www.w3.org/2000/svg" height="2em" viewBox="0 0 512 512"><!--! Font Awesome Free 6.4.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. -->
                                            <path d="M32 32c17.7 0 32 14.3 32 32V400c0 8.8 7.2 16 16 16H480c17.7 0 32 14.3 32 32s-14.3 32-32 32H80c-44.2 0-80-35.8-80-80V64C0 46.3 14.3 32 32 32zM160 224c17.7 0 32 14.3 32 32v64c0 17.7-14.3 32-32 32s-32-14.3-32-32V256c0-17.7 14.3-32 32-32zm128-64V320c0 17.7-14.3 32-32 32s-32-14.3-32-32V160c0-17.7 14.3-32 32-32s32 14.3 32 32zm64 32c17.7 0 32 14.3 32 32v96c0 17.7-14.3 32-32 32s-32-14.3-32-32V224c0-17.7 14.3-32 32-32zM480 96V320c0 17.7-14.3 32-32 32s-32-14.3-32-32V96c0-17.7 14.3-32 32-32s32 14.3 32 32z" />
                                        </svg>
                                    </div>
                                    <h5 id="h1">OPEN DONATION</h5>
                                    <hr>
                                    <p>Donasi untuk kebersamaan</p>
                                </div>
                            </div>
                        </div>
                        <div>
                            <div class="a">
                                <div class="is container">
                                    <div class="logocard">
                                        <svg xmlns="http://www.w3.org/2000/svg" height="2em" viewBox="0 0 512 512"><!--! Font Awesome Free 6.4.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. -->
                                            <path d="M32 32c17.7 0 32 14.3 32 32V400c0 8.8 7.2 16 16 16H480c17.7 0 32 14.3 32 32s-14.3 32-32 32H80c-44.2 0-80-35.8-80-80V64C0 46.3 14.3 32 32 32zM160 224c17.7 0 32 14.3 32 32v64c0 17.7-14.3 32-32 32s-32-14.3-32-32V256c0-17.7 14.3-32 32-32zm128-64V320c0 17.7-14.3 32-32 32s-32-14.3-32-32V160c0-17.7 14.3-32 32-32s32 14.3 32 32zm64 32c17.7 0 32 14.3 32 32v96c0 17.7-14.3 32-32 32s-32-14.3-32-32V224c0-17.7 14.3-32 32-32zM480 96V320c0 17.7-14.3 32-32 32s-32-14.3-32-32V96c0-17.7 14.3-32 32-32s32 14.3 32 32z" />
                                        </svg>
                                    </div>
                                    <h5 id="h1">OPEN DONATION</h5>
                                    <hr>
                                    <p>Donasi untuk kebersamaan</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-1"></div>
                <div class="img col-4">
                    <div class="poto" style="justify-content: center;">
                        <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <img src="img/p.png" class="d-block w-100" alt="...">
                                </div>
                                <div class="carousel-item">
                                    <img src="img/p.png" class="d-block w-100" alt="...">
                                </div>
                                <div class="carousel-item">
                                    <img src="img/p.png" class="d-block w-100" alt="...">
                                </div>
                                <div class="carousel-item">
                                    <img src="img/p.png" class="d-block w-100" alt="...">
                                </div>
                                <div class="carousel-item">
                                    <img src="img/p.png" class="d-block w-100" alt="...">
                                </div>
                            </div>
                            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Previous</span>
                            </button>
                            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Next</span>
                            </button>
                        </div>
                    </div>
                </div>
            </div>

            <div class="yuk row ">
                <div class="p col-4" style="margin-top: 50px; background-color: rgb(24, 43, 61);">
                    <h2>Klik Untuk Donasi</h2>
                    <center>
                        <button type="button" class="btn btn-success btn-lg"> <a href="donasi.php" style="text-decoration: none; color: white;"> Donasi</a></button>
                    </center>
                </div>
                <div class="col-1"></div>
                <div class="p col-7" style="margin-top: 50px; background-color: rgb(31, 61, 24);">
                    <h2>Siapa Yang Telah Kami Bantu?</h2>
                    <p>Di DoLineSyariah, kami bangga atas kontribusi dan dukungan yang telah diberikan oleh komunitas besar kami. Bersama-sama, kita telah menciptakan dampak positif yang signifikan pada berbagai tingkatan, membantu berbagai kelompok dan individu yang membutuhkan.</p>
                </div>
            </div>
        </div>
    </main>
    <!-- akhir -->


    <footer>
        <div class="footer container-fluid">
            <div class="footer-content">
                <div class="footer-column" style="text-align: start;">
                    <a href="#" style="text-decoration: none; color: #bcc1bf;">Terms & Condition</a>
                </div>
                <div class="footer-column" style="text-align: end;">
                    <a style="text-decoration: none; color:  #bcc1bf;" data-bs-toggle="modal" data-bs-target="#exampleModal">Contact Us</a>

                    <!-- Modal -->
                    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content" style="background-color: #182c3d;">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">Contact Us</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <!-- Section: Form -->
                                    <section class="">
                                        <form action="" method="POST">
                                            <!--Grid row-->
                                            <div class="row">
                                                <!--Grid columns for Form -->
                                                <div class="col-md-8 col-12" style="text-align: center; display: flex;">
                                                    <div class="row">
                                                        <div class="col-md-6 col-12">
                                                            <div style="display: block" class="form-outline form-white mb-4">
                                                                <input type="text" id="formName" class="form-control" placeholder="Nama" name="nama" />
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6 col-12">
                                                            <div style="display: block" class="form-outline form-white mb-4">
                                                                <input type="email" id="formEmail" class="form-control" placeholder="Email" name="email" />
                                                            </div>
                                                        </div>
                                                        <div class="col-12">
                                                            <div style="display: block" class="form-outline form-white mb-4">
                                                                <textarea id="formFeedback" class="form-control" placeholder="Saran & Kritik" name="sartik"></textarea>
                                                            </div>
                                                        </div>
                                                        <div class="btn">
                                                            <button name="masukin" type="submit" class="btn btn-primary btnuntuk" style="align-items: first baseline; display: flex;">Masukin</button>
                                                        </div>
                                                    </div>
                                                </div>
                                        </form>
                                    </section>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- akhir modal -->
            </div>
        </div>
        <hr>
        <p class="footer-text ">© 2023 DolineSyariah. All rights reserved.</p>
        </div>

    </footer>

    <?php





    include 'koneksi.php';

    if (isset($_POST['masukin'])) {
        $nama = $_POST['nama'];
        $email = $_POST['email'];
        $sartik = $_POST['sartik'];

        $tambah = mysqli_query($koneksi, "INSERT INTO saran_kritik VALUES('', '$nama', '$email','$sartik')");
        if ($tambah) {
            echo "<script>alert(' terima kasih telah memberikan saran dan kritik'); window.location = 'index.php';</script>";
        } else {
            echo "<script>alert('Gagal memberikan saran dan kritik');</script>";
        }
    }
    ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

</body>

</html>