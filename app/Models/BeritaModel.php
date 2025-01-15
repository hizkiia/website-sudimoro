<?php

namespace App\Models;

use CodeIgniter\Model;

class BeritaModel extends Model
{
    protected $table = 'berita';
    protected $primaryKey = 'id';
    protected $allowedFields = ['judul', 'deskripsi', 'gambar', 'tanggal'];

    // Optional: Set useTimestamps to true if your table has created_at and updated_at fields
    protected $useTimestamps = true;
}
