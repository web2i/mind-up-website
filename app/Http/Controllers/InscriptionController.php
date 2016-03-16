<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;

class InscriptionController extends Controller
{
    protected function initData()
    {
        parent::initData();
        $this->data['title'] = 'Inscription';
    }

    public function main()
    {
        $connected = true;
        $this->initData();
        if($connected)
            return view('inscription', $this->data);
        else
            return "not connected";
    }
    
    
}
