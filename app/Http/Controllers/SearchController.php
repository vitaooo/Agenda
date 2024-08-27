<?php

namespace App\Http\Controllers;

use App\Core\Controller;
use App\Handlers\UserHandler;

class SearchController extends Controller
{
    public function index($atts = [])
    {
        $searchTerm = filter_input(INPUT_GET, 's');

        if(empty($searchTerm)) {
            $this->redirect('/');
        }

        $users = UserHandler::searchUser($searchTerm);

        $this->render('search', [
            // 'loggedUser' => $this->loggedUser,
            'searchTerm' => $searchTerm,
            'users' => $users
        ]);
    }
}
