<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;

use App\Models\CategoryModel;

class Category extends BaseController
{
    protected $categoryModel;
    public function __construct()
    {

        $this->categoryModel = new CategoryModel();
        $this->session = session();
    }
    public function index()
    {
        $category = $this->categoryModel->findAll();

        $data = [
            'active_nav' => 'category',
            'category' => $category,
        ];

        return view('admin/category', $data);
    }

    public function setActive($id)
    {
        $category = $this->categoryModel->find($id);

        $data = [
            'status' => ($category['status'] == 1) ? 0 : 1
        ];

        $this->categoryModel->update($id, $data);

        $status = $category['status'] == 1 ? 'tidak aktif.' : 'aktif.';
        $this->session->setFlashdata('message_set_active', $category['name'] . ' diubah menjadi ' . $status);
        return redirect()->to(base_url() . '/admin/category');
    }

    public function add()
    {
        $data = [
            'active_nav' => 'category',
        ];

        return view('admin/add_category', $data);
    }

    public function save()
    {
        $save = $this->categoryModel->save([
            'name' => $this->request->getVar('category'),
            'status' => 1
        ]);
        if ($save) {
            $this->session->setFlashdata('message', 'Data berhasil ditambahkan.');
            return redirect()->to(base_url() . '/admin/category');
        }
    }

    public function edit($id)
    {
        $category = $this->categoryModel->find($id);

        $data = [
            'active_nav' => 'category',
            'category' => $category,
        ];

        return view('admin/add_category', $data);
    }

    public function update($id)
    {
        $save = $this->categoryModel->update($id, [
            'name' => $this->request->getVar('category'),
        ]);
        if ($save) {
            $this->session->setFlashdata('message', 'Data berhasil diupdate.');
            return redirect()->to(base_url() . '/admin/category');
        }
    }

    public function delete($id)
    {
        $delete = $this->categoryModel->delete($id);
        if ($delete) {
            $this->session->setFlashdata('message', 'Data berhasil dihapus.');
            return redirect()->to(base_url() . '/admin/category');
        }
    }
}
