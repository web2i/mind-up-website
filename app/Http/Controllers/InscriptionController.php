<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;

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
            !(isset($_POST['mail'])
                && isset($_POST['password'])
                && isset($_POST['password2'])))
        {
            $go = false;
            //echo 'Error : il faut remplir tous les champs';
        }
        if($go
            && !(strlen($_POST['mail'])
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
            $this->addMember($_POST['mail'], $_POST['password']);
        }
        if($connected)
            return view('inscription', $this->data);
        else
            return "not connected";
    }
    
    private function addMember($mail, $password)
    {
        $hash = password_hash($password,  PASSWORD_DEFAULT);
        \DB::table('members')->insert(
            ['email' => $mail, 'hash' => $hash]
        );
        echo "Inscription ok :)";
    }
    
    
}
