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

    public function authProjectListAction()
    {
        $this->view->pick('index/authProjectList');
    }

    public function authTaskBoardAction()
    {
        $this->view->pick('index/authTaskBoard');
    }

    public function authTicketListAction()
    {
        $this->view->pick('index/authTicketList');
    }

    public function authTicketDetailAction()
    {
        $this->view->pick('index/authTicketDetail');
    }

    public function authAllFilesAction()
    {
        $this->view->pick('index/authAllFiles');
    }

    public function authFileDocumentsAction()
    {
        $this->view->pick('index/authFileDocuments');
    }

    public function authFileImagesAction()
    {
        $this->view->pick('index/authFileImages');
    }

    public function authBlogDashboardAction()
    {
        $this->view->pick('index/authBlogDashboard');
    }

    public function authBlogPostAction()
    {
        $this->view->pick('index/authBlogPost');
    }

    public function authBlogListAction()
    {
        $this->view->pick('index/authBlogList');
    }

    public function authBlogDetailAction()
    {
        $this->view->pick('index/authBlogDetail');
    }

    public function authEcommerceDashboardAction()
    {
        $this->view->pick('index/authEcommerceDashboard');
    }

    public function authEcommerceProductListAction()
    {
        $this->view->pick('index/authEcommerceProductList');
    }

    public function authEcommerceProductDetailAction()
    {
        $this->view->pick('index/authEcommerceProductDetail');
    }
}

