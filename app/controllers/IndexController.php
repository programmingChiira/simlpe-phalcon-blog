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

}

