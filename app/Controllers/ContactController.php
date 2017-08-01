<?php

namespace NewsSite\Controllers;

class ContactController extends AbstractController
{

    public function contactAction()
    {
        $template = 'contact.view.php';
        return $this->render($template, []);
    }

}
