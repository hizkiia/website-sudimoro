<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="<?= base_url('assets/style.css'); ?>">
    <link rel="icon" href="logo_2.ico" type="image/gif">

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <title>Tambah Galeri</title>
    <style>
        body {
            font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;
            background-image: url('<?= base_url('assets/bg_umkm.jpeg'); ?>');
            /* Pastikan path sesuai dengan lokasi file */
            background-size: cover;
            background-repeat: no-repeat;
            background-attachment: fixed;
        }
    </style>
</head>

<body>
    <?= $this->include('layout/navbar'); ?>

    <div class="container mt-5">
        <h1>Tambah Galeri</h1>
        <form action="<?= base_url('/galeri/store'); ?>" method="post" enctype="multipart/form-data">
            <div class="mb-3">
                <label for="judul" class="form-label">Judul</label>
                <input type="text" class="form-control" id="judul" name="judul" required>
            </div>
            <div class="mb-3">
                <label for="deskripsi" class="form-label">Deskripsi</label>
                <textarea class="form-control" id="deskripsi" name="deskripsi" required></textarea>
            </div>
            <div class="mb-3">
                <label for="kategori" class="form-label">Kategori</label>
                <select class="form-select" id="kategori" name="kategori" required>
                    <option value="kesenian">Kesenian dan Olahraga</option>
                    <option value="makanan">Makanan</option>
                    <option value="adat">Adat</option>
                    <option value="tempat">Tempat</option>
                </select>
            </div>
            <div class="mb-3">
                <label for="gambar1" class="form-label">Gambar 1</label>
                <input type="file" class="form-control" id="gambar1" name="gambar1" required>
            </div>
            <div class="mb-3">
                <label for="gambar2" class="form-label">Gambar 2 (Optional)</label>
                <input type="file" class="form-control" id="gambar2" name="gambar2">
            </div>
            <div class="mb-3">
                <label for="gambar3" class="form-label">Gambar 3 (Optional)</label>
                <input type="file" class="form-control" id="gambar3" name="gambar3">
            </div>
            <div class="mb-3">
                <label for="gambar4" class="form-label">Gambar 4 (Optional)</label>
                <input type="file" class="form-control" id="gambar4" name="gambar4">
            </div>
            <div class="mb-3">
                <label for="gambar5" class="form-label">Gambar 5 (Optional)</label>
                <input type="file" class="form-control" id="gambar5" name="gambar5">
            </div>
            <button type="submit" class="btn btn-primary">Simpan</button>
        </form>
    </div>
</body>

</html>