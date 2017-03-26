<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\mahasiswa;

class MahasiswaController extends Controller
{
    //
    public function awal()
    {
    	return "hello dari mahasiswa";
    }
    public function tambah()
    {
    	return $this->simpan();
    }
    public function simpan()
    {
    	$mahasiswa = new Mahasiswa();
    	$mahasiswa->nama = 'Zainal Arifin';
    	$mahasiswa->nim = '1515015137';
    	$mahasiswa->alamat = 'Jl.suwandi';
    	$mahasiswa->pengguna_id = 1;
    	$mahasiswa->save();
    	return "data {$mahasiswa->nama} telah disimpan";
    }
}
