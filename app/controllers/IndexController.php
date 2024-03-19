<?php
declare(strict_types=1);

class IndexController extends ControllerBase
{

    public function indexAction()
    {

    }

    public function aboutAction()
    {
        // Render the about view
        $this->view->pick('index/about');
    }

    public function contactAction()
    {
        // Render the contact view
        $this->view->pick('index/contact');
    }

    public function postAction()
    {
        // Render the post view
        $this->view->pick('index/post');
    }

    public function categoryAction()
    {
        // Render the category view
        $this->view->pick('index/category');
    }

    public function searchAction()
    {
        // Render the search view
        $this->view->pick('index/search');
    }

}

