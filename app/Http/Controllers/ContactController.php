<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;

class ContactController extends Controller
{
    protected function initData()
    {
        parent::initData();
	    //Buttons
	    $this->data['input']['infos'] = $this->getText('infos'); 
	    $this->data['input']['quotation'] = $this->getText('quotation'); 
	    $this->data['input']['appointment'] = $this->getText('appointment'); 
	    $this->data['input']['other'] = $this->getText('other'); 

	    //Titles
	
	    $this->data['h']['contact-us'] = $this->getText('contact-us');
	    $this->data['h']['1'] = $this->getText('contact-ask-infos');
	    $this->data['h']['2'] = $this->getText('contact-ask-quotation');
	    $this->data['h']['3'] = $this->getText('contact-ask-appointment');
	    $this->data['h']['4'] = $this->getText('contact-ask-other');

	    $this->data['input'][1] = $this->getText('contact-button');


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

