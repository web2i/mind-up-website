<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use DB;
use App\MyClasses\User;

class ManageTeamController extends Controller
{
    protected function initData()
    {
        parent::initData();
	//Titles
	    $this->data['h'][3][1] = $this->getText("manage-team"); // "Gestion des utilisateurs"	

        $this->data['title'] = $this->getText('manage-team');
	//Buttons
	$this->data['input'][1] = 'DEFAULT'; // "Mettre a jour"

        // Members
        $this->data['members'] = [];
        $members = DB::table('members')->select('id')->distinct()->get();
        $members = json_decode(json_encode($members), True);
        foreach($members as $member)
        {
            $user = User::createFromId($member['id']);
            $m = [];
            $m['name'] = $user->getName();
            $m['firstname'] = $user->getFirstname();
            $m['jobId'] = $user->getJobId();
            $m['jobText'] = $this->getText($user->getJobTextId());
            $m['picture']['src'] = $this->getUrl("ressources/images/".$user->getPathToImage());
            $m['src'] = $this->getUrl("index.php/edit-profil/".$user->getId());
            $m['department'] = $user->getDepartement();
            $m['important'] = $user->getImportant();
            $m['id'] = $user->getId();
            array_push($this->data['members'], $m);
        }
        //echo '<pre>'; print_r($this->data['members']); echo '</pre>';
    }

    public function main()
    {
        $this->init();
        $this->initData();
        return view('manage-team', $this->data);
    }
}

