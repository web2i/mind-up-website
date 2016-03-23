<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;

class ProjectController extends Controller
{
    protected function initData()
    {
        parent::initData();
        $this->data['title'] = $this->getText('default');
    }

    public function main($id)
    {
        $this->init();
        $this->initData();
        $project = \DB::table('project')->where('id', $id)->first();
        if(isset($project))
        {
            $this->data['project']['title'] = $this->getText('project-'.$id.'-title');
            $this->data['project']['description'] = $this->getText("project-".$id."-description");
            $this->data['project']['thumbnail'] = $project->thumbnail;
            $this->data['project']['date'] = $project->date;
            $pictures = \DB::table('project_picture')->where('projectId', $id)->get();
            if(isset($pictures))
            {
                for ($i=0 ; $i < count($pictures) ; $i++) {
                    $this->data['img'][$pictures[$i]->id_img]['src'] = $pictures[$i]->picturePath;
                }
            }

            $this->data['h'][1][1] = 'defaultH';
            $this->data['h'][1][2] = 'defaultH';
            $this->data['h'][1][3] = 'defaultH';
            $this->data['h'][1][4] = 'defaultH';
            $this->data['h'][2][1] = 'defaultH';
            $this->data['h'][2][2] = 'defaultH';
            $this->data['h'][2][3] = 'defaultH';
            $this->data['h'][3][1] = 'defaultH';
            $this->data['h'][3][2] = 'defaultH';
            $this->data['p'][1] = 'defaultP';
            $this->data['p'][2] = 'defaultP';
            $this->data['p'][3] = 'defaultP';
            $this->data['p'][4] = 'defaultP';
            $this->data['p'][5] = 'defaultP';
            return view('project', $this->data);
        }
        else
        {
            //Projet n'existe pas
        }
    }

}