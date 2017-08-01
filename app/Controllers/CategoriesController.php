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

    public function singleCategoryAction($id) {
        /** @var \NewsSite\Models\Categories $categories */
        $categories = $this->container->get('model.singleCategory');

        $ListOfCategory = $categories->getSingleCategory($id);

        $templateVariables = ['news' => $ListOfCategory];
        $template = 'news.view.php';

        return $this->render($template, $templateVariables);
    }

}
