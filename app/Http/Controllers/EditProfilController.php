<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\MyClasses\User;
use DB;


class EditProfilController extends Controller
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
    
        $this->data['title'] = $user->getFirstname() . " " . $user->getName();
    }
    
    

    public function main($id)
    {
        $this->init();
        
        if(!($this->user->getRight('manageMembers') || $this->user->getId() == $id))
        {
            return "401";
        }
        
        $this->initData();
        $user = User::createFromId($id);
        $this->initDataUser($user);
        return view('edit-profil', $this->data);
    }
}

