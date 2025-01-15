<?php

namespace App\Controllers;

use App\Models\BeritaModel;
use CodeIgniter\Controller;

class BeritaController extends Controller
{
    protected $beritaModel;

    public function __construct()
    {
        $this->beritaModel = new BeritaModel();
    }

    public function index()
    {
        $data['berita'] = $this->beritaModel->findAll();
        return view('berita/index', $data);
    }

    public function create()
    {
        return view('berita/create');
    }

    public function store()
    {
        $gambar = $this->request->getFile('gambar');
        $data = [
            'judul' => $this->request->getVar('judul'),
            'deskripsi' => $this->request->getVar('deskripsi'),
        ];

        if ($gambar->isValid() && !$gambar->hasMoved()) {
            $data['gambar'] = $gambar->getRandomName();
            $gambar->move('uploads', $data['gambar']);
        }

        $this->beritaModel->save($data);
        return redirect()->to('/berita');
    }

    public function edit($id)
    {
        $data['berita'] = $this->beritaModel->find($id);
        return view('berita/edit', $data);
    }

    public function update($id)
    {
        $gambar = $this->request->getFile('gambar');
        $data = [
            'judul' => $this->request->getVar('judul'),
            'deskripsi' => $this->request->getVar('deskripsi'),
        ];

        if ($gambar->isValid() && !$gambar->hasMoved()) {
            $data['gambar'] = $gambar->getRandomName();
            $gambar->move('uploads', $data['gambar']);
        }

        $this->beritaModel->update($id, $data);
        return redirect()->to('/berita');
    }

    public function delete($id)
    {
        $this->beritaModel->delete($id);
        return redirect()->to('/berita');
    }
}
