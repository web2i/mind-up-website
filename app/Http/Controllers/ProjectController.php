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
            //On récupère les membres liés au projet
            $userProjects = \DB::table('userProjects')->where('projectId', $id)->get();
            for($i=0; $i < count($userProjects) ; $i++)
            {
                $member = \DB::table('members')->where('id', $userProjects[$i]->memberId)->first();
                $this->data['members'][$i]['name'] = $member->name;
                $this->data['members'][$i]['firstname'] = $member->firstname;
                $this->data['members'][$i]['jobId'] = $member->jobId;
                $this->data['members'][$i]['imageName'] = $member->imageName;
            }
            //On récupère les infos du client lié au projet
            $client = \DB::table('client')->where('id', $project->clientId)->first();
            $this->data['client']['compagnyName'] = $client->compagnyName;
            $this->data['client']['comment'] = $client->comment;
            $this->data['client']['compagnyLogo'] = $client->compagnyLogo;

            //On récupère les images du projet
            $projectPictures = \DB::table('project_picture')->where('projectId', $id)->get();
            for($i=0; $i < count($projectPictures) ; $i++)
            {
                $this->data['picture'][$i] = $projectPictures[$i]->picturePath;
            }

            //On récupère les technos du projet 
            $projecTechno = \DB::table('project_techno')->where('projectId', $id)->get();
            for($i=0; $i < count($projecTechno) ; $i++)
            {
                $techno = \DB::table('technology')->where('id', $projecTechno[$i]->technoId)->first();
                $this->data['techno'][$i] = $techno->pathImg;
            }
            print_r($this->data['techno']);
            

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