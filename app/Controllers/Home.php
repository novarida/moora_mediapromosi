<?php

namespace App\Controllers;
use App\Models\model_datamedia;
use App\Models\model_datakriteria;
use App\Models\model_databobot;
use App\Models\model_normalisasi;
use App\Models\model_nilaioptimasi;
use App\Models\model_maxmin;
use App\Models\model_perankingan;
use App\Models\model_keputusan;
use App\Models\model_konversi;

class Home extends BaseController
{
    public function index()
    {
        $this->dashboard();
    }

    public function dashboard()
    {
        echo View('admin_header');
        echo View('admin_nav');
        echo View ('view_dashboard'); 
        echo View('admin_footer');
    }
    
    public function contact()
    {
        echo View('admin_header');
        echo View('admin_nav');
        echo View ('view_contact'); 
        echo View('admin_footer');
    }

    public function viewdatamedia()
    {
        $mb = new model_datamedia();
        $datamedia = $mb->tampildata();
        $data = array('dataMedia'=> $datamedia,);

        echo View('admin_header');
        echo View('admin_nav');
        echo View ('view_datamedia',$data); 
        echo View('admin_footer');
    }
    
    public function viewdatakriteria()
    {
        $mb = new model_datakriteria();
        $datakriteria = $mb->tampilkriteria();
        $data = array('dataKriteria'=> $datakriteria,);
        
        echo View('admin_header');
        echo View('admin_nav');
        echo View ('view_datakriteria',$data); 
        echo View('admin_footer');
    }

    public function viewdatabobot()
    {
        $mb = new model_databobot();
        $databobot = $mb->tampilbobot();
        $data = array('dataBobot'=> $databobot,);
        
        echo View('admin_header');
        echo View('admin_nav');
        echo View ('view_databobot',$data); 
        echo View('admin_footer');
    }

    public function viewdatakonversi()
    {
        $mb = new model_konversi();
        $dataalternatif = $mb->tampilkonversi();
        $data = array('dataAlternatif'=> $dataalternatif,);
        
        echo View('admin_header');
        echo View('admin_nav');
        echo View ('view_datakonversi',$data); 
        echo View('admin_footer');
    }

    public function viewnormalisasi()
    {
        $mb = new model_normalisasi();
        $datanormalisasi = $mb->hitungNormalisasi();
        $data = array('dataNormalisasi' => $datanormalisasi);

        echo View('admin_header');
        echo View('admin_nav');
        echo View('view_normalisasi', $data);
        echo View('admin_footer');
    }

    public function viewnilaioptimasi()
    {
        $mb = new model_nilaioptimasi();
        $dataoptimasi = $mb->tampiloptimasi();
        $data = array('dataOptimasi' => $dataoptimasi, );
        echo View('admin_header');
        echo View('admin_nav');
        echo View('view_nilaioptimasi', $data);
        echo View('admin_footer');
    }

    public function viewmaxmin()
    {
        $mb = new model_maxmin();
        $datamaxmin = $mb->tampilmaxmin();
        $data = array('dataMaxMin' => $datamaxmin);

        echo View('admin_header');
        echo View('admin_nav');
        echo View('view_maxmin', $data);
        echo View('admin_footer');
    }
    
    public function viewranking()
    {
        $mb = new model_perankingan();
        $dataperankingan = $mb->tampilranking();
        $data = array('dataPerankingan' => $dataperankingan);

        echo View('admin_header');
        echo View('admin_nav');
        echo View('view_perankingan', $data);
        echo View('admin_footer');
    }

    public function viewakhir()
    {
        $mb = new model_keputusan();
        $dataakhir = $mb->tampilakhir();
        $data = array('dataAkhir' => $dataakhir);

        echo View('admin_header');
        echo View('admin_nav');
        echo View('view_keputusan', $data);
        echo View('admin_footer');
    }

    public function formtambahmedia()
    {
        echo View('admin_header');
        echo View('admin_nav');
        echo View('tambah_datamedia');
        echo View('admin_footer');
    }

    public function tambahmedia()
    {
        helper(['form']); // Load the Form Helper
        $mediaModel = new model_datamedia();

        if ($this->request->getMethod() === 'post') {
            $validationRules = [
                'id_media' => 'required',
                'nama_media' => 'required',
                'jumlah' => 'required|numeric',
                'pj_media' => 'required',
            ];

            // Run the validation
            if ($this->validate($validationRules)) {
                $data = [
                    'id_media' => $this->request->getPost('id_media'),
                    'nama_media' => $this->request->getPost('nama_media'),
                    'jumlah' => $this->request->getPost('jumlah'),
                    'pj_media' => $this->request->getPost('pj_media'),
                ];

                $mediaModel->tambahmedia($data);
                return redirect()->to(base_url('Home/viewdatamedia'));
            } else {
                $data['validation'] = $this->validator;
            }
        }

        echo view("admin_header");
        echo view("admin_nav");
        echo view("tambah_datamedia", $data ?? []);
        echo view("admin_footer");
    }

    function editmedia($id)
    {
        $mediaModel = new model_datamedia();
        $data['media'] = $mediaModel->getMedia($id);

        if (!$data['media']) {
            return redirect()->to(base_url('Home/viewdatamedia'));
        }

        // Jika form disubmit
        if ($this->request->getMethod() === 'post') {
            $validationRules = [
                'id_media' => 'required',
                'nama_media' => 'required',
                'jumlah' => 'required|numeric',
                'pj_media' => 'required',
            ];

            // Run the validation
            if ($this->validate($validationRules)) {
                $updateData = [
                    'id_media' => $this->request->getPost('id_media'),
                    'nama_media' => $this->request->getPost('nama_media'),
                    'jumlah' => $this->request->getPost('jumlah'),
                    'pj_media' => $this->request->getPost('pj_media'),
                ];

                $mediaModel->updatemedia($id, $updateData);
                return redirect()->to(base_url('Home/viewdatamedia'));

            } else {
                $data['validation'] = $this->validator;
            }
        }

        echo view("admin_header");
        echo view("admin_nav");
        echo view("edit_datamedia", $data);
        echo view("admin_footer");
    }

    public function formeditmedia($id)
    {
        $mediaModel = new model_datamedia();
        $data['media'] = $mediaModel->getMedia($id);

        if (!$data['media']) {
            return redirect()->to(base_url('Home/viewdatamedia'));
        }
        echo view("admin_header");
        echo view("admin_nav");
        echo view("edit_datamedia", $data);
        echo view("admin_footer");
    }

    public function deletemedia($id)
    {
        $mediaModel = new model_datamedia();

        // Hapus media berdasarkan ID
        $mediaModel->deletemedia($id);

        // Redirect ke halaman tampil media
        return redirect()->to(base_url('Home/viewdatamedia'));
    }

    public function tambahkriteria()
    {
        helper(['form']); // Load the Form Helper
        $kriteriaModel = new model_datakriteria();

        if ($this->request->getMethod() === 'post') {
            $validationRules = [
                'id_kriteria' => 'required',
                'kode' => 'required',
                'nama_kriteria' => 'required',
                'nilai_kriteria' => 'required|numeric',
                'tipe' => 'required',
            ];

            // Run the validation
            if ($this->validate($validationRules)) {
                $data = [
                    'id_kriteria' => $this->request->getPost('id_kriteria'),
                    'kode' => $this->request->getPost('kode'),
                    'nama_kriteria' => $this->request->getPost('nama_kriteria'),
                    'nilai_kriteria' => $this->request->getPost('nilai_kriteria'),
                    'tipe' => $this->request->getPost('tipe'),
                ];

                $kriteriaModel->tambahkriteria($data);
                return redirect()->to(base_url('Home/viewdatakriteria'));
            } else {
                $data['validation'] = $this->validator;
            }
        }

        echo view("admin_header");
        echo view("admin_nav");
        echo view("tambah_datakriteria", $data ?? []);
        echo view("admin_footer");
    }

    function editkriteria($id)
    {
        $kriteriaModel = new model_datakriteria();
        $data['kriteria'] = $kriteriaModel->getKriteria($id);

        if (!$data['kriteria']) {
            return redirect()->to(base_url('Home/viewdatakriteria'));
        }

        // Jika form disubmit
        if ($this->request->getMethod() === 'post') {
            $validationRules = [
                'kode' => 'required',
                'nama_kriteria' => 'required',
                'nilai_kriteria' => 'required|numeric',
                'tipe' => 'required',
            ];

            // Run the validation
            if ($this->validate($validationRules)) {
                // Get validated data
                $updateData = [
                    'kode' => $this->request->getPost('kode'),
                    'nama_kriteria' => $this->request->getPost('nama_kriteria'),
                    'nilai_kriteria' => $this->request->getPost('nilai_kriteria'),
                    'tipe' => $this->request->getPost('tipe'),
                ];

                // Update data menggunakan model
                $kriteriaModel->updateKriteria($id, $updateData);

                // Set pesan sukses
                // $this->session->setFlashdata('success', 'Kriteria updated successfully.');

                // Redirect ke halaman tampil kriteria
                return redirect()->to(base_url('Home/viewdatakriteria'));
            } else {
                // Jika validasi gagal, kirim error ke view
                $data['validation'] = $this->validator;
            }
        }

        echo view("admin_header");
        echo view("admin_nav");
        echo view("edit_datakriteria", $data);
        echo view("admin_footer");
    }

    public function formeditkriteria($id)
    {
        $kriteriaModel = new model_datakriteria();
        

        $data['kriteria'] = $kriteriaModel->getKriteria($id);
        // $this->load->helper('form');
        if (!$data['kriteria']) {
            return redirect()->to(base_url('Home/viewdatakriteria'));
        }
        echo view("admin_header");
        echo view("admin_nav");
        
        echo view("edit_datakriteria", $data);
        echo view("admin_footer");
    }

    public function deletekriteria($id)
    {
        $kriteriaModel = new model_datakriteria();

        // Hapus kriteria berdasarkan ID
        $kriteriaModel->deletekriteria($id);

        // Redirect ke halaman tampil kriteria
        return redirect()->to(base_url('Home/viewdatakriteria'));
    }

    public function tambahbobot()
    {
        helper(['form']); // Load the Form Helper
        $bobotModel = new model_databobot();

        if ($this->request->getMethod() === 'post') {
            $validationRules = [
                'id_bobot' => 'required',
                'kode' => 'required',
                'nama_kriteria' => 'required',
                'nama_bobot' => 'required',
                'nilai' => 'required|numeric',
            ];

            // Run the validation
            if ($this->validate($validationRules)) {
                $data = [
                    'id_bobot' => $this->request->getPost('id_bobot'),
                    'kode' => $this->request->getPost('kode'),
                    'nama_kriteria' => $this->request->getPost('nama_kriteria'),
                    'nama_bobot' => $this->request->getPost('nama_bobot'),
                    'nilai' => $this->request->getPost('nilai'),
                ];

                $bobotModel->tambahbobot($data);
                return redirect()->to(base_url('Home/viewdatabobot'));
            } else {
                $data['validation'] = $this->validator;
            }
        }

        echo view("admin_header");
        echo view("admin_nav");
        echo view("tambah_databobot", $data ?? []);
        echo view("admin_footer");
    }

    function editbobot($id)
    {
        $bobotModel = new model_databobot();
        $data['bobot'] = $bobotModel->getBobot($id);

        if (!$data['bobot']) {
            return redirect()->to(base_url('Home/viewdatabobot'));
        }

        // Jika form disubmit
        if ($this->request->getMethod() === 'post') {
            $validationRules = [
                'id_bobot' => 'required',
                'kode' => 'required',
                'nama_kriteria' => 'required',
                'nama_bobot' => 'required',
                'nilai' => 'required|numeric',
            ];

            // Run the validation
            if ($this->validate($validationRules)) {
                $updateData = [
                    'id_bobot' => $this->request->getPost('id_bobot'),
                    'kode' => $this->request->getPost('kode'),
                    'nama_kriteria' => $this->request->getPost('nama_kriteria'),
                    'nama_bobot' => $this->request->getPost('nama_bobot'),
                    'nilai' => $this->request->getPost('nilai'),
                ];

                $bobotModel->updatebobot($id, $updateData);
                return redirect()->to(base_url('Home/viewdatabobot'));

            } else {
                // Jika validasi gagal, kirim error ke view
                $data['validation'] = $this->validator;
            }
        }

        echo view("admin_header");
        echo view("admin_nav");
        echo view("edit_databobot", $data);
        echo view("admin_footer");
    }

    public function formeditbobot($id)
    {
        $bobotModel = new model_databobot();
        $data['bobot'] = $bobotModel->getBobot($id);

        if (!$data['bobot']) {
            return redirect()->to(base_url('Home/viewdatabobot'));
        }
        echo view("admin_header");
        echo view("admin_nav");
        echo view("edit_databobot", $data);
        echo view("admin_footer");
    }

    public function deletebobot($id)
    {
        $bobotModel = new model_databobot();

        // Hapus bobot berdasarkan ID
        $bobotModel->deletebobot($id);

        // Redirect ke halaman tampil bobot
        return redirect()->to(base_url('Home/viewdatabobot'));
    }

    public function tambahkonversi()
    {
        helper(['form']); // Load the Form Helper
        $alternatifModel = new model_konversi();

        if ($this->request->getMethod() === 'post') {
            // Validation rules, adjust as needed
            $validationRules = [
                'nama_media' => 'required',
                'C1' => 'required|numeric',
                'C2' => 'required|numeric',
                'C3' => 'required|numeric',
                'C4' => 'required|numeric',
                'C5' => 'required|numeric',
                // Add other validation rules as needed
            ];

            // Run the validation
            if ($this->validate($validationRules)) {
                // Get validated data
                $data = [
                    'nama_media' => $this->request->getPost('nama_media'),
                    'C1' => $this->request->getPost('C1'),
                    'C2' => $this->request->getPost('C2'),
                    'C3' => $this->request->getPost('C3'),
                    'C4' => $this->request->getPost('C4'),
                    'C5' => $this->request->getPost('C5'),
                    // Add other fields as needed
                ];

                // Insert data using the model
                $alternatifModel->tambahkonversi($data);

                // Set a success flash message
                // $this->session->setFlashdata('success', 'Alternatif added successfully.');

                // Redirect to the Alternatif view or any other page as needed
                return redirect()->to(base_url('Home/viewdatakonversi'));
            } else {
                // If validation fails, pass errors to the view
                $data['validation'] = $this->validator;
            }
        }

        // Load the form_alternatif view with any validation errors
        echo view("admin_header");
        echo view("admin_nav");
        echo view("tambah_datakonversi", $data ?? []);
        echo view("admin_footer");
    }

    function editkonversi($id)
    {
        $alternatifModel = new model_konversi();
        $data['alternatif'] = $alternatifModel->getKonversi($id);

        if (!$data['alternatif']) {
            return redirect()->to(base_url('Home/viewdatakonversi'));
        }

        // Jika form disubmit
        if ($this->request->getMethod() === 'post') {
            $validationRules = [
                'nama_media' => 'required',
                'C1' => 'required|numeric',
                'C2' => 'required|numeric',
                'C3' => 'required|numeric',
                'C4' => 'required|numeric',
                'C5' => 'required|numeric',
            ];

            // Run the validation
            if ($this->validate($validationRules)) {
                $updateData = [
                    'nama_media' => $this->request->getPost('nama_media'),
                    'C1' => $this->request->getPost('C1'),
                    'C2' => $this->request->getPost('C2'),
                    'C3' => $this->request->getPost('C3'),
                    'C4' => $this->request->getPost('C4'),
                    'C5' => $this->request->getPost('C5'),
                ];

                $alternatifModel->updatekonversi($id, $updateData);
                return redirect()->to(base_url('Home/viewdatakonversi'));

            } else {
                // Jika validasi gagal, kirim error ke view
                $data['validation'] = $this->validator;
            }
        }

        echo view("admin_header");
        echo view("admin_nav");
        echo view("edit_datakonversi", $data);
        echo view("admin_footer");
    }

    public function formeditkonversi($id)
    {
        $alternatifModel = new model_konversi();
        $data['alternatif'] = $alternatifModel->getKonversi($id);

        if (!$data['alternatif']) {
            return redirect()->to(base_url('Home/viewdatakonversi'));
        }
        echo view("admin_header");
        echo view("admin_nav");
        echo view("edit_datakonversi", $data);
        echo view("admin_footer");
    }

    public function deletekonversi($id)
    {
        $alternatifModel = new model_konversi();

        // Hapus alternatif berdasarkan ID
        $alternatifModel->deletekonversi($id);

        // Redirect ke halaman tampil alternatif
        return redirect()->to(base_url('Home/viewdatakonversi'));
    }
}
