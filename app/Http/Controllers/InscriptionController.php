<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use DB;

class InscriptionController extends Controller
{
    protected function initData()
    {
        parent::initData();
        $this->data['title'] = 'Inscription';
    }

    public function main()
    {   
        $go = true;
        $connected = true;
        $this->initData();
        if($go &&
            !(isset($_POST['email'])
                && isset($_POST['password'])
                && isset($_POST['password2'])))
        {
            $go = false;
            //echo 'Error : il faut remplir tous les champs';
        }
        if($go
            && !(strlen($_POST['email'])
            && strlen($_POST['password'])
            && strlen($_POST['password2']) ))
        {
            $go = false;
            echo 'Error : il faut remplir tous les champs';
        }
        if($go && $_POST['password']!==$_POST['password2'])
        {
            $go = false;
            echo 'Error : mots de passe différents';
        }
        if($go)
        {
            //var_dump($_POST);
            $this->addMember($_POST['email'], $_POST['password']);
        }
        if($connected)
            return view('inscription', $this->data);
        else
            return "not connected";
    }
    
    private function addMember($email, $password)
    {
        $hash = password_hash($password,  PASSWORD_DEFAULT);
        echo(DB::table('members')->insert(
            ['email' => $email, 'hash' => $hash]
        ));
        //echo "Inscription ok :)";
    }
    
    
}
