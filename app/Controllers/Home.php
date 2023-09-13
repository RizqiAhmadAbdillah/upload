<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index(): string
    {
        return view('login');
    }
    public function dashboard()
    {
        $data['title'] = 'Dashboard';
        return view('dashboard', $data);
    }
    public function upload()
    {
        $nik = $this->request->getVar('nik');
        if (!$nik) {
            return redirect()->to("/dashboard");
        }
        $data = [
            'title' => 'Upload',
            'nik' => $nik
        ];
        return view('pages/upload', $data);
    }
    public function save()
    {
        $nik = $this->request->getVar('nik');
        $directory = "uploads/" . $nik;
        $ktp = $this->request->getFile('ktp');
        $kk = $this->request->getFile('kk');
        $bast = $this->request->getFile('bast');
        $barcode = $this->request->getFile('barcode');
        $sn = $this->request->getFile('sn');
        $pasfoto = $this->request->getFile('pasfoto');

        $ktp->move($directory, $nik . '_ktp.' . $ktp->guessExtension());
        $kk->move($directory, $nik . '_kk.' . $kk->guessExtension());
        $bast->move($directory, $nik . '_bast.' . $bast->guessExtension());
        $barcode->move($directory, $nik . '_barcode.' . $barcode->guessExtension());
        $sn->move($directory, $nik . '_sn.' . $sn->guessExtension());
        $pasfoto->move($directory, $nik . '_pasfoto.' . $pasfoto->guessExtension());

        return redirect()->to("/success");
    }
}
