<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="icon" href="logo_2.ico" type="image/gif">
    <link rel="stylesheet" type="text/css" href="<?= base_url('assets/style.css'); ?>">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.11.3/css/lightbox.min.css" rel="stylesheet">
    <title>Galeri Dusun Sudimoro</title>
    <style>
        body {
            font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;
            background-image: url('<?= base_url('assets/bg_umkm.jpeg'); ?>');
            background-size: cover;
            background-repeat: no-repeat;
            background-attachment: fixed;
        }

        .card-img-top {
            width: 100%;
            height: 200px;
            object-fit: contain;
        }

        .section-title {
            margin-top: 2rem;
        }

        .cardbg {
            background: rgba(255, 255, 255, 0.5);
        }

        .card-text {
            text-align: justify;
        }
    </style>
</head>

<body>
    <?= $this->include('layout/navbar'); ?>
    <div class="container mt-5 text-center">
        <h1>Galeri Dusun Sudimoro</h1>
        <?php if (session()->get('isLoggedIn')) : ?>
            <a href="<?= base_url('/galeri/create'); ?>" class="btn btn-success mb-3">Tambah Galeri</a>
        <?php endif; ?>

        <?php
        $categories = [
            'kesenian_dan_olahraga' => 'Kesenian dan Olahraga',
            'makanan' => 'Makanan',
            'adat' => 'Adat',
            'spots' => 'Spots'
        ];
        foreach ($categories as $category => $title) :
        ?>
            <hr>
            <h2 class="section-title text-center"><?= $title; ?></h2>

            <div class="row">
                <?php foreach ($$category as $item) : ?>
                    <div class="col-md-4 mb-4">
                        <div class="card cardbg">
                            <div class="card-body">
                                <h5 class="card-title"><?= $item['judul']; ?></h5>
                                <p class="card-text"><?= $item['deskripsi']; ?></p>
                                <div id="carousel-<?= $item['id']; ?>" class="carousel slide" data-bs-ride="carousel">
                                    <div class="carousel-inner">
                                        <?php for ($i = 1; $i <= 5; $i++) : ?>
                                            <?php if (!empty($item['gambar' . $i])) : ?>
                                                <div class="carousel-item <?= $i == 1 ? 'active' : ''; ?>">
                                                    <a href="<?= base_url('uploads/' . $item['gambar' . $i]); ?>" data-lightbox="image-<?= $item['id']; ?>" data-title="<?= $item['judul']; ?>">
                                                        <img src="<?= base_url('uploads/' . $item['gambar' . $i]); ?>" class="d-block w-100 card-img-top" alt="...">
                                                    </a>
                                                </div>
                                            <?php endif; ?>
                                        <?php endfor; ?>
                                    </div>
                                    <button class="carousel-control-prev" type="button" data-bs-target="#carousel-<?= $item['id']; ?>" data-bs-slide="prev">
                                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                        <span class="visually-hidden">Previous</span>
                                    </button>
                                    <button class="carousel-control-next" type="button" data-bs-target="#carousel-<?= $item['id']; ?>" data-bs-slide="next">
                                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                        <span class="visually-hidden">Next</span>
                                    </button>
                                </div>
                                <?php if (session()->get('isLoggedIn')) : ?>
                                    <a href="<?= base_url('/galeri/edit/' . $item['id']); ?>" class="btn btn-warning mt-2">Edit</a>
                                    <form action="<?= base_url('/galeri/delete/' . $item['id']); ?>" method="post" class="d-inline">
                                        <button type="submit" class="btn btn-danger mt-2">Hapus</button>
                                    </form>
                                <?php endif; ?>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        <?php endforeach; ?>
    </div>
       <footer class="text-white text-center py-3">
        <p>&copy; 2024 Dusun Sudimoro. All rights reserved.</p>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.11.3/js/lightbox.min.js"></script>
</body>

</html>
