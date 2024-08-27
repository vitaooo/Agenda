<?php

namespace App\Http\Controllers;

use App\Core\Controller;

class ErrorController extends Controller
{
    public function index()
    {
        $this->render('404');
    }
}
