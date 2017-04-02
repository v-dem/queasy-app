<?php

namespace app\controllers;

use queasy\Controller;

class DefaultController extends Controller
{

    public function get()
    {
        return $this->view('index');
    }

}

