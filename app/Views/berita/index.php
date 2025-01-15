<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="<?= base_url('assets/style.css'); ?>">
    <link rel="icon" href="logo_2.ico" type="image/gif">

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <title>Dusun Sudimoro - Berita</title>
    <style>
        body {
            font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;
            background-image: url('<?= base_url('assets/bg_umkm.jpeg'); ?>');
            /* Pastikan path sesuai dengan lokasi file */
            background-size: cover;
            background-repeat: no-repeat;
            background-attachment: fixed;
        }

        .news-card {
            display: flex;
            flex-direction: row;
            margin-bottom: 1.5rem;
            border: 1px solid #ddd;
            border-radius: 0.25rem;
            overflow: hidden;
        }

        .news-card img {
            width: 300px;
            object-fit: cover;
        }

        .news-card-body {
            padding: 1rem;
            display: flex;
            flex-direction: column;
            justify-content: space-between;
            flex: 1;
        }
         .cardbg {
            background: rgba(255, 255, 255, 0.5);

        }
        .card-text {
            text-align: justify;
        }

        @media (max-width: 768px) {
            .news-card {
                flex-direction: column;
            }

            .news-card img {
                width: 100%;
                height: auto;
            }
        }
    </style>
</head>

<body>
    <?= $this->include('layout/navbar'); ?>

    <div class="container my-5">
        <h1 class="text-center mb-4">Berita dan Acara</h1>
        <?php if (session()->get('isLoggedIn')) : ?>
            <div class="mb-4 text-center">
                <a href="<?= base_url('/berita/create'); ?>" class="btn btn-primary">Tambah Berita</a>
            </div>
        <?php endif; ?>
        <div>
            <?php if (empty($berita)) : ?>
                <p class="text-center">Tidak ada berita saat ini.</p>
            <?php else : ?>
                <?php foreach ($berita as $item) : ?>
                    <div class="news-card card cardbg">
                        <?php if (!empty($item['gambar'])) : ?>
                            <img src="<?= base_url('uploads/' . $item['gambar']); ?>" alt="">
                        <?php endif; ?>
                        <div class="news-card-body card-body">
                            <div>
                                <h5 class="card-title"><?= $item['judul']; ?></h5>
                                <p class="card-text"><?= $item['deskripsi']; ?></p>
                                <p class="text-muted">Diperbarui pada: <?= date('d M Y', strtotime($item['updated_at'])); ?></p>
                            </div>
                            <div>
                                <?php if (session()->get('isLoggedIn')) : ?>
                                    <a href="<?= base_url('/berita/edit/' . $item['id']); ?>" class="btn btn-warning">Edit</a>
                                    <a href="<?= base_url('/berita/delete/' . $item['id']); ?>" class="btn btn-danger" onclick="return confirm('Apakah Anda yakin ingin menghapus berita ini?');">Hapus</a>
                                <?php endif; ?>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            <?php endif; ?>
        </div>
    </div>

    <footer class="text-white text-center py-3">
        <p>&copy; 2024 Dusun Sudimoro. All rights reserved.</p>
    </footer>
</body>

</html>