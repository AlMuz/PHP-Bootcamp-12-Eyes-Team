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

    public function addNewsAction() {
        /** @var \NewsSite\Models\Categories $categories */
        $categories = $this->container->get('model.categories');

        $listOfCategories = $categories->getNewsCategory();

        $templateVariables = ['categories' => $listOfCategories];
        $template = 'news.add.view.php';

        return $this->render($template, $templateVariables);
    }
}
