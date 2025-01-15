<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="<?= base_url('assets/style.css'); ?>">
    <link rel="icon" href="logo_2.ico" type="image/gif">
    <title>Dusun Sudimoro</title>
    <style>
        body {
            font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;
            background-image: url('<?= base_url('assets/bg_umkm.jpeg'); ?>');
            /* Pastikan path sesuai dengan lokasi file */
            background-size: cover;
            background-repeat: no-repeat;
            background-attachment: fixed;
        }
         .cardbg {
            background: rgba(255, 255, 255, 0.5);

        }
    </style>
</head>

<body>
    <?= $this->include('layout/navbar'); ?>

    <div class="hero text-center">
        <div class="container p-5">
            <h1>Selamat Datang di Dusun Sudimoro</h1>
            <p>Menjelajahi keindahan dan budaya lokal kami.</p>
        </div>
    </div>
    <div class="container my-5">
        <div class="row">
            <div class="col-md-4">
                <div class="card cardbg">
                    <a href="#"><img src="<?= base_url('assets/image1.jpg'); ?>" class="card-img-top" style="height: 350px;" alt="Image 1"></a>
                    <div class="card-body">
                        <h5 class="card-title">Tentang Dusun Sudimoro</h5>
                        <p class="card-text">Dusun Sudimoro adalah sebuah tempat yang menakjubkan dengan budaya yang kaya.</p>
                        <a href="#" class="btn btn-primary">Baca Selengkapnya</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card cardbg">
                   <a href="/berita"><img src="<?= base_url('assets/image2.jpeg'); ?>" class="card-img-top" style="height: 350px;" alt="Image 2"></a> 
                    <div class="card-body">
                        <h5 class="card-title">Berita dan Acara</h5>
                        <p class="card-text">Berita terbaru di Dusun Sudimoro.</p>
                        <a href="/berita" class="btn btn-primary">Baca Selengkapnya</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card cardbg">
                    <a href="/galeri"><img src="<?= base_url('assets/image3.jpeg'); ?>" class="card-img-top" style="height: 350px;" alt="Image 3"></a>
                    <div class="card-body">
                        <h5 class="card-title">Galeri Foto</h5>
                        <p class="card-text">Lihat koleksi foto-foto terbaik dari Dusun Sudimoro.</p>
                        <a href="/galeri" class="btn btn-primary">Baca Selengkapnya</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <footer class="text-white text-center py-3">
        <p>&copy; 2024 Dusun Sudimoro. All rights reserved.</p>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const images = document.querySelectorAll('.card-img-top');

            images.forEach(img => {
                img.addEventListener('touchstart', function() {
                    this.style.transform = 'scale(1.1)';
                });

                img.addEventListener('touchend', function() {
                    this.style.transform = 'scale(1)';
                });
            });
        });
    </script>
</body>

</html>