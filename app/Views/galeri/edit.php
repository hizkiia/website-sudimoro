<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="<?= base_url('assets/style.css'); ?>">
    <link rel="icon" href="logo_2.ico" type="image/gif">

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <title>Edit Galeri</title>
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
        <h1>Edit Galeri</h1>
        <form action="<?= base_url('/galeri/update/' . $galeri['id']); ?>" method="post" enctype="multipart/form-data">
            <div class="mb-3">
                <label for="judul" class="form-label">Judul</label>
                <input type="text" class="form-control" id="judul" name="judul" value="<?= $galeri['judul']; ?>" required>
            </div>
            <div class="mb-3">
                <label for="deskripsi" class="form-label">Deskripsi</label>
                <textarea class="form-control" id="deskripsi" name="deskripsi" required><?= $galeri['deskripsi']; ?></textarea>
            </div>
            <div class="mb-3">
                <label for="kategori" class="form-label">Kategori</label>
                <select class="form-select" id="kategori" name="kategori" required>
                    <option value="kesenian" <?= $galeri['kategori'] == 'kesenian' ? 'selected' : ''; ?>>Kesenian</option>
                    <option value="makanan" <?= $galeri['kategori'] == 'makanan' ? 'selected' : ''; ?>>Makanan</option>
                    <option value="adat" <?= $galeri['kategori'] == 'adat' ? 'selected' : ''; ?>>Adat</option>
                    <option value="tempat" <?= $galeri['kategori'] == 'tempat' ? 'selected' : ''; ?>>Tempat</option>
                </select>
            </div>
            <div class="mb-3">
                <label for="gambar1" class="form-label">Gambar 1</label>
                <input type="file" class="form-control" id="gambar1" name="gambar1">
                <img src="<?= base_url('uploads/' . $galeri['gambar1']); ?>" class="img-thumbnail mt-2" width="150">
            </div>
            <div class="mb-3">
                <label for="gambar2" class="form-label">Gambar 2 (Optional)</label>
                <input type="file" class="form-control" id="gambar2" name="gambar2">
                <?php if ($galeri['gambar2']) : ?>
                    <img src="<?= base_url('uploads/' . $galeri['gambar2']); ?>" class="img-thumbnail mt-2" width="150">
                <?php endif; ?>
            </div>
            <div class="mb-3">
                <label for="gambar3" class="form-label">Gambar 3 (Optional)</label>
                <input type="file" class="form-control" id="gambar3" name="gambar3">
                <?php if ($galeri['gambar3']) : ?>
                    <img src="<?= base_url('uploads/' . $galeri['gambar3']); ?>" class="img-thumbnail mt-2" width="150">
                <?php endif; ?>
            </div>
            <div class="mb-3">
                <label for="gambar4" class="form-label">Gambar 4 (Optional)</label>
                <input type="file" class="form-control" id="gambar4" name="gambar4">
                <?php if ($galeri['gambar4']) : ?>
                    <img src="<?= base_url('uploads/' . $galeri['gambar4']); ?>" class="img-thumbnail mt-2" width="150">
                <?php endif; ?>
            </div>
            <div class="mb-3">
                <label for="gambar5" class="form-label">Gambar 5 (Optional)</label>
                <input type="file" class="form-control" id="gambar5" name="gambar5">
                <?php if ($galeri['gambar5']) : ?>
                    <img src="<?= base_url('uploads/' . $galeri['gambar5']); ?>" class="img-thumbnail mt-2" width="150">
                <?php endif; ?>
            </div>
            <button type="submit" class="btn btn-primary">Update</button>
        </form>
    </div>
</body>

</html>