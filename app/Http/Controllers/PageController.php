<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index(){
        return "Selamat Datang";
    }
    public function about(){
        return "Nim   : 2041720073 <br>
                Nama  : Karmila Novi Arfiana <br>
                Kelas : TI-2C";
    }
    public function articles($id){
        return "Ini adalah halaman artikel dengan id " .$id;
    }
}
