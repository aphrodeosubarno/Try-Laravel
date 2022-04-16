<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function index()
    {
        return view('about', [
            'nama' => 'Deo Subarno',
            'email' => 'aprodeosubarno@gmail.com',
            'pekerjaan' => 'Software Developer',
            'image' => 'kon.jpg',
            'title' => 'About',
        ]);
    }
}
