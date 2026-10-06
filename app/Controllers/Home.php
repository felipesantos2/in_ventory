<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        // dd(APPPATH, ROOTPATH, SYSTEMPATH, FCPATH);
        return $this->renderLatte('welcome');
    }
}
