<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use DB;
use App\MyClasses\User;

class HomeController extends Controller
{
    private $pageId;

    protected function initData()
    {
        parent::initData();
        // Titles
        $this->data['title'] = 'Home';
        $this->data['h'][1][1] = $this->getText('home-h-1-1');
        $this->data['h'][2][1] = $this->getText('home-h-2-1');
        $this->data['h'][2][2] = $this->getText('home-h-2-2');
        $this->data['h'][3][1] = $this->getText('home-h-3-1');
        $this->data['h'][3][2] = $this->getText('home-h-3-2');
        // Img
        $this->data['img']['profil'] = array(
                    'src' => $this->getUrl('/ressources/profil.jpeg'),
                    'alt' => 'DEFAULT');
        $this->data['img']['home-slider-1'] = array(
                    'src' => $this->getUrl('/ressources/slider_accueil/pic1.jpg'),
                    'alt' => 'DEFAULT');
        $this->data['img']['home-slider-2'] = array(
                    'src' => $this->getUrl('/ressources/slider_accueil/pic2.jpg'),
                    'alt' => 'DEFAULT');
        $this->data['img']['home-slider-3'] = array(
                    'src' => $this->getUrl('/ressources/slider_accueil/pic3.jpg'),
                    'alt' => 'DEFAULT');
        // Paragraphs
        $this->data['p'][1] = $this->getText('home-p-1');
        $this->data['p'][2] = $this->getText('home-p-2');
        $this->data['p'][3] = $this->getText('home-p-3');
        $this->data['p'][4] = $this->getText('home-p-4');
        $this->data['p'][5] = $this->getText('home-p-5');
        $this->data['p'][6] = $this->getText('home-p-6');
        $this->data['p'][7] = $this->getText('home-p-7');
        $this->data['p'][8] = $this->getText('home-p-8');
        // Members
        $this->data['members'] = [];
        $members = DB::table('members')->select('id')->where('important', '=', 1)->distinct()->get();
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
        // Help
        //echo '<pre>'; print_r($this->data['members']); echo '</pre>';
    }

    public function main()
    {
        $this->init();
        $this->initData();
        return view('home', $this->data);
    }
    
    
}
