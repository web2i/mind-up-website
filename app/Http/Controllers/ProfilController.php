<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\MyClasses\User;

class ProfilController extends Controller
{
    protected function initDataUser($user)
    {
        $this->data['project'] = "DEFAULT";
        $this->data['img']['profil-image-1']['src'] = "DEFAULT";
        $this->data['img']['project-image-1']['src'] = "DEFAULT";
        $this->data['img']['project-image-2']['src'] = "DEFAULT";
        $this->data['img']['project-image-3']['src'] = "DEFAULT";
        
        $this->data['h'][1][1] = "DEFAULT";
        /*$this->data['h'][1][2] = "DEFAULT";
        $this->data['h'][1][3] = "DEFAULT";
        $this->data['h'][1][4] = "DEFAULT";*/
        
        $this->data['p'][1] = "DEFAULT";
        $this->data['p'][2] = "DEFAULT";
        $this->data['p'][3] = "DEFAULT";
    
        $this->data['title'] = $user->getFirstname() . " " . $user->getName();
        $this->data['user']['firstname'] = $user->getFirstname();
        $this->data['user']['name'] = $user->getName();
        $this->data['user']['job'] = $this->getText($user->getJobTextId());
        $this->data['user']['email'] = $user->getEmail();
        $this->data['user']['mobile'] = $user->getMobile();
        $this->data['user']['picture']['src'] = $this->getUrl("ressources/images/".$user->getPathToImage());
        
        // echo '<pre>'; print_r($this->data['user']); echo '</pre>';
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

