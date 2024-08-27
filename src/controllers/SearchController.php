<?php
namespace src\controllers;

use \core\controller;
use \src\handler\UserHandler;

class SearchController extends Controller {
    public function index($atts = []) {
        $searchTerm = filter_input(INPUT_GET, 's');

        if(empty($searchTerm)) {
            $this->redirect('/');
        }

        $users = UseHandler::searchUser( $searchTerm );
        
        $this->render('search', [
            'loggedUser' => $this->loggedUser,
            'searchTerm' => $searchTerm,
            'users' => $users
        ]);
    }
}