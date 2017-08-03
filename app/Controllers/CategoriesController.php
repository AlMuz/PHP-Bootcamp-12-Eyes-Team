<?php

namespace NewsSite\Controllers;

class CategoriesController extends AbstractController
{
    public function CategoryAction()
    {
        /** @var \NewsSite\Models\Categories $category */
        $category = $this->container->get('model.categories');

        $ListOfCategory = $category->getNewsCategory();

        $templateVariables = ['categories' => $ListOfCategory];

        $template = 'category.view.php';
        return $this->render($template, $templateVariables);
    }

    public function addCategoryAction()
    {
        /** @var \NewsSite\Models\Categories $news */
        $category = $this->container->get('model.addCategory');

        $title = $_POST["category"];
        $date = date("Y-m-d H:i:s");

        $category->addCategory($title, $date);

        $template = 'home.view.php';

        return $this->render($template);
    }
}
