<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use DB;
use App\MyClasses\User;

class TeamController extends Controller
{
    private $pageId;

    protected function initData()
    {
        parent::initData();
	//Titles
	    $this->data['h'][3][1] = $this->getText("our-team"); // "Notre equipe"	

	    //Paragraphes
	    $this->data['p'][1] = $this->getText("our-team-description"); // "Voici notre equipe toujours prete a vous aider pour"....

	    //Span
	    $this->data['span'][1] = 'DEFAULT'; //job of member

	    //img
        $this->data['img']['profil'] = array(
                    'src' => $this->BASE_URL.'/ressources/profil.jpeg',
                    'alt' => 'DEFAULT'); 
        $this->data['title'] = 'Home';
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
            $m['src'] = $this->getUrl("index.php/profil/".$user->getId());
            $m['department'] = $user->getDepartement();
            array_push($this->data['members'], $m);
        }
        // Jobs
        $this->data['departments'] = [];
        $departments = DB::table('jobs')->select('id','department')->groupBy('department')->distinct()->orderBy('id', 'asc')->get();
        $departments = json_decode(json_encode($departments), True);
        foreach($departments as $d)
        {
            if($d['id'] > 0) {
                $department = [];
                $department['id'] = $d['id'];
                $department['department'] = $d['department'];
                $department['text'] = $this->getText($d['department']);
                array_push($this->data['departments'], $department);
            }
        }
        // Help
        //echo '<pre>'; print_r($this->data['departments']); echo '</pre>';
        //echo '<pre>'; print_r($this->data['members']); echo '</pre>';
    }

    public function main()
    {
        $this->init();
        $this->initData();
        return view('team', $this->data);
    }
    
    
}
