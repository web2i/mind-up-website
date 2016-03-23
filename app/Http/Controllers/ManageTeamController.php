<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;

class ManageTeamController extends Controller
{
    protected function initData()
    {
        parent::initData();
        $this->data['title'] = $this->getText('manage-team');
    }

    public function main()
    {
        $this->init();
        $this->initData();
        return view('manage-team', $this->data);
    }
}

