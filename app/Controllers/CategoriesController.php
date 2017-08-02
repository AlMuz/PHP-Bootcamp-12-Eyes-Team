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


}
