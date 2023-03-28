<?php
$host       = "localhost";
$user       = "root";
$pass       = "";
$db         = "web";

$koneksi    = mysqli_connect($host, $user, $pass, $db);

if (!$koneksi) { //cek koneksi
    die("Tidak Terkoneksi");
}

$nama       = "";
$pesan      = "";
$sukses     = "";
$error      = "";

if (isset($_POST['simpan'])) {
    $nama       = $_POST['nama'];
    $pesan       = $_POST['pesan'];

    if ($nama && $pesan) {
        $sql1       = "insert into portofolio(nama,pesan) values('$nama','$pesan')";
        $q1         = mysqli_query($koneksi, $sql1);
    }

    if ($q1) {
        $sukses  = "Terima Kasih Pesan Sudah Dikirim😊👌";
    } else {
        $error   = "Yahhhhhh Pesan Gagal Dikirim😢😢";
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />

    <title>Daffa | Developer Website</title>

    <link rel="stylesheet" href="css/bootstrap.min.css" />
    <link rel="stylesheet" href="css/unicons.css" />
    <link rel="stylesheet" href="css/owl.carousel.min.css" />
    <link rel="stylesheet" href="css/owl.theme.default.min.css" />

    <!-- MAIN STYLE -->
    <link rel="stylesheet" href="css/tooplate-style.css" />

    <!-- fontawesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" />
</head>

<body>
    <!-- MENU -->
    <nav class="navbar navbar-expand-sm navbar-light">
        <div class="container">
            <a class="navbar-brand" href="#"><img src="images/project/coding.png" width="55"> Daffa
                Naufal</a>

            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
                <span class="navbar-toggler-icon"></span>
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav mx-auto">
                    <li class="nav-item">
                        <a href="index.php" class="nav-link"><span data-hover="Home">Home</span></a>
                    </li>
                    <li class="nav-item">
                        <a href="#about" class="nav-link"><span data-hover="About">About</span></a>
                    </li>
                    <li class="nav-item">
                        <a href="#tools" class="nav-link"><span data-hover="Tools">Tools</span></a>
                    </li>
                    <li class="nav-item">
                        <a href="#tekno" class="nav-link"><span data-hover="Tekno">Tekno</span></a>
                    </li>
                    <li class="nav-item">
                        <a href="#contact" class="nav-link"><span data-hover="Contact">Contact</span></a>
                    </li>
                </ul>

                <ul class="navbar-nav ml-lg-auto">
                    <div class="ml-lg-4">
                        <div class="color-mode d-lg-flex justify-content-center align-items-center">
                            <i class="color-mode-icon"></i>
                            Mode
                        </div>
                    </div>
                </ul>
            </div>
        </div>
    </nav>

    <section class="about full-screen d-lg-flex justify-content-center align-items-center">
        <div class="container">
            <div class="row">

                <div class="col-lg-5 col-md-12 col-12 text-center">
                    <div class="about-image svg">
                        <img src="images/project/hero-img 2.png" class="img-fluid" alt="svg image" width="355">
                    </div>
                </div>

                <div class="col-lg-7 col-md-12 col-12 d-flex align-items-center">
                    <div class="about-text">
                        <h1 class="animated animated-text">
                            <span class="mr-2">Hello, I'm</span>
                            <div class="animated-info">
                                <span class="animated-item">Daffa Naufal</span>
                                <span class="animated-item">Web Desain</span>
                                <span class="animated-item">Web Dev</span>
                            </div>
                        </h1>

                        <p class="text-dark fs">"Kebanyakan Programmer hebat melakukan Pemrograman bukan karena mereka mengharapkan bayaran atau pujian dari publik , tetapi karena melakukan pemrograman itu menyenangkan"</p>

                        <h3 class="gradient">Daffa Naufal | Developer PHP Laravel</h3>
                    </div>
                </div>



            </div>
        </div>
    </section>

    <section class="full-screen" id="about">
        <div class="container-fluid">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <h3 class="text-center">About</h3>
                        <hr>
                    </div>
                    <div class="col-12 text-center pb-4">
                        <img src="images/project/profile.jpg" alt="Profile" class="rounded-circle border border-5 border-dark" width="155">
                        <h3 class="fs gradient">Web Developer | Mahasiswa | Developer php</h3>
                    </div>
                    <div class="col-12">
                        <p class="text-center gradient fs">"Teknologi akan Berperilaku Positif jika Penggunaan nya dilakukan dengan Benar"</p>
                        <p class="text-center fs gradient">Halo Semua Perkenalkan nama saya Daffa Naufal Fachrezi. Biasa di panggil Novall. Kali ini saya membuat suatu project website dengan menggunakan HTML CSS DAN JAVASCRIPT dan PHP dengan Framework Laravel 9 untuk Bagian Back-end. Saya umur 15 tahun Kelas 10 SMK di SMK Gelora Bekasi</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="full-screen" id="tekno">
        <div class="container pt-4">
            <h3 class="text-center pb-5">Teknologi yang digunakan</h3>
            <div class="row text-center">
                <div class="col-md-4">
                    <img src="images/undraw/html.png" class="img-fluid" width="100">
                </div>
                <div class="col-md-4">
                    <img src="images/undraw/css-3.png" class="img-fluid" width="100">
                </div>
                <div class="col-md-4">
                    <img src="images/undraw/js.png" class="img-fluid" width="100">
                </div>
            </div>
            <div class="row text-center justify-content-center">
                <div class="col-md-6">
                    <img src="images/undraw/php.png" class="img-fluid" width="100">
                </div>
                <div class="col-md-6">
                    <img src="images/undraw/mysql.png" class="img-fluid" width="100">
                </div>
            </div>
            <div class="row text-center justify-content-center">
                <div class="col-12">
                    <img src="images/undraw/logomark.min.svg" class="img-fluid" width="100">
                </div>
            </div>
        </div>
    </section>

    <section class="about full-screen d-lg-flex justify-content-center align-items-center" id="tools">
        <div class="container">
            <h3 class="text-center pb-5">Tools Yang Digunakan</h3>
            <div class="row text-center">
                <div class="col-md-3 col-12">
                    <img src="images/undraw/figma_logo_icon_147289.png" alt="Figma" class="img-fluid" width="155">
                </div>
                <div class="col-md-3 col-12">
                    <img src="images/undraw/microsoft_visual_studio_code_alt_macos_bigsur_icon_189955.png" alt="VS Code" class="img-fluid" width="155">
                </div>
                <div class="col-md-3 col-12">
                    <img src="images/undraw/file_type_git_icon_130581.png" alt="Git" class="img-fluid" width="155">
                </div>
                <div class="col-md-3 col-12">
                    <img src="images/undraw/file_type_node_icon_130301.png" alt="Node JS" class="img-fluid" width="155">
                </div>
            </div>
            <div class="row text-center justify-content-center">
                <div class="col-md-3 col-12">
                    <img src="images/undraw/github-logo_icon-icons.com_73546.png" alt="Github" class="img-fluid" width="155">
                </div>
            </div>
        </div>
    </section>

    <!-- CONTACT -->
    <section class="contact px-5 py-5">
        <h3 class="text-center pb-5">Contact</h3>
        <div class="container">
            <div class="row">

                <div class="col-lg-5 mr-lg-5 col-12">
                    <div class="google-map w-100">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3966.6627850639043!2d107.0318676142684!3d-6.175878562236304!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69890c6899675f%3A0x10d46a9bed3a3e62!2sJl.%20Mataram%20IV%2C%20Kebalen%2C%20Kec.%20Babelan%2C%20Kabupaten%20Bekasi%2C%20Jawa%20Barat%2017610!5e0!3m2!1sid!2sid!4v1671790229160!5m2!1sid!2sid" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>

                    <div class="contact-info d-flex justify-content-between align-items-center py-4 px-lg-5">
                        <div class="contact-info-item">
                            <hello class="mb-3 text-white">Daffa Naufal Fachrezi</h3>
                                <p class="footer-text mb-0">Developer PHP Laravel</p>
                        </div>

                        <ul class="social-links text-whites">
                            <li><a href="https://api.whatsapp.com/send/?phone=6283833097738&text&type=phone_number&app_absent=0" target="_blank"><i class="fa-brands fa-whatsapp fa-2x"></i></a></li>
                            <li><a href="https://www.instagram.com/xzydnf_" target="_blank"><i class="fa-brands fa-instagram fa-2x"></i></a></li>
                            <li><a href="https://tiktok.com/@daffajagocoding_"><i class="fa-brands fa-tiktok fa-2x"></i></a></li>
                        </ul>
                    </div>
                </div>

                <div class="col-lg-6 col-12" id="contact">
                    <div class="contact-form">
                        <h2 class="mb-4">Let's Talk To Meeee 😊</h2>

                        <?php
                        if ($error) {
                        ?>
                            <div class="alert alert-danger">
                                <?php echo $error ?>
                            </div>
                        <?php
                        }

                        if ($sukses) {
                        ?>
                            <div class="alert alert-success">
                                <?php echo $sukses ?>
                            </div>
                        <?php
                        }

                        ?>

                        <form action="#contact" method="post">
                            <div class="row">
                                <div class="col-12">
                                    <input type="text" class="form-control" name='nama' placeholder="Your Name" id="nama">
                                </div>

                                <div class="col-12">
                                    <textarea name='pesan' rows="6" class="form-control" id="pesan" placeholder="Message"></textarea>
                                </div>

                                <div class="ml-lg-auto col-lg-5 col-12">
                                    <input type="submit" name='simpan' class="form-control submit-btn" value="Send Button">
                                </div>
                            </div>
                        </form>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- FOOTER -->
    <footer class="footer py-5">
        <div class="container">
            <div class="row">

                <div class="col-lg-12 col-12">
                    <p class="copyright-text text-center">Copyright &copy; <?php echo date('Y') ?> Daffa . All rights reserved</p>
                    <p class="copyright-text text-center">Designed & Created by <a rel="nofollow" href="https://www.instagram.com/xzydnf_">Daffa Naufal</a></p>
                </div>

            </div>
        </div>
    </footer>
    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/Headroom.js"></script>
    <script src="js/jQuery.headroom.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/smoothscroll.js"></script>
    <script src="js/custom.js"></script>
</body>

</html>