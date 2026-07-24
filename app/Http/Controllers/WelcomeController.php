<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WelcomeController extends Controller
{
    public function index() {
        return 'Haii, Selamat Datang di Website dengan Laravel';
    }
}
