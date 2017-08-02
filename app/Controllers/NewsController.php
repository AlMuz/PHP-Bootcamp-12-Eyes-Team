<?php

namespace NewsSite\Controllers;

class NewsController extends AbstractController
{
    public function newsAction()
    {
        /** @var \NewsSite\Models\News $news */
        $news = $this->container->get('model.news');

        $listOfNews = $news->getNews();

        $templateVariables = ['news' => $listOfNews];
        $template = 'news.view.php';

        return $this->render($template, $templateVariables);
    }

    public function singleNewsAction($id)
    {
        /** @var \NewsSite\Models\News $news */
        $news = $this->container->get('model.singleNew');

        $listOfNews = $news->getSingleNew($id);
        $listOfComments = $news->getComments($id);

        $templateVariables = ['news' => $listOfNews, 'comments' => $listOfComments];
        $template = 'single.news.view.php';

        return $this->render($template, $templateVariables);
    }

    public function singleCategoryAction($id)
    {
        /** @var \NewsSite\Models\Categories $categories */
        $news = $this->container->get('model.singleCategory');

        $ListOfCategory = $news->getSingleCategory($id);

        $templateVariables = ['news' => $ListOfCategory];
        $template = 'news.view.php';

        return $this->render($template, $templateVariables);
    }


}
