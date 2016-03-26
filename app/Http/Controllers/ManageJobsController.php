<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use DB;
use Schema;

class ManageJobsController extends Controller
{
    protected function initData()
    {
        parent::initData();
        $this->data['title'] = $this->getText('admin');
        $this->data['texts']['order'] = $this->getText('order');
        
        $jobs = DB::table('jobs')->orderBy('id', 'asc')->get();
        $jobs = json_decode(json_encode($jobs), True);
        foreach($jobs as $key => $job) {
            $jobs[$key]['textId'] = $this->getText($jobs[$key]['textId']);//department
            $jobs[$key]['department'] = $this->getText($jobs[$key]['department']);
        }
        $this->data['jobs'] = $jobs;
        $this->data['rights'] = [] ;
        $columns = Schema::getColumnListing('jobs');
        unset($columns[0]);
        foreach($columns as $column) {
            array_push($this->data['rights'], $this->getText('rights-'.$column));
        }
    }

    public function main()
    {
        $this->init();
        if(!$this->user->getRight('managePositions'))
        {
            return "401";
        }
        $this->initData();
        //echo '<pre>'; print_r($this->data); echo '</pre>';
        return view('manage-jobs', $this->data);
    }
}

