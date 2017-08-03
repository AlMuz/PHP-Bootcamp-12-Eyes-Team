<?php

namespace NewsSite\Controllers;

class StaticPageController extends AbstractController
{
    public function aboutAction()
    {
        $template = 'about.view.php';
        return $this->render($template);
    }

    public function contactAction()
    {
        $template = 'contact.view.php';
        return $this->render($template);
    }

    public function addNewsAction()
    {
        /** @var \NewsSite\Models\Categories $categories */
        $categories = $this->container->get('model.categories');

        $listOfCategories = $categories->getNewsCategory();

        $templateVariables = ['categories' => $listOfCategories];
        $template = 'news.add.view.php';

        return $this->render($template, $templateVariables);
    }

    public function addCategoryAction()
    {
        $template = 'category.add.view.php';
        return $this->render($template);
    }

    public function emailAction()
    {
        /** @var \NewsSite\Models\Email $email */
        $email = $this->container->get('model.email');

        $name = $_POST['name'];
        $emailToSend = $_POST['email'];
        $subject = $_POST['subject'];
        $message = $_POST['message'];

        $email->sendEmail($name, $emailToSend, $subject, $message);

        return $this->contactAction();

    }
}
