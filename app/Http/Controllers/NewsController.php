<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NewsController extends Controller
{
    /**
        * Remove the specified resource from storage.
        *
        * @param int $id
        * @return \Illuminate\Http\Response
        */

        public function index() {
            return view('news');
        }

        public function news($id)
        {
            return 'Ini adalah halaman Berita ' . $id;
        }
}
