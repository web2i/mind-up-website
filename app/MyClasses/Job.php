<?php

namespace App\MyClasses;

use DB;

class Job
{
    protected $textId;
    protected $rights;
    
    function __construct($textId) {
        $rights = DB::table('jobs')->where('textId', $textId)->get()[0];
        $this->textId = $textId;
        $this->rights = json_decode(json_encode($rights), True);
        unset($this->rights['textId']);
    } 
}
