<?php

namespace App\Controllers;

class WebComp extends BaseController
{
    public function index()
    {
        return view('WebComp');
    }

    public function showcase()
    {
        return view('WebShowcase');
    }
}