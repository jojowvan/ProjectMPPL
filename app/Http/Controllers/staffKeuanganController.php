<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class staffKeuanganController extends Controller
{
  public function daftarSiswa()
  {
      return view('user/daftarSiswa');
  }

  public function tambahSiswa()
  {
      return view('user/tambahSiswa');
  }
}
