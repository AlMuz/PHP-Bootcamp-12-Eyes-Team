<?php

namespace NewsSite\Controllers;

class HomeController extends AbstractController
{

    public function homeAction()
    {
        $template = 'home.view.php';
        return $this->render($template, []);
    }
}