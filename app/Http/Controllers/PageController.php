<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index(){
        return  "Selamat Datang";
    }
    public function about() {
        return 'Nama: Purnama Ridzky Nugraha \br NIM: 2341760037 ';
        
    }
    public function articles($id){
        return "Halaman Artikel dengan Id $id";
    }
}
