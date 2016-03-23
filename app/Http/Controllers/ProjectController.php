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
            $userProjects = \DB::table('userProjects')->where('projectId', $id)->get();
            for($i=0; $i < count($userProjects) ; $i++)
            {
                $member = \DB::table('members')->where('id', $userProjects[$i]->memberId)->first();
                $this->data['members'][$i]['name'] = $member->name;
                $this->data['members'][$i]['firstname'] = $member->firstname;
                $this->data['members'][$i]['jobId'] = $member->jobId;
                $this->data['members'][$i]['imageName'] = $member->imageName;
            }
            $client = \DB::table('client')->where('id', $project->clientId)->first();
            $this->data['client']['compagnyName'] = $client->compagnyName;
            $this->data['client']['comment'] = $client->comment;
            $this->data['client']['compagnyLogo'] = $client->compagnyLogo;
            print_r($this->data['client']);
            

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