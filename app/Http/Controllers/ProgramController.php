<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProgramController extends Controller
{
    public function index() {
        return view('program');
    }
    /**
        * Remove the specified resource from storage.
        *
        * @param int $id
        * @return \Illuminate\Http\Response
        */

    public function program($id)
    {
        return 'Ini adalah halaman Program ' . $id;
    }

    public function karir()
    {
        return 'List Karir';
    }
    public function magang()
    {
        return 'List Magang';
    }
    public function industri()
    {
        return 'List Industri';
    }
}
