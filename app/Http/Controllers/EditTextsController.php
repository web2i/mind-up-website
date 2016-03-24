<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use DB;
use Session;

class EditTextsController extends Controller
{
    protected function initData()
    {
        parent::initData();
        $this->data['title'] = $this->getText('edit-texts-title');
        $texts = DB::table('texts')->where('edit','=',1)->get();
        $this->data['texts'] = json_decode(json_encode($texts), True);
    }

    public function main()
    {
        $this->init();
        
        if(!$this->user->getRight('editPublicTexts'))
        {
            return "401";
        }
        
        $this->initData();
        return view('edit-texts', $this->data);
    }
}

