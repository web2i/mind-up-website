<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;

class TeamController extends Controller
{
    private $pageId;

    protected function initData()
    {
        parent::initData();
	//Titles
	$this->data['h'][3][1] = 'DEFAULT'; // "Notre equipe"
	$this->data['h'][3][2] = 'DEFAULT'; // name of member

	//Paragraphes
	$this->data['p'][1] = 'DEFAULT'; // "Voici notre equipe toujours prete a vous aider pour"....

	//Span
	$this->data['span'][1] = 'DEFAULT'; //job of member

	//img
        $this->data['img']['profil'] = array(
                    'src' => $this->BASE_URL.'/ressources/profil.jpeg',
                    'alt' => 'DEFAULT'); 

        $this->data['title'] = 'Home';
    }

    public function main()
    {
        $this->init();
        $this->initData();
        return view('team', $this->data);
    }
    
    
}
