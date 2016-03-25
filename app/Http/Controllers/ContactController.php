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
	    $this->data['input'][1] = $this->getText('contact-ask-other');
	    //Labels
	    $this->data['label']['name']= $this->getText('name');
	    $this->data['label']['firstname']= $this->getText('firstname');
	    $this->data['label']['companyname']= $this->getText('companyname');
	    $this->data['label']['mail']= $this->getText('email');
	    $this->data['label']['phone']= $this->getText('phone');
	    $this->data['label']['message']= $this->getText('message');
	    $this->data['label']['budget']= $this->getText('budget');
	    $this->data['label']['devTime']= $this->getText('devTime');
	    $this->data['label']['quotation-deadline']= $this->getText('quotation-deadline');
	    $this->data['label']['projectName']= $this->getText('projectName');
	    $this->data['label']['description']= $this->getText('description');
	    $this->data['label']['appointment-date']= $this->getText('appointment-date');
	    //titles
	    $this->data['h']['contact-us'] = $this->getText('contact-us'); 
	    $this->data['h']['1'] = $this->getText('contact-ask-infos');
	    $this->data['h']['2'] = $this->getText('contact-ask-quotation');
	    $this->data['h']['3'] = $this->getText('contact-ask-appointment');
	    $this->data['h']['4'] = $this->getText('contact-ask-other');
        // Other
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

