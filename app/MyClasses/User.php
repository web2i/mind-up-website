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
    protected $mobile;
    protected $pathToImage;
    
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
        $instance->firstname = DB::table('members')->where('email', $email)->value('firstname');
        $instance->jobId = DB::table('members')->where('email', $email)->value('jobId');
        $instance->mobile = DB::table('members')->where('email', $email)->value('mobile');
        $instance->job = new Job($instance->jobId);
        return $instance;
    }
    
    public static function createFromId($id) {
        $instance = new self();
        $instance->id = $id;
        $instance->email = DB::table('members')->where('id', $id)->value('email');
        $instance->name = DB::table('members')->where('id', $id)->value('name');
        $instance->firstname = DB::table('members')->where('id', $id)->value('firstname');
        $instance->jobId = DB::table('members')->where('id', $id)->value('jobId');
        $instance->mobile = DB::table('members')->where('id', $id)->value('mobile');
        $instance->pathToImage = DB::table('members')->where('id', $id)->value('imageName');
        $instance->important = DB::table('members')->where('id', $id)->value('important');
        $instance->key = DB::table('members')->where('id', $id)->value('key');
        $instance->job = new Job($instance->jobId);
        return $instance;
    } 
    
    public function getRight($id)
    {
        return $this->job->getRight($id);
    }
    
    public function getName() {
        return $this->name;
    }
    public function getImportant() {
        return $this->important;
    }
    public function getFirstname() {
        return $this->firstname;
    }
    public function getTextEmail() {
        if(!$this->email)
            return '-';
        return $this->email;
    }
    /*public function getEmail() {
        return $this->email;
    }*/
    public function getTextMobile() {
        if(!$this->mobile)
            return '-';
        return $this->mobile;
    }
    /*public function getMobile() {
        return $this->mobile;
    }*/
    public function getJobTextId() {
        return $this->job->getTextId();
    }
    public function getJobId() {
        return $this->jobId;
    }
    public function getId() {
        return $this->id;
    }
    public function getDepartement() {
        return $this->job->getDepartement();
    }
    public function hasKey() {
        return $this->key;
    }
    public function getPathToImage() {
        $a = "default-profil.png";
        if($this->pathToImage != "")
            $a = $this->pathToImage;
        return $a;
    }
}

