<?php

namespace App\Controllers;

use App\Models\OtherCategoryModel;
use App\Models\CategoryModel;
use App\Models\DataPendukungModel;
use App\Models\DetailKategoriModel;
use App\Models\DetailOlahanLainnyaModel;
use App\Models\DetailSupplierModel;
use App\Models\SupplierModel;

class Supplier extends BaseController
{
    public function __construct()
    {
        $this->session = session();
        $this->categoryModel = new CategoryModel();
        $this->otherCategoryModel = new OtherCategoryModel();
        $this->supplierModel = new SupplierModel();
        $this->detailSupplierModel = new DetailSupplierModel();
        $this->detailKategoriModel = new DetailKategoriModel();
        $this->detailOlahanLainnyaModel = new DetailOlahanLainnyaModel();
        $this->dataPendukungModel = new DataPendukungModel();

        $curl = curl_init();

        curl_setopt_array($curl, array(
            CURLOPT_URL => "http://dev.farizdotid.com/api/daerahindonesia/provinsi",
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_TIMEOUT => 30,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => "GET",
            CURLOPT_HTTPHEADER => array(
                "cache-control: no-cache"
            ),
        ));

        $response = curl_exec($curl);
        // $err = curl_error($curl);

        $provinsi = json_decode($response, true);

        $this->provinsi = $provinsi['provinsi'];
    }
    public function index()
    {
        $other = $this->otherCategoryModel->where('status', 1)->findAll();

        $category = $this->categoryModel->where('status', 1)->findAll();

        $data = [
            'active_nav' => 'add',
            'step' => 'one',
            'provinsi' => $this->provinsi,
            'other' => $other,
            'category' => $category,
        ];
        return view('supplier/add_supplier', $data);
    }


    public function saveSupplier()
    {
        $data = $this->supplierModel->findAll();
        $getRow = count($data) + 1;
        $counter = str_pad($getRow, 4, 0, STR_PAD_LEFT); // Updated line to include '0'
        $id = "SUP" . "-";
        $year = date('y');
        $month = date("m");
        $day = date("d");
        $supplierId = $id . $year . $month . $day . $counter;
        echo $supplierId;

        $dataSupplier = [
            'id_supplier' => $supplierId,
            'status' => 0,
        ];

        d($dataSupplier);

        $detailSupplier = [
            'id_supplier' => $supplierId,
            'nama' => $this->request->getVar('nama'),
            'email' => $this->request->getVar('email'),
            'no_telp' => $this->request->getVar('no_telp'),
            'perusahaan' => $this->request->getVar('perusahaan'),
            'website_perusahaan' => $this->request->getVar('website_perusahaan'),
            'alamat' => $this->request->getVar('alamat'),
            'provinsi' => $this->request->getVar('provinsi'),
            'kota' => $this->request->getVar('kota'),
            'kode_pos' => $this->request->getVar('kode_pos'),
            'bidang_usaha' => $this->request->getVar('bidang_usaha'),
        ];

        d($detailSupplier);

        $kategori = $this->request->getVar('kategori');

        $dataKategori = [];
        foreach ($kategori as $o => $v) {
            for ($i = 0; $i < count($kategori); $i++) {
                $dataKategori[$i] = [
                    'id_supplier' => $supplierId,
                    'id_kategori' => (int) $kategori[$i],
                ];
            }
        }

        d($dataKategori);

        $olahanLainnya = $this->request->getVar('olahan_lainnya');

        $dataOlahanLainnya = [];
        foreach ($olahanLainnya as $o => $v) {
            for ($i = 0; $i < count($olahanLainnya); $i++) {
                $dataOlahanLainnya[$i] = [
                    'id_supplier' => $supplierId,
                    'id_olahan_lainnya' => (int) $olahanLainnya[$i],
                ];
            }
        }

        d($dataOlahanLainnya);


        $identitasProduk = [
            'nama_produk' => $this->request->getVar('nama_produk'),
            'jenis_produk' => $this->request->getVar('jenis_produk'),
            'kualitas' => $this->request->getVar('kualitas'),
            'harga' => $this->request->getVar('harga'),
            'kuantitas' => $this->request->getVar('kuantitas'),
            'termin' => $this->request->getVar('termin'),
        ];

        d($identitasProduk);


        $this->supplierModel->save($dataSupplier);
        $this->detailSupplierModel->save($detailSupplier);
        for ($i = 0; $i < count($dataKategori); $i++) {
            $this->detailKategoriModel->save($dataKategori[$i]);
        }
        for ($i = 0; $i < count($dataOlahanLainnya); $i++) {
            $this->detailOlahanLainnyaModel->save($dataOlahanLainnya[$i]);
        }


        $document = $this->request->getFile('document');
        $document->move('document');
        $namaDocument = $document->getName();
        $dataDocument = [
            'id_supplier' => $supplierId,
            'document' => $namaDocument,
        ];
        $this->dataPendukungModel->save($dataDocument);

        return redirect()->to(base_url('supplier/list'));
    }

    public function listSupplier()
    {
        $data = [
            'active_nav' => 'list'
        ];
        return view('supplier/list_supplier', $data);
    }

    // public function addSupplierStepOne()
    // {
    //     $data = [
    //         'active_nav' => 'add',
    //         'step' => 'one'
    //     ];
    //     return view('supplier/add_supplier', $data);
    // }

    // public function addSupplierStepTwo()
    // {


    //     $data = [
    //         'active_nav' => 'add',
    //         'step' => 'two',
    //         'provinsi' => $this->provinsi,
    //     ];
    //     return view('supplier/add_supplier_step_two', $data);
    // }

    // public function addSupplierStepThree()
    // {
    //     $other = $this->otherCategoryModel->where('status', 1)->findAll();

    //     $category = $this->categoryModel->where('status', 1)->findAll();

    //     $data = [
    //         'active_nav' => 'add',
    //         'step' => 'three',
    //         'other' => $other,
    //         'category' => $category,
    //     ];
    //     return view('supplier/add_supplier_step_three', $data);
    // }

    // public function addSupplierStepFor()
    // {
    //     $data = [
    //         'active_nav' => 'add',
    //         'step' => 'for'
    //     ];
    //     return view('supplier/add_supplier_step_for', $data);
    // }

    // public function addSupplierStepFive()
    // {
    //     $data = [
    //         'active_nav' => 'add',
    //         'step' => 'five'
    //     ];
    //     return view('supplier/add_supplier_step_five', $data);
    // }

    // public function addSupplierFinish()
    // {
    //     $data = [
    //         'active_nav' => 'add',
    //         'step' => 'five'
    //     ];
    //     return view('supplier/add_supplier_finish', $data);
    // }

    // public function saveSupplierStepOne()
    // {
    //     $session_data = [
    //         'nama' => $this->request->getVar('nama'),
    //         'email' => $this->request->getVar('email'),
    //         'no_telp' => $this->request->getVar('no_telp'),
    //         'nama_perusahaan' => $this->request->getVar('nama_perusahaan'),
    //         'website_perusahaan' => $this->request->getVar('website_perusahaan'),
    //     ];

    //     $this->session->set($session_data);
    //     return redirect()->to(base_url('supplier/add/step_two'));
    // }

    // public function saveSupplierStepTwo()
    // {
    //     $session_data = [
    //         'alamat' => $this->request->getVar('alamat'),
    //         'provinsi' => $this->request->getVar('provinsi'),
    //         'kota' => $this->request->getVar('kota'),
    //         'kode_pos' => $this->request->getVar('kode_pos'),
    //     ];

    //     $this->session->set($session_data);
    //     return redirect()->to(base_url('supplier/add/step_three'));
    // }

    // public function saveSupplierStepThree()
    // {
    //     $session_data = [
    //         'bidang_usaha' => $this->request->getVar('bidang_usaha'),
    //         'kategori' => $this->request->getVar('kategori'),
    //         'olahan_lainnya' => $this->request->getVar('olahan_lainnya'),
    //     ];

    //     $this->session->set($session_data);
    //     return redirect()->to(base_url('supplier/add/step_for'));
    // }

    // public function saveSupplierStepFor()
    // {
    //     $session_data = [
    //         'nama_produk' => $this->request->getVar('nama_produk'),
    //         'jenis_produk' => $this->request->getVar('jenis_produk'),
    //         'kualitas' => $this->request->getVar('kualitas'),
    //         'harga' => $this->request->getVar('harga'),
    //         'kuantitas' => $this->request->getVar('kuantitas'),
    //         'termin' => $this->request->getVar('termin'),
    //     ];

    //     $this->session->set($session_data);
    //     return redirect()->to(base_url('supplier/add/step_five'));
    // }

    // public function saveSupplierStepFive()
    // {
    //     // dd($this->request->getFile('document'));
    //     $session_data = [
    //         'document' => $this->request->getFile('document'),
    //     ];

    //     $this->session->set($session_data);
    //     // return redirect()->to(base_url('supplier/add/finish'));
    // }

}
