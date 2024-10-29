<?php

namespace App\Http\Controllers;
use App\Models\Biodata;


class BiodataController extends Controller
    {

        public function menampilkanDataBiodata()
        {
            $nama = Biodata::$nama;
            $kelas= Biodata::$kelas;
            $sekolah= Biodata::$sekolah;
            $alamat = Biodata::$alamat;
            $hobi= Biodata::$hobi;
            return View('biodata',compact('nama','kelas','sekolah','alamat','hobi'));
    
        
    }
}

