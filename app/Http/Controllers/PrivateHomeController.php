<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Session;

class PrivateHomeController extends Controller
{
    private $pageId;

    protected function initData()
    {
        parent::initData();
        $this->data['title'] = $this->getText('private-home-title');
    }

    public function main()
    {
        $this->initData();
        
        //echo '<pre>'; print_r(Session::get('user')); echo '</pre>';
        //echo '<pre>'; print_r($user); echo '</pre>';
        /*if($user->rights['1'] === true)
        {
            
        }*/
        return view('private-home', $this->data);
    }
    
    
}
