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
	    $this->data['h'][3][1] = 'DEFAULT'; // "Gestion des utilisateurs"	

        $this->data['title'] = $this->getText('manage-team');
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
            array_push($this->data['members'], $m);
        }
    }

    public function main()
    {
        $this->init();
        $this->initData();
        return view('manage-team', $this->data);
    }
}

