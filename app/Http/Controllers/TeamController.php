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
	    $this->data['h'][3][1] = 'DEFAULT'; // "Notre equipe"
	    $this->data['h'][3][2] = 'DEFAULT'; // name of member
	    $this->data['h'][3][3] = 'DEFAULT'; // name of category (ex: "Presidence")
	

	    //Paragraphes
	    $this->data['p'][1] = 'DEFAULT'; // "Voici notre equipe toujours prete a vous aider pour"....

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
            array_push($this->data['members'], $m);
        }
        // Jobs
        $this->data['jobs'] = [];
        $jobs = DB::table('jobs')->select('id', 'textId')->distinct()->orderBy('id', 'asc')->get();
        $jobs = json_decode(json_encode($jobs), True);
        foreach($jobs as $j)
        {
            $job = [];
            $job['id'] = $j['id'];
            $job['textId'] = $j['textId'];
            $job['text'] = $this->getText($j['textId']);
            if($job['id'] > 0)
                array_push($this->data['jobs'], $job);
        }
        // Help
        //echo '<pre>'; print_r($this->data['jobs']); echo '</pre>';
        //echo '<pre>'; print_r($this->data['members']); echo '</pre>';
    }

    public function main()
    {
        $this->init();
        $this->initData();
        return view('team', $this->data);
    }
    
    
}
