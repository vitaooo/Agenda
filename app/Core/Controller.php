<?php

namespace App\Core;

class Controller
{
    protected function redirect($url)
    {
        header('Location: ' . $this->getBaseUrl() . $url);
        exit;
    }

    private function getBaseUrl()
    {
        $config = Config::getInstance();
        $base = (isset($_SERVER['HTTPS']) && strtolower($_SERVER['HTTPS']) == 'on') ? 'https://' : 'http://';
        $base .= $_SERVER['SERVER_NAME'];
        if ($_SERVER['SERVER_PORT'] != '80') {
            $base .= ':' . $_SERVER['SERVER_PORT'];
        }
        $base .= $config->get('BASE_DIR');

        return $base;
    }

    private function _render($folder, $viewName, $viewData = [])
    {
        if (file_exists('../resources/views/' . $folder . '/' . $viewName . '.php')) {
            extract($viewData);
            $render = fn ($vN, $vD = []) => $this->renderPartial($vN, $vD);
            $base   = $this->getBaseUrl();
            require '../resources/views/' . $folder . '/' . $viewName . '.php';
        }
    }

    private function renderPartial($viewName, $viewData = [])
    {
        $this->_render('partials', $viewName, $viewData);
    }

    public function render($viewName, $viewData = [])
    {
        $this->_render('pages', $viewName, $viewData);
    }
}
