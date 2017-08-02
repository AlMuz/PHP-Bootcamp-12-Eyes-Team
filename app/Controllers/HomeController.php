<?php

namespace NewsSite\Controllers;

class HomeController extends AbstractController
{
    public function homeAction()
    {
        /** @var \NewsSite\Models\News $news */
        $news = $this->container->get('model.latestNews');

        /** @var \NewsSite\Models\Categories $news */
        $categories = $this->container->get('model.categories');

        $listOfNews = $news->getLatestNews();
        $listOfCategories = $categories->getNewsCategory();

        $templateVariables = ['news' => $listOfNews, 'categories' => $listOfCategories];
        $template = 'home.view.php';

        return $this->render($template, $templateVariables);
    }
}
