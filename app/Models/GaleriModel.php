<?php

namespace App\Models;

use CodeIgniter\Model;

class GaleriModel extends Model
{
    protected $table = 'galeri';
    protected $primaryKey = 'id';
    protected $allowedFields = ['judul', 'gambar1', 'gambar2', 'gambar3', 'deskripsi', 'kategori'];

    protected $useTimestamps = true;
}
