<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
    
    protected $data;    
    protected $BASE_URL = 'http://localhost/~user/mind-up-website/public/';
    protected $language = 'french';
    
    protected function initData()
    {
        $this->data = array(
            'js' => $this->BASE_URL.'/js/functions.js',
            'jquery' => $this->BASE_URL.'/js/jquery-1.11.3.js',
            'css' => $this->BASE_URL.'/css/stylesheet.css',
            'website' => \DB::table('texts')->where('textId', 'website')->value($this->language),
            'copyright' => \DB::table('texts')->where('textId', 'copyright')->value($this->language),
            'p' => array(
                0 => 'DEFAULT',
                1 => 'DEFAULT'),
            'img' => array(
                'logo' => array(
                    'src' => $this->BASE_URL.'/ressources/logo.png',
                    'alt' => 'DEFAULT'),
                'twitter' => array(
                    'src' => $this->BASE_URL.'/ressources/twitter.png',
                    'alt' => 'DEFAULT'),
                'facebook' => array(
                    'src' => $this->BASE_URL.'/ressources/facebook.png',
                    'alt' => 'DEFAULT'),
                'google' => array(
                    'src' => $this->BASE_URL.'/ressources/google.png',
                    'alt' => 'DEFAULT'),
                1 => array(
                    'src' => 'DEFAULT',
                    'alt' => 'DEFAULT')),
            'a' => array(
                'home' => array(
                    'text' => 'Home',
                    'url' => $this->BASE_URL.'index.php/'),
                'login' => array(
                    'text' => 'Login',
                    'url' => $this->BASE_URL.'index.php/login'),
                'team' => array(
                    'text' => 'DEFAULT',
                    'url' => 'DEFAULT'),
                'projects' => array(
                    'text' => 'DEFAULT',
                    'url' => 'DEFAULT')));
    }
}
