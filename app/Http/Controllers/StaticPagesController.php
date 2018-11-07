<?php

namespace App\Http\Controllers;


class StaticPagesController extends Controller
{

    public function home()
    {
        return view('static_pages/home');
    }

    public function help()
    {
        return '帮助页';
    }

    public function about()
    {
        return '关于页';
    }

}