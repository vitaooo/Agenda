<?php

namespace App\Http\Controllers;

use App\Core\Controller;
use App\Models\Nota;

class HomeController extends Controller
{
    public function index()
    {
        $notas = Nota::select()->execute();

        $this->render('home', [
            'notas' => $notas,
        ]);
    }
}
