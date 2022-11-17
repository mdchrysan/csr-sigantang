<?php

namespace App\Controllers;

use App\Models\FeedbackModel;

class Home extends BaseController
{
    public function index()
    {
        $data = [
            'title' => 'Beranda | Sigantang',
            'validation' => \Config\Services::validation()
        ];
        return view('home/index', $data);
    }

    public function save()
    {
        if (!$this->validate([
            'name' => [
                'rules' => 'required|alpha_space',
                'errors' => [
                    'required' => 'Nama tidak boleh kosong.',
                    'alpha_space' => 'Harap hanya memasukkan huruf.'
                ]
            ],
            'address' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Alamat tidak boleh kosong.'
                ]
            ],
            'impression' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Kesan tidak boleh kosong.'
                ]
            ],
            'message' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Pesan tidak boleh kosong.'
                ]
            ],
        ])) {
            return redirect()->to('/#feedback')->withInput();
        }

        // save feedback
        $this->feedbackModel = new FeedbackModel();
        $this->feedbackModel->save([
            'name'          => $this->request->getVar('name'),
            'address'       => $this->request->getVar('address'),
            'impression'    => $this->request->getVar('impression'),
            'message'       => $this->request->getVar('message')
        ]);

        session()->setFlashdata('msg-feedback', 'Pesan berhasil terkirim.');
        return redirect()->to('/');
    }
}
