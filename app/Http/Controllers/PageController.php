<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index() {
        return 'Haii, Selamat Datang di Website dengan Laravel';
    }

    /**
    * Remove the specified resource from storage.
    *
    * @param int $id
    * @return \Illuminate\Http\Response
    */

    public function article($id)
    {
        return 'Ini adalah halaman Artikel dengan ID ' . $id;
    }

    public function about() {
        return view('card');
    }
}
