<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;

class ContactController extends Controller
{
    protected function initData()
    {
        parent::initData();
	//Buttons
	$this->data['input'][1] = 'DEFAULT';


        $this->data['title'] = $this->getText('contact');
        $this->data['js']['contact'] = $this->BASE_URL.'/js/contact-form.js';
    }

    public function main()
    {
        $this->init();
        $this->initData();
        return view('contact-form', $this->data);
    }
}

