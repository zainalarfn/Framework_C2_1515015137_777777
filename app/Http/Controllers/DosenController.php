<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\dosen;

class DosenController extends Controller
{
    //
    public function awal()
    {
    	return "hello dari dosen";
    }
    public function tambah()
    {
    	return $this->simpan();
    }
    public function simpan()
    {
    	$dosen = new Dosen();
    	$dosen->nama = 'Arifin Zainal';
    	$dosen->nip = '15150151370';
    	$dosen->alamat = 'Jl.suwandi';
    	$dosen->pengguna_id = 1;
    	$dosen->save();
    	return "data {$dosen->nama} telah disimpan";
    }

}
