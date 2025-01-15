<nav class="navbar navbar-expand-lg navbar-dark">
    <div class="container-fluid">
        <a class="navbar-brand" href="<?= base_url('/'); ?>">
            <img src="<?= base_url('assets/logo_2.png'); ?>" alt="Logo"  style="width:40px;">
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item">
                    <a class="nav-link" aria-current="page" href="<?= base_url('/'); ?>">Beranda</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?= base_url('/berita'); ?>">Berita</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?= base_url('/galeri'); ?>">Galeri</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?= base_url('/umkm'); ?>">UMKM</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?= base_url('/hubungi'); ?>">Hubungi Kami</a>
                </li>
                <?php if (session()->get('isLoggedIn')) : ?>
                    <li class="nav-item">
                        <a class="nav-link" href="<?= base_url('/logout'); ?>">Logout</a>
                    </li>
                <?php else : ?>
                    <li class="nav-item">
                        <a class="nav-link" href="<?= base_url('/login'); ?>">Login</a>
                    </li>
                <?php endif; ?>
            </ul>
        </div>
    </div>
</nav>