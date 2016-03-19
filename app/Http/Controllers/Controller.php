<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use App\MyClasses\User;
use Session;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
    
    protected $data;    
    protected $BASE_URL = 'http://localhost/~user/mind-up-website/public/';
    protected $language = 'french';
    protected $user;
    
    protected function init()
    {
        $this->user = User::create();
        if(Session::get('user'))
            $this->user = Session::get('user');
    }
    
    protected function initData()
    {
        $this->data = array(
            'js' => $this->BASE_URL.'/js/functions.js',
            'jquery' => $this->BASE_URL.'/js/jquery-1.11.3.js',
            'css' => $this->BASE_URL.'/css/stylesheet.css',
            'website' => $this->getText('website'),
            'copyright' => $this->getText('copyright'),
            'p' => array(
                0 => 'DEFAULT',
                1 => 'DEFAULT'),
            'img' => array(
                'logo' => array(
                    'src' => $this->BASE_URL.'/ressources/logo.png',
                    'alt' => $this->getText('alt-logo')),
                'twitter' => array(
                    'src' => $this->BASE_URL.'/ressources/twitter.png',
                    'alt' => $this->getText('alt-twitter')),
                'facebook' => array(
                    'src' => $this->BASE_URL.'/ressources/facebook.png',
                    'alt' => $this->getText('alt-facebook')),
                'google' => array(
                    'src' => $this->BASE_URL.'/ressources/google.png',
                    'alt' => $this->getText('alt-google'))),
            'a' => array(
                'home' => array(
                    'text' => $this->getText('a-home'),
                    'url' => $this->BASE_URL.'index.php/'),
                'login' => array(
                    'text' => $this->getText('a-login'),
                    'url' => $this->BASE_URL.'index.php/login'),
                'team' => array(
                    'text' => $this->getText('a-team'),
                    'url' => $this->getUrl('index.php/team')),
                'projects' => array(
                    'text' => $this->getText('a-projects'),
                    'url' => $this->getUrl('index.php/projects'))));
    }
    
    protected function getText($id)
    {
        $text = \DB::table('texts')->where('textId', $id)->value($this->language);
        if(!$text || $text === '')
        {
            echo ("ERROR : no text in database for : " . $id . "</br>");
        }
        return $text;
    }
    
    protected function getUrl($path)
    {
        return $this->BASE_URL.$path;
    }
}

