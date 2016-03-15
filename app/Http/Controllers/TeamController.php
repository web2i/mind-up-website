<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;

class TeamController extends Controller
{
    private $pageId;

    protected function initData()
    {
        parent::initData();
        $this->data['img']['profil'] = array(
                    'src' => $this->BASE_URL.'/ressources/profil.jpeg',
                    'alt' => 'DEFAULT');
        $this->data['title'] = 'Home';
    }

    public function main()
    {
        $this->initData();
        return view('team', $this->data);
    }
    
    
}
