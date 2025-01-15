<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Daftar UMKM Dusun Sudimoro</title>
    <link rel="icon" href="logo_2.ico" type="image/gif">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="<?= base_url('assets/style.css'); ?>">

    <style>
        @font-face {
            font-family: 'MondaySans';
            src: url('<?= base_url('assets/MondaySans.ttf'); ?>') format('truetype');
            font-weight: bolder;
            font-style: normal;
        }

        body {
            font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;
            background-image: url('<?= base_url('assets/bg_umkm.jpeg'); ?>');
            /* Pastikan path sesuai dengan lokasi file */
            background-size: cover;
            background-repeat: no-repeat;
            background-attachment: fixed;
        }

        .card-img-top {
            width: 100%;
            height: 200px;
            object-fit: contain;
        }

        .p1 {
            color: black;
        }

        .umkm-container {
            margin-bottom: 50px;
            background: rgba(255, 255, 255, 0.5);
            /* Memberikan background putih dengan transparansi */
            padding: 20px;
            border-radius: 10px;
        }

        .carousel-item img,
        .carousel-item video {
            width: 500px;
            height: auto;
            margin: 0 auto;
        }

        .text {
            color: #000;
            font-size: 18px;
            padding: 8px 12px;
            text-align: center;
        }

        hr {
            margin: 50px 0;
            border: 1px solid #ddd;
        }

        table {
            width: 100%;
            border-collapse: collapse;
        }

        table td {
            padding: 8px;
            vertical-align: top;
        }

        table td:nth-child(1) {
            width: 30%;
            font-weight: bold;
        }

        table td:nth-child(2) {
            width: 70%;
        }
    </style>
</head>

<body>
    <?= $this->include('layout/navbar'); ?>

    <div class="container">
        <div class="p1 jumbotron text-center">
            <h1 class="p1">Daftar UMKM di Dusun Sudimoro</h1>
            <p class="lead">Temukan berbagai usaha mikro, kecil, dan menengah di Dusun Sudimoro</p>
        </div>
        <hr>
        <div class="umkm-container bg">
            <h2 class="text-center">Bakso Hitam Manis</h2>

            <div id="umkm1" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="/uploads/umkm1_1.gif" class="d-block w-50 card-img-top" alt="Bakso Hitam Manis">
                    </div>
                    <div class="carousel-item">
                        <img src="/uploads/umkm1_2.jpeg" class="d-block w-50 card-img-top" alt="Bakso Hitam Manis">
                    </div>
                    <div class="carousel-item">
                        <img src="/uploads/umkm1_3.jpeg" class="d-block w-50 card-img-top" alt="Bakso Hitam Manis">
                    </div>
                    <div class="carousel-item">
                        <img src="/uploads/umkm1_4.jpeg" class="d-block w-50 card-img-top" alt="Bakso Hitam Manis">
                    </div>
                    <div class="carousel-item">
                        <img src="/uploads/umkm1_5.jpeg" class="d-block w-50 card-img-top" alt="Bakso Hitam Manis">
                    </div>
                    <div class="carousel-item">
                        <img src="/uploads/umkm1_6.jpeg" class="d-block w-50 card-img-top" alt="Bakso Hitam Manis">
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#umkm1" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#umkm1" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
            <div class="text">
                <table class="text-start">
                    <tr>
                        <td>Nama Usaha</td>
                        <td>"HITAM MANIS"</td>
                    </tr>
                    <tr>
                        <td>Nama Pemilik</td>
                        <td>Cicilia Winarni</td>
                    </tr>
                    <tr>
                        <td>Alamat</td>
                        <td>Sudimoro RT 03/RW 01, Kelurahan Kelor, Karangmojo, Gunung Kidul, Daerah Istimewa Yogyakarta</td>
                    </tr>
                    <tr>
                        <td>Nomor HP</td>
                        <td>0852-2835-3003</td>
                    </tr>
                    <tr>
                        <td>Jam Buka</td>
                        <td>08.00 s.d 18.00 WIB</td>
                    </tr>
                    <tr>
                        <td>Produksi</td>
                        <td>Bakso, soto ayam, soto sapi, soto babat, mie ayam</td>
                    </tr>
                    <tr>
                        <td>Harga</td>
                        <td>
                            Bakso: Rp14.000<br>
                            Soto + Bakso: Rp12.000<br>
                            Mie Ayam + Bakso: Rp12.000<br>
                            Soto: Rp10.000<br>
                            Mie Ayam: Rp10.000
                        </td>
                    </tr>
                </table>
            </div>
        </div>

        <hr>

        <div class="umkm-container">
            <h2 class="text-center">Peyek dan Teh Kelor Bu Agatha</h2>

            <div id="umkm2" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="/uploads/umkm2_1.gif" class="d-block w-50 card-img-top" alt="Peyek dan Teh Kelor Bu Agatha">
                    </div>
                    <div class="carousel-item">
                        <img src="/uploads/umkm2_2.jpeg" class="d-block w-50 card-img-top" alt="Peyek dan Teh Kelor Bu Agatha">
                    </div>
                    <div class="carousel-item">
                        <img src="/uploads/umkm2_3.jpeg" class="d-block w-50 card-img-top" alt="Peyek dan Teh Kelor Bu Agatha">
                    </div>
                    <div class="carousel-item">
                        <img src="/uploads/umkm2_4.jpeg" class="d-block w-50 card-img-top" alt="Peyek dan Teh Kelor Bu Agatha">
                    </div>
                    <div class="carousel-item">
                        <img src="/uploads/umkm2_5.jpeg" class="d-block w-50 card-img-top" alt="Peyek dan Teh Kelor Bu Agatha">
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#umkm2" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#umkm2" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
            <div class="text">
                <table class="text-start">
                    <tr>
                        <td>Nama Usaha</td>
                        <td>"Peyek dan Teh Kelor Bu Agatha"</td>
                    </tr>
                    <tr>
                        <td>Nama Pemilik</td>
                        <td>Agatha Hartilah</td>
                    </tr>
                    <tr>
                        <td>Alamat</td>
                        <td>Kelurahan Kelor, Karangmojo, Gunung Kidul, Daerah Istimewa Yogyakarta</td>
                    </tr>
                    <tr>
                        <td>Nomor HP</td>
                        <td>0812-1547-0510</td>
                    </tr>
                    <tr>
                        <td>Produksi</td>
                        <td>Seduh daun kelor, Canglor</td>
                    </tr>
                    <tr>
                        <td>Harga</td>
                        <td>
                            Teh Kelor : Rp20.000(isi 15) <br>
                            Peyek Kelor: Rp65.000(1 kg), Rp10.000(Kemasan Kecil)</td>
                    </tr>
                </table>
            </div>
        </div>

        <hr>

        <div class="umkm-container">
            <h2 class="text-center">Krip Krips Wulan</h2>

            <div id="umkm3" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-inner">

                    <div class="carousel-item active">
                        <img src="/uploads/umkm3_1.gif" class="d-block w-50 card-img-top" alt="Krips Krips Wulan">
                    </div>
                    <div class="carousel-item">
                        <img src="/uploads/umkm3_2.jpeg" class="d-block w-50 card-img-top" alt="Krips Krips Wulan">
                    </div>
                    <div class="carousel-item">
                        <img src="/uploads/umkm3_3.jpeg" class="d-block w-50 card-img-top" alt="Krips Krips Wulan">
                    </div>
                    <div class="carousel-item">
                        <img src="/uploads/umkm3_4.jpeg" class="d-block w-50 card-img-top" alt="Krips Krips Wulan">
                    </div>
                    <div class="carousel-item">
                        <img src="/uploads/umkm3_5.jpeg" class="d-block w-50 card-img-top" alt="Krips Krips Wulan">
                    </div>
                    <div class="carousel-item">
                        <img src="/uploads/umkm3_6.jpeg" class="d-block w-50 card-img-top" alt="Krips Krips Wulan">
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#umkm3" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#umkm3" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
            <div class="text">
                <table class="text-start">
                    <tr>
                        <td>Nama Usaha</td>
                        <td>"Krip Krips Wulan"</td>
                    </tr>
                    <tr>
                        <td>Nama Pemilik</td>
                        <td>Wulan</td>
                    </tr>
                    <tr>
                        <td>Alamat</td>
                        <td>Warung Sidomoro, Utara RS Panti Rahayu Kelor</td>
                    </tr>
                    <tr>
                        <td>Nomor HP</td>
                        <td>0813-2871-4234</td>
                    </tr>
                    <tr>
                        <td>Jam Buka</td>
                        <td>07.00 s.d 21.00 WIB</td>
                    </tr>
                    <tr>
                        <td>Produksi</td>
                        <td>Kripik pisang(tanduk dan kepok), kripik tales, kripik sukun, kacang bawang , mete, peyek teri dan peyek kacang, dll.</td>
                    </tr>
                    <tr>
                        <td>Harga</td>
                        <td>Kripik pisang 250 gr: Rp20.000<br>
                            Kripik sukun 250 gr: Rp20.000<br>
                            Kripik tales 250 gr: Rp20.000<br>
                            Krecek telo 250 gr: Rp20.000<br>
                            Kacang bawang 500 gr: Rp40.000<br>
                            Mete 500 gr: Rp90.000<br>
                            Aneka peyek 250 gr: Rp20.000</td>
                    </tr>
                    <tr>
                        <td>Sertifikasi</td>
                        <td>1. Halal No.ID 34110001307951222<br>
                            2. PIRT No. 214 3403 01 0900_ 26</td>
                    </tr>
                    <tr>
                        <td>Media Sosial</td>
                        <td>Facebook : Krip-krips Wulan<br>
                            Instagram: @kripkripswulan<br>
                            Tiktok : @kripkripswulan</td>
                    </tr>
                </table>
            </div>
        </div>

        <hr>

        <div class="umkm-container">
            <h2 class="text-center">Harwin Snack</h2>

            <div id="umkm4" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="/uploads/umkm4_1.gif" class="d-block w-50 card-img-top" alt="Harwin Snack">
                    </div>
                    <div class="carousel-item">
                        <img src="/uploads/umkm4_2.jpeg" class="d-block w-50 card-img-top" alt="Harwin Snack">
                    </div>
                    <div class="carousel-item">
                        <img src="/uploads/umkm4_3.jpeg" class="d-block w-50 card-img-top" alt="Harwin Snack">
                    </div>
                    <div class="carousel-item">
                        <img src="/uploads/umkm4_4.jpeg" class="d-block w-50 card-img-top" alt="Harwin Snack">
                    </div>
                    <div class="carousel-item">
                        <img src="/uploads/umkm4_5.jpeg" class="d-block w-50 card-img-top" alt="Harwin Snack">
                    </div>
                    <div class="carousel-item">
                        <img src="/uploads/umkm4_6.jpeg" class="d-block w-50 card-img-top" alt="Harwin Snack">
                    </div>
                    <div class="carousel-item">
                        <img src="/uploads/umkm4_7.jpeg" class="d-block w-50 card-img-top" alt="Harwin Snack">
                    </div>
                    <div class="carousel-item">
                        <img src="/uploads/umkm4_8.jpeg" class="d-block w-50 card-img-top" alt="Harwin Snack">
                    </div>
                    <div class="carousel-item">
                        <img src="/uploads/umkm4_9.jpeg" class="d-block w-50 card-img-top" alt="Harwin Snack">
                    </div>
                    <div class="carousel-item">
                        <img src="/uploads/umkm4_10.jpeg" class="d-block w-50 card-img-top" alt="Harwin Snack">
                    </div>
                    <div class="carousel-item">
                        <img src="/uploads/umkm4_11.jpeg" class="d-block w-50 card-img-top" alt="Harwin Snack">
                    </div>
                    <div class="carousel-item">
                        <img src="/uploads/umkm4_12.jpeg" class="d-block w-50 card-img-top" alt="Harwin Snack">
                    </div>
                    <div class="carousel-item">
                        <img src="/uploads/umkm4_13.jpeg" class="d-block w-50 card-img-top" alt="Harwin Snack">
                    </div>
                    <div class="carousel-item">
                        <img src="/uploads/umkm4_14.jpeg" class="d-block w-50 card-img-top" alt="Harwin Snack">
                    </div>
                    <div class="carousel-item">
                        <img src="/uploads/umkm4_15.jpeg" class="d-block w-50 card-img-top" alt="Harwin Snack">
                    </div>
                    <div class="carousel-item">
                        <img src="/uploads/umkm4_16.jpeg" class="d-block w-50 card-img-top" alt="Harwin Snack">
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#umkm4" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#umkm4" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
            <div class="text">
                <table class="text-start">
                    <tr>
                        <td>Nama Usaha</td>
                        <td>"Harwin Snack"</td>
                    </tr>
                    <tr>
                        <td>Nama Pemilik</td>
                        <td>Dominicus Suharyono</td>
                    </tr>
                    <tr>
                        <td>Alamat</td>
                        <td>Sudimoro RT 03/RW 01, Kelurahan Kelor, Karangmojo, Gunung Kidul, Daerah Istimewa Yogyakarta</td>
                    </tr>
                    <tr>
                        <td>Nomor HP</td>
                        <td>0857-2751-3527<br>
                            0813-2875-8587</td>
                    </tr>
                    <tr>
                        <td>Produksi</td>
                        <td>Aneka Snack</td>
                    </tr>
                    <tr>
                        <td>Harga</td>
                        <td>Rp1.500-Rp3.000</td>
                    </tr>
                </table>
            </div>
        </div>
    </div>
    </div>


    <footer class="text-white text-center py-3">
        <p>&copy; 2024 Dusun Sudimoro. All rights reserved.</p>
    </footer>
    <!-- Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>