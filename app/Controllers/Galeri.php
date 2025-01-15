<?php

namespace App\Controllers;

use App\Models\GaleriModel;
use CodeIgniter\Controller;

class Galeri extends Controller
{
    protected $galeriModel;

    public function __construct()
    {
        $this->galeriModel = new GaleriModel();
    }

    public function index()
    {
        $data['kesenian_dan_olahraga'] = $this->galeriModel->where('kategori', 'kesenian')->findAll();
        $data['makanan'] = $this->galeriModel->where('kategori', 'makanan')->findAll();
        $data['adat'] = $this->galeriModel->where('kategori', 'adat')->findAll();
        $data['spots'] = $this->galeriModel->where('kategori', 'tempat')->findAll();
        return view('galeri/index', $data);
    }

    public function create()
    {
        return view('galeri/create');
    }

    public function store()
    {
        $gambar1 = $this->request->getFile('gambar1');
        $gambar2 = $this->request->getFile('gambar2');
        $gambar3 = $this->request->getFile('gambar3');
        $gambar4 = $this->request->getFile('gambar4');
        $gambar5 = $this->request->getFile('gambar5');

        $data = [
            'judul' => $this->request->getVar('judul'),
            'deskripsi' => $this->request->getVar('deskripsi'),
            'kategori' => $this->request->getVar('kategori'),
        ];

        if ($gambar1->isValid() && !$gambar1->hasMoved()) {
            $data['gambar1'] = $gambar1->getRandomName();
            $gambar1->move('uploads', $data['gambar1']);
        }

        if ($gambar2 && $gambar2->isValid() && !$gambar2->hasMoved()) {
            $data['gambar2'] = $gambar2->getRandomName();
            $gambar2->move('uploads', $data['gambar2']);
        }

        if ($gambar3 && $gambar3->isValid() && !$gambar3->hasMoved()) {
            $data['gambar3'] = $gambar3->getRandomName();
            $gambar3->move('uploads', $data['gambar3']);
        }

        if ($gambar4 && $gambar4->isValid() && !$gambar4->hasMoved()) {
            $data['gambar4'] = $gambar4->getRandomName();
            $gambar4->move('uploads', $data['gambar4']);
        }

        if ($gambar5 && $gambar5->isValid() && !$gambar5->hasMoved()) {
            $data['gambar5'] = $gambar5->getRandomName();
            $gambar5->move('uploads', $data['gambar5']);
        }

        $this->galeriModel->save($data);
        return redirect()->to('/galeri');
    }

    public function edit($id)
    {
        $data['galeri'] = $this->galeriModel->find($id);
        return view('galeri/edit', $data);
    }

    public function update($id)
    {
        $gambar1 = $this->request->getFile('gambar1');
        $gambar2 = $this->request->getFile('gambar2');
        $gambar3 = $this->request->getFile('gambar3');
        $gambar4 = $this->request->getFile('gambar4');
        $gambar5 = $this->request->getFile('gambar5');

        $data = [
            'judul' => $this->request->getVar('judul'),
            'deskripsi' => $this->request->getVar('deskripsi'),
            'kategori' => $this->request->getVar('kategori'),
        ];

        if ($gambar1->isValid() && !$gambar1->hasMoved()) {
            $data['gambar1'] = $gambar1->getRandomName();
            $gambar1->move('uploads', $data['gambar1']);
        }

        if ($gambar2 && $gambar2->isValid() && !$gambar2->hasMoved()) {
            $data['gambar2'] = $gambar2->getRandomName();
            $gambar2->move('uploads', $data['gambar2']);
        }

        if ($gambar3 && $gambar3->isValid() && !$gambar3->hasMoved()) {
            $data['gambar3'] = $gambar3->getRandomName();
            $gambar3->move('uploads', $data['gambar3']);
        }

        if ($gambar4 && $gambar4->isValid() && !$gambar4->hasMoved()) {
            $data['gambar4'] = $gambar4->getRandomName();
            $gambar4->move('uploads', $data['gambar4']);
        }

        if ($gambar5 && $gambar5->isValid() && !$gambar5->hasMoved()) {
            $data['gambar5'] = $gambar5->getRandomName();
            $gambar5->move('uploads', $data['gambar5']);
        }

        $this->galeriModel->update($id, $data);
        return redirect()->to('/galeri');
    }

    public function delete($id)
    {
        $this->galeriModel->delete($id);
        return redirect()->to('/galeri');
    }
}
