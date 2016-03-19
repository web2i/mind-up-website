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
    
    protected function __construct() {
        
    }
    
    public static function create() {
        $instance = new self();
        $instance->job = new Job('guest');
        return $instance;
    }
    
    public static function createFromEmailHash($email, $hash) {
        $instance = new self();
        $instance->email = $email;
        $instance->id = DB::table('members')->where('email', $email)->value('id');
        $instance->name = DB::table('members')->where('email', $email)->value('name');
        $instance->jobId = DB::table('members')->where('email', $email)->value('jobId');
        $instance->job = new Job($instance->jobId);
        return $instance;
    } 
    
    public function getRight($id)
    {
        return $this->job->getRight($id);
    }
}
