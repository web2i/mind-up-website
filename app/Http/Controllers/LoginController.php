<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;

class LoginController extends Controller
{
    protected function initData()
    {
        parent::initData();
        $this->data['title'] = 'Home';
    }

    public function main()
    {
        $this->initData();
        return view('login', $this->data);
    }
    
    
}
