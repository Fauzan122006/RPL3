<?php

class Home extends Controller
{
    public function index()
    {
        date_default_timezone_set('Asia/Makassar'); //setel zona waktu
        $waktusekarang = date('H:i'); // Format H:i memberikan waktu dalam format 24 jam (00:00 - 23:59)\
        if ($waktusekarang >= "00:00" && $waktusekarang < "12:00") {
            $salam = "Selamat Pagi👋";
        } elseif ($waktusekarang >= "12:00" && $waktusekarang < "15:00") {
            $salam = "Selamat Siang👋";
        } elseif ($waktusekarang >= "15:00" && $waktusekarang < "18:00") {
            $salam = "Selamat Sore👋";
        } elseif ($waktusekarang >= "18:00" && $waktusekarang < "23:59") {
            $salam = "Selamat Malam👋";
        } else {
            $salam = "waktu tidak valid";
        }

        $data['waktu'] = $salam;
        $data['judul'] = 'Home';

        $this->view('templates/header', $data);
        $this->view('home/index', $data);
        $this->view('templates/footer', $data);

    }
}