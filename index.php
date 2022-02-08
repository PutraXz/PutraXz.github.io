




<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <link rel="stylesheet" href="index.css">
</head>

<body>
<form action="" method="post">
    <div class="container">
        <nav class="navbar">
            <ul>
                <li><a href="#home" class="ho">Home</a></li>
                <li class="ju"><a href="#">Jurusan</a>
                    <ul class="isi-ju">
                        <li><a href="#">Rekaya Perangkat Lunak</a></li>
                        <li><a href="#">Akutansi</a></li>
                        <li><a href="#">Perkantoran</a></li>
                    </ul>
                </li>
                <li class="blog"><a href="#">Blog</a>
                    <ul class="isi-blog">
                        <li><a href="#">Rekaya Perangkat Lunak</a></li>
                        <li><a href="#">Akutansi</a></li>
                    </ul>
                </li>
                <li><a href="#eskul" class="esk">Ekstrakulikuler</a></li>
                <li><a href="#doc" class="do">Dokumentasi</a></li>
                <li><a href="#lokasi" class="ser">Lokasi</a></li>
                <a href="login.php" class="li">LOGIN</a>
                <a href="registrasi.php" class="re ">REGISTRASI</a>
            </ul>
        </nav>
        <div class="home">
            <section id="home">
                <h1 class="kata1">SMK NEGERI 56 BANDUNG</h1>
                <img src="logo2.png " alt="logo" class="gambar">
                <p class="kata2 ">Smk Negeri 56 Bandung dikenal sebagai sekolah terakreditasi <span class="span1">A+</span> juga dikenal sebagai sekolah terfavorit di kota Medan sekolah yang mencapai banyak penghargaan di usia muda siswa dan siswi</p>
            </section>
        </div>
        <section class="news">
        <div class="berita">
            <h1 class="n">Berita</h1>
            <div class="berita1">
                <div class="tabel1">
                    <img src="berita1.png" alt="berita" class="picne">
                    <p class="kabe1">Kemampuan Sekolah SMK Negeri 56 Bandung memiliki kemampuan lebih daripada sekolah lainnya</p>
                    <p class="kabe2">27/01/2022 13:47 WIB - Rafli Afdillah
                    </p>
                </div>
                <div class="tabel2">
                    <img src="berita2.jpg" alt="berita" class="picne2">
                    <p class="kabe3">Kemampuan Sekolah SMK Negeri 56 Bandung memiliki kemampuan lebih daripada sekolah lainnya</p>
                    <p class="kabe4">27/01/2022 13:47 WIB - Rafli Afdillah
                    </p>
                </div>
            </div>
            <input type=button onClick="parent.location='berita.php'"  value='Selengkapnya' class="readmore">
        </div>
    </section>
        <section id="lokasi">
            <div class="maps1">
                <p class="kontak">SMK NEGERI 56 BANDUNG</p>
                <p class="alamat">Jl. Gumuruh 16-2, Gumuruh, Kec. Batununggal, <span class="alamat2"> Kota Bandung, Jawa Barat 40275</span></p>
                <p class="telpon">Telepon: 021 – 430 3676, Fax: 021 – 430 4580</p>
                <p class="email">Email: info@smknegeri56_bandung.sch.id</p>
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3960.6673364682756!2d107.63686361431724!3d-6.930306769761371!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e68e87683a17541%3A0xf6549f02a95ee1dd!2sJl.%20Gumuruh%2016-2%2C%20Gumuruh%2C%20Kec.%20Batununggal%2C%20Kota%20Bandung%2C%20Jawa%20Barat%2040275!5e0!3m2!1sid!2sid!4v1643259034627!5m2!1sid!2sid"
                    width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" class="maps"></iframe>
            </div>
        </section>
    </div>
    <div id="footer">
        <a href=" " class="title ">Footer Copyright</a>
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="main.js "></script>
                </form>
</body>

</html>