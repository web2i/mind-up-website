<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;

class ContactController extends Controller
{
    protected function initData()
    {
        parent::initData();
	//Buttons
	$this->data['input'][1] = 'DEFAULT'; // Renseignements
	$this->data['input'][2] = 'DEFAULT'; // Demande de devis
	$this->data['input'][3] = 'DEFAULT'; //	Demande de rendez-vous
	$this->data['input'][4] = 'DEFAULT'; // Autre

	//Titles
	
	$this->data['h'][3][1] = 'DEFAULT'; // Nous contacter


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

