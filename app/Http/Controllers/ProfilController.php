<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\MyClasses\User;

use DB;

class ProfilController extends Controller
{
    protected function initDataUser($user)
    {
        // User 
        $this->data['title'] = $user->getFirstname() . " " . $user->getName();
        $this->data['user']['firstname'] = $user->getFirstname();
        $this->data['user']['name'] = $user->getName();
        $this->data['user']['job'] = $this->getText($user->getJobTextId());
        $this->data['user']['email'] = $user->getEmail();
        $this->data['user']['mobile'] = $user->getMobile();
        $this->data['user']['picture']['src'] = $this->getUrl("ressources/images/".$user->getPathToImage());
        $this->data['user']['description'] = $this->getText("user-".$user->getId()."-description");
        // Projects
        $this->data['projects'] = [];
        $projects = DB::table('userProjects')->select('projectId')->where('memberId','=',$user->getId())->distinct()->get();
        $projects = json_decode(json_encode($projects), True);
        foreach($projects as $p)
        {
            $project = [];
            $project['src'] = $this->getUrl("index.php/project/".$p['projectId']);
            $a = DB::table('project')->where('id','=', $p['projectId'])->select('thumbnail')->first()->thumbnail;
            if( !($a != "") )
                $a = "default-project.jpg";
            $project['img']['src'] = $this->getUrl("ressources/images/".$a);
            
            array_push($this->data['projects'], $project);
        }
        // Help
        // echo '<pre>'; print_r($this->data['user']); echo '</pre>';
        echo '<pre>'; print_r($this->data['projects']); echo '</pre>';
        //echo '<pre>'; print_r($projects); echo '</pre>';
    }

    public function main($id)
    {
        $this->init();
        $this->initData();
        $user = User::createFromId($id);
        $this->initDataUser($user);
        return view('profil', $this->data);
    }
}

