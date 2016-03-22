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
            $this->data['project']['title'] = $project->title;
            $this->data['project']['description'] = $project->description;
            $this->data['project']['thumbnail'] = $project->thumbnail;
            $this->data['project']['date'] = $project->date;
        }
        return view('project', $this->data);
    }
}

