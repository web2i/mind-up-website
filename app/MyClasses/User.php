<?php

namespace App\MyClasses;

use DB;
use App\MyClasses\Job;

class User
{
    protected $rights;
    protected $email;
    protected $name;
    protected $firstname;
    protected $jobId;
    protected $id;
    protected $job;
    
    function __construct($email, $hash) {
        $this->email = $email;
        $this->id = DB::table('members')->where('email', $email)->value('id');
        $this->name = DB::table('members')->where('email', $email)->value('name');
        $this->jobId = DB::table('members')->where('email', $email)->value('jobId');
        $this->job = new Job($this->jobId);
    } 
}
