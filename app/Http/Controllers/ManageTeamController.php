<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;

class ManageTeamController extends Controller
{
    protected function initData()
    {
        parent::initData();
	//Titles
	    $this->data['h'][3][1] = 'DEFAULT'; // "Gestion des utilisateurs"	

        $this->data['title'] = $this->getText('manage-team');
    }

    public function main()
    {
        $this->init();
        $this->initData();
        return view('manage-team', $this->data);
    }
}

