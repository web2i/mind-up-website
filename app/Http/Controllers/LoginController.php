<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;

class LoginController extends Controller
{
    protected function initData()
    {
        parent::initData();
        $this->data['title'] = 'Home';
    }

    public function main()
    {
        $this->initData();
        //var_dump($_POST);
        if(isset($_POST['mail'])
            && isset($_POST['password'])
            )
        {
            $this->checkAuth($_POST['mail'], $_POST['password']);
        }
        return view('login', $this->data);
    }
    
    public function checkAuth($mail, $password)
    {
        $hash = \DB::table('members')->where('email', $mail)->value('hash');
        if (password_verify ($password , $hash ))
        {
            echo "connected!";
            header('Location: '.  $this->BASE_URL . 'index.php/private-home');
            exit();
        }
    }
}
