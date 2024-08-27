<?php
namespace src\controllers;

use \core\Controller;
use \src\models\Nota;
class HomeController extends Controller {

    public function index() {
        $notas = Nota::select()->execute();

        $this->render('home', [
            'notas' => $notas
        ]);
    }
}