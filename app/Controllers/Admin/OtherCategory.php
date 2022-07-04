<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;

use App\Models\OtherCategoryModel;

class OtherCategory extends BaseController
{
    protected $otherCategoryModel;
    public function __construct()
    {

        $this->otherCategoryModel = new OtherCategoryModel();
        $this->session = session();
    }

    public function index()
    {
        $other = $this->otherCategoryModel->findAll();

        $data = [
            'active_nav' => 'other',
            'other' => $other,
        ];

        return view('admin/other_category', $data);
    }

    public function setActive($id)
    {
        $other = $this->otherCategoryModel->find($id);

        $data = [
            'status' => ($other['status'] == 1) ? 0 : 1
        ];

        $this->otherCategoryModel->update($id, $data);

        $status = $other['status'] == 1 ? 'tidak aktif.' : 'aktif.';
        $this->session->setFlashdata('message_set_active', $other['name'] . ' diubah menjadi ' . $status);
        return redirect()->to(base_url() . '/admin/other');
    }

    public function add()
    {
        $data = [
            'active_nav' => 'other',
        ];

        return view('admin/add_other_category', $data);
    }

    public function save()
    {
        $save = $this->otherCategoryModel->save([
            'name' => $this->request->getVar('other_category'),
            'status' => 1
        ]);
        if ($save) {
            $this->session->setFlashdata('message', 'Data berhasil ditambahkan.');
            return redirect()->to(base_url() . '/admin/other');
        }
    }

    public function edit($id)
    {
        $otherCategory = $this->otherCategoryModel->find($id);

        $data = [
            'active_nav' => 'catotheregory',
            'other' => $otherCategory,
        ];

        return view('admin/add_other_category', $data);
    }

    public function update($id)
    {
        $save = $this->otherCategoryModel->update($id, [
            'name' => $this->request->getVar('other_category'),
        ]);
        if ($save) {
            $this->session->setFlashdata('message', 'Data berhasil diupdate.');
            return redirect()->to(base_url() . '/admin/other');
        }
    }

    public function delete($id)
    {
        $delete = $this->otherCategoryModel->delete($id);
        if ($delete) {
            $this->session->setFlashdata('message', 'Data berhasil dihapus.');
            return redirect()->to(base_url() . '/admin/other');
        }
    }
}
