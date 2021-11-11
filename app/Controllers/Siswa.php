<?php

namespace App\Controllers;

class Siswa extends BaseController
{
    public function index()
    {
        echo "Halo ini adalah controller Siswa <a href='" .route_to ('profil'). "'>Link ke routing profil</a>";
    }
    public function nama($nama, $usia)
    {
        echo "Nama Saya adalah ".$nama.", usia ".$usia;
    }
    protected function testing()
    {
        echo "Ini adalah method testing yang merupakan private method";
    }
    public function profil()
    {
        echo "ini adalah method profil di controller Siswa";
    }
    public function dataSiswa($nama, $usia)
    {
        echo "Nama Saya adalah ".$nama.", usia ".$usia;
    }
    public function siswaDataId($id)
    {
        echo "Ini adalah method dengan nama siswaDataId dengan ID $id";
    }
    public function siswaDataName($name)
    {
        echo "Ini adalah method dengan nama siswaDataName dengan Name $name";
    }
}
