<?php

namespace App\MyClasses;

use DB;

class Job
{
    protected $textId;
    protected $rights;
    protected $departement;
    
    function __construct($textId) {
        $rights = DB::table('jobs')->where('textId', $textId)->first();
        $this->textId = $textId;
        $this->rights = json_decode(json_encode($rights), True);
        
        $this->departement = DB::table('jobs')->where('textId', $textId)->value('department');
        
        unset($this->rights['textId']);
    } 
    
    public function getRight($id)
    {
        return $this->rights[$id];
    }
    
    public function getTextId()
    {
        return $this->textId;
    }
    public function getDepartement()
    {
        return $this->departement;
    }
    
}
