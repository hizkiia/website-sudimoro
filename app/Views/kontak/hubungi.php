<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hubungi Kami - Dusun Sudimoro</title>
    <link rel="icon" href="logo_2.ico" type="image/gif">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="<?= base_url('assets/style.css'); ?>">

    <style>
        body {
            font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;
            background-image: url('<?= base_url('assets/bg_umkm.jpeg'); ?>');
            /* Pastikan path sesuai dengan lokasi file */
            background-size: cover;
            background-repeat: no-repeat;
            background-attachment: fixed;
        }

        .contact-info {
            background: rgba(255, 255, 255, 0.8);
            padding: 20px;
            border-radius: 10px;
        }

        .contact-info h2 {
            margin-bottom: 20px;
        }
    </style>
</head>

<body>

    <?= $this->include('layout/navbar'); ?>

    <div class="container my-5">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="contact-info">
                    <h2>Hubungi Kami</h2>
                    <p><strong>Alamat:</strong> Dusun Sudimoro, Kelor, Karangmojo, Gunung Kidul, Yogyakarta</p>
                    <p><strong>Email:</strong> info@sudimoro.my.id</p>
                   <p><strong>Instagram:</strong> <a href="https://www.instagram.com/unitkarangtarunasudimoro_?igsh=MTY3bzBtcnVhNG1wNw%3D%3D">Klik Disini</a></p>

                    <p><strong>Jam Operasional:</strong> Senin - Jumat, 08.00 - 17.00 WIB</p>
                </div>
            </div>
        </div>
    </div>
    <footer class="bg-dark text-white text-center py-3">
        <p>&copy; 2024 Dusun Sudimoro. All rights reserved.</p>
    </footer>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>