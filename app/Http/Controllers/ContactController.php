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


	//Labels
	$this->data['label']['name']='Nom:';
	$this->data['label']['firstname']='Prenom:';
	$this->data['label']['companyname']="Nom de l'entreprise";
	$this->data['label']['mail']='Adresse mail:';
	$this->data['label']['phone']='Telephone:';
	$this->data['label']['message']='Message:';
	$this->data['label']['budget']='Budget alloué:';
	$this->data['label']['devTime']='Temps de développement:';
	$this->data['label']['deadline']='Date limite du devis:';
	$this->data['label']['projectName']='Nom du projet:';
	$this->data['label']['description']='Description:';
	$this->data['label']['appointment']='Dates de rendez-vous:';
	//titles
	
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

