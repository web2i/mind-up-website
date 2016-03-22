<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;

class ProjectsController extends Controller
{
    private $pageId;

    protected function initData()
    {
        parent::initData();
        $this->data['img']['profil'] = array(
                    'src' => $this->BASE_URL.'/ressources/profil.jpeg',
                    'alt' => 'DEFAULT');
        $this->data['title'] = 'Home';
        $projects = \DB::table('project')->get()->orderBy('projet.date','DESC');
        for ($i=0 ; $i < count($projects) ;$i++) {
            $this->data['projects'][$i]['title'] = $projects[$i]->title;
            $this->data['projects'][$i]['description'] = $projects[$i]->description;
            $this->data['projects'][$i]['thumbnail'] = $projects[$i]->thumbnail;
        }
    }

    public function main()
    {
        $this->init();
        $this->initData();
        return view('projects', $this->data);
    }
    
    
}
