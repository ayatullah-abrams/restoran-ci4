<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;
use App\Models\Kategori_M;
use App\Models\Menu_M;

class Menu extends BaseController

{
    public function index()
    {
        $pager = \config\Services::pager();
        $model = new Menu_M();
        // $kategori = $model->findAll();

        $data = [
            'judul' => 'Data Menu',
            // 'kategori' => $kategori,
            'menu' => $model->paginate(2, 'page'),
            'pager' => $model->pager
        ];

        // echo view("template/header"); `Jika Memakai View header dan footernya bisa tidak di gunakan di controller`;
        // echo view("kategori/select", $data);
        // echo view("template/footer");
        // Sederhananya echo bisa di ganti dengan return :
        return view("menu/select", $data);
    }

    public function read()
    {
        $pager = \config\Services::pager();
        if (isset($_GET['idkategori'])) {
            $id = $_GET['idkategori'];

            $model = new Menu_M();
            $jumlah = $model->where('idkategori', $id)->findAll();
            $count = count($jumlah);

            $tampil = 3;
            $mulai = 0;

            if (isset($_GET['page'])) {
                $page = $_GET['page'];
                $mulai = ($tampil * $page) - $tampil;
            }

            $menu = $model->where('idkategori', $id)->findAll($tampil, $mulai);



            $data = [
                'judul' => 'Data Pencarian Menu',
                // 'kategori' => $kategori,
                'menu' => $menu,
                'pager' => $pager,
                'tampil' => $tampil,
                'total' => $count
            ];


            return view("menu/cari", $data);
        }
    }

    public function create()
    {
        $model = new Kategori_M();
        $kategori = $model->findAll();
        $data = [
            'kategori' => $kategori
        ];
        return view("menu/insert", $data);
    }

    public function insert()
    {

        $request = \Config\Services::request();
        $file = $request->getFile('gambar');
        $name = $file->getName();

        $data = [
            'idkategori' => $request->getPost('idkategori'),
            'menu' => $request->getPost('menu'),
            'gambar' => $name,
            'harga' => $request->getPost('harga')
        ];

        $model = new Menu_M();
        $model->insert($data);
        $file->move('./upload');

        return redirect()->to(base_url("/admin/menu"));

        // if ($model->insert($_POST) === false) {
        //     $error = $model->errors();
        //     //echo $error['kategori'];
        //     session()->setFlashdata('info', $error['kategori']);
        //     return redirect()->to(base_url("/admin/kategori/create"));
        // } else {

        //     return redirect()->to(base_url("/admin/kategori"));
        // }
    }

    public function find($id = null)
    {
        // echo view("template/header");
        // echo view("kategori/update");
        // echo view("template/footer");

        // echo "<h1>Update data</h1>";


        $model = new Menu_M();
        $menu = $model->find($id);

        $kategorimodel = new Kategori_M();
        $kategori = $kategorimodel->findAll();

        $data = [
            'judul' => 'Update Data',
            'menu' => $menu,
            'kategori' => $kategori
        ];

        return view("menu/update", $data);
    }

    public function update()
    {
        $id = $this->request->getPost('idmenu');
        $file = $this->request->getFile('gambar');
        $name = $file->getName();

        if (empty($name)) {
            $name =  $this->request->getPost('gambar');
        } else {
            //$file->move('./upload');
        }

        $data = [
            'idkategori' => $this->request->getPost('idkategori'),
            'menu' => $this->request->getPost('menu'),
            'gambar' => $name,
            'harga' => $this->request->getPost('harga'),
        ];

        $model = new Menu_M();
        $model->update($id, $data);

        return redirect()->to(base_url("/admin/menu"));
    }

    public function option()
    {
        $model = new Kategori_M();
        $kategori = $model->findAll();
        $data = [
            'kategori' => $kategori
        ];
        return view('template/option', $data);
    }

    public function delete($id = null)
    {
        $model = new Menu_M();
        $model->delete($id);

        return redirect()->to(base_url("/admin/menu"));
    }

    //--------------------------------------------------------------------

}
