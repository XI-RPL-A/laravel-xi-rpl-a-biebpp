<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index() {
        return view('product');
    }
    /**
        * Remove the specified resource from storage.
        *
        * @param int $id
        * @return \Illuminate\Http\Response
        */

    public function product($id)
    {
        return 'Ini adalah halaman Product ' . $id;
    }

    public function marbel() {
        return 'Marbel';
    }
    public function riri() {
        return 'Riri Story';
    }
    public function kolak() {
        return 'Kolak';
    }
}
