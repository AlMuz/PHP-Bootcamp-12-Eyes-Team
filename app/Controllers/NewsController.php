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

    public function addNewsAction()
    {
        /** @var \NewsSite\Models\News $news */
        $news = $this->container->get('model.addNews');

        $category = $_POST["category"];
        $title = $_POST["title"];
        $body = $_POST["body"];
        $author = $_POST["author"];
        $date = date("Y-m-d H:i:s");

        $news->addNews($category, $title, $body, $author, $date);

        $template = 'home.view.php';

        return $this->render($template);
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

    public function newCommentAction($id)
    {
        /** @var \NewsSite\Models\News $news */
        $news = $this->container->get('model.singleNew');

        $author = $_POST['author'];
        $comment = $_POST['comment'];

        $news->addComment($id, $author, $comment);

        return $this->singleNewsAction($id);
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
}
