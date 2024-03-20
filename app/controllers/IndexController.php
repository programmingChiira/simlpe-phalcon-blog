<?php
declare(strict_types=1);

class IndexController extends ControllerBase
{

    public function indexAction()
    {

    }

    public function aboutAction()
    {
        $this->view->pick('index/about');
    }

    public function contactAction()
    {
        $this->view->pick('index/contact');
    }

    public function postAction()
    {
        $this->view->pick('index/post');
    }

    public function categoryAction()
    {
        $this->view->pick('index/category');
    }

    public function searchAction()
    {
        $this->view->pick('index/search');
    }

    public function authDashboardAction()
    {
        $this->view->pick('index/authDashboard');
    }

    public function authEmailAction()
    {
        $this->view->pick('index/authEmail');
    }

    public function authChatAction()
    {
        $this->view->pick('index/authChat');
    }

    public function authContactAction()
    {
        $this->view->pick('index/authContact');
    }
}

