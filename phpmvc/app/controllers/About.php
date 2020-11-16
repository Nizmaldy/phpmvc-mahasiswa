<?php

class About extends Controller{
    public function index($nama = 'Nizmaldy', $hobi = 'Tenis Meja' , $pekerjaan = 'Pengacara')
    {
        $data['nama'] = $nama;
        $data['hobi'] = $hobi;
        $data['pekerjaan'] = $pekerjaan;
        $data['judul'] = 'About Me';
        $this->view('templates/header', $data);
        $this->view('about/index', $data);
        $this->view('templates/footer');
    }

    public function page()
    {
        $data['judul'] = 'Pages';
        $this->view('templates/header', $data);
        $this->view('about/page');
        $this->view('templates/footer');
    }
}