<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;

class PrivateHomeController extends Controller
{
    private $pageId;

    protected function initData()
    {
        parent::initData();
        $this->data['title'] = 'Private home';
    }

    public function main()
    {
        $this->initData();
        return view('private-home', $this->data);
    }
    
    
}
