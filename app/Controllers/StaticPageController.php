<?php

namespace NewsSite\Controllers;

class StaticPageController extends AbstractController
{
    public function aboutAction()
    {
        $template = 'about.view.php';
        return $this->render($template, []);
    }

    public function contactAction()
    {
        $template = 'contact.view.php';
        return $this->render($template, []);
    }
}
