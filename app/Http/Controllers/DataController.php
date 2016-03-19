<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use DB;

class DataController extends Controller
{
    protected function initData()
    {
        parent::initData();
        $this->data['title'] = $this->getText('data-title');
        $texts = DB::table('texts')->get();
        $this->data['texts'] = json_decode(json_encode($texts), True);
        //echo '<pre>'; print_r($this); echo '</pre>';
    }

    public function main()
    {
        $this->initData();
        return view('data', $this->data);
    }
}

