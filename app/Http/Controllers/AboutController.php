<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function about(){
        return "<hr> ABOUT </hr> <br>
                <hr>Nim   : 2041720073 </hr> <br>
                <hr>Nama  : Karmila Novi Arfiana </hr><br>
                <hr>Kelas : TI-2C </hr>";
    }
}
