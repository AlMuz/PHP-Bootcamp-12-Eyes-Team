<?php

namespace NewsSite\Controllers;

class AboutController extends AbstractController
{

    public function aboutAction()
    {
        $template = 'about.view.php';
        return $this->render($template, []);
    }

}
