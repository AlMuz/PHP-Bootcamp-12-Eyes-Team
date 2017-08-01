<?php

namespace NewsSite\Controllers;

class HomeController extends AbstractController
{

    public function homeAction()
    {
        /** @var \NewsSite\Models\News $news */
        $news = $this->container->get('model.latestNews');

        $listOfNews = $news->getLatestNews();

        $templateVariables = ['news' => $listOfNews];
        $template = 'home.view.php';

        return $this->render($template, $templateVariables);
    }
}
