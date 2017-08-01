<?php

namespace NewsSite\Controllers;

class CategoriesController extends AbstractController
{

    public function CategoryAction()
    {
        /** @var \NewsSite\Models\Categories $category */
        $category = $this->container->get('model.categories');

        $ListOfCategory = $category->getNewsCategory();
        echo '2. not in ';
        dump($ListOfCategory);
        $templateVariables = ['category' => $ListOfCategory];
        echo '3. not in ';
        dump($templateVariables);
        $template = 'category.view.php';
        return $this->render($template, $templateVariables);
    }
}