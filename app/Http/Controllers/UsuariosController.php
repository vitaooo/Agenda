<?php

namespace App\Http\Controllers;

use App\Core\Controller;
use App\Models\Nota;
use DateTime;

class UsuariosController extends Controller
{
    public function add()
    {
        $this->render('add');
    }
    public function addAction()
    {
        $today = new DateTime();

        $nome      = filter_input(INPUT_POST, 'nome');
        $email     = filter_input(INPUT_POST, 'email');
        $telefone  = filter_input(INPUT_POST, 'telefone');
        $descricao = filter_input(INPUT_POST, 'descrição');
        $now       = $today->format('Y-m-d  H:i:s');

        if ($nome && $email) {
            $data = Nota::select()->where('email', $email)->execute();

            if (count($data) === 0) {
                Nota::insert([
                    'nome'         => $nome,
                    'email'        => $email,
                    'telefone'     => $telefone,
                    'descrição'    => $descricao,
                    'data_criacao' => $now,
                ])->execute();
                $this->redirect('/');
            }
        }
        $this->redirect('/novo');
    }
    public function edit($args)
    {
        $nota = Nota::select()->find($args['id']);

        $this->render('edit', [
            'nota' => $nota,
        ]);
    }
    public function editAction($args)
    {
        $new = new DateTime();

        $nome      = filter_input(INPUT_POST, 'nome');
        $email     = filter_input(INPUT_POST, 'email');
        $telefone  = filter_input(INPUT_POST, 'telefone');
        $descricao = filter_input(INPUT_POST, 'descrição');
        $now       = $new->format('Y-m-d H:i:s');

        if ($nome && $email) {
            Nota::update()
              ->set('nome', $nome)
              ->set('email', $email)
              ->set('telefone', $telefone)
              ->set('descrição', $descricao)
              ->set('data_update', $now)
              ->where('id', $args['id'])
            ->execute();

            $this->redirect('/');
        }
        $this->redirect('/usuario/' . $args['id'] . '/editar');
    }
    public function del($args)
    {
        Nota::delete()->where('id', $args['id'])->execute();
        $this->redirect('/');
    }
}
