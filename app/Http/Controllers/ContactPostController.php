<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;

class ContactPostController extends Controller
{
    protected function initData()
    {
        parent::initData();
    }
    
    protected function mailInfos($post) {
        $mail = [];
        foreach($post as $a => $b) {
            $mail = $mail . $a . ' - ' . $b .'</br>';
        }
    }
    protected function mailDevis($post) {
    /*[nameDevis] => 
    [firstnameDevis] => 
    [companyDevis] => 
    [emailDevis] => 
    [phoneDevis] => 
    [BudgetDevis] => 
    [DureeDeveloppementDevis] => 
    [DateLimiteDevis] => 
    [ProjectNameDevis] => 
    [textContactDevis] => 
    [_token] => Fl3s48WbnMmRmGXm1VcreEjLiT5zHmtOkQNUAUxW*/
    }
    protected function mailRdv($post) {
    /*[nameRdv] => 
    [firstnameRdv] => 
    [companyRdv] => 
    [emailRdv] => 
    [phoneRdv] => 
    [textContactRdv] => 
    [_token] => Fl3s48WbnMmRmGXm1VcreEjLiT5zHmtOkQNUAUxW*/
    }
    protected function mailAutre($post) {
    /*[nameAutre] => 
    [firstnameAutre] => 
    [companyAutre] => 
    [emailAutre] => 
    [phoneAutre] => 
    [textContactAutre] => 
    [_token] => Fl3s48WbnMmRmGXm1VcreEjLiT5zHmtOkQNUAUxW*/
    }
    

    public function main()
    {
        $this->init();
        $this->initData();
        
        
        
        /*$email = [];
        if(isset($_POST['object']) && $_POST['object'] == 'information') {
            $email = $this->mailInfos($_POST);
        }
        if(isset($_POST['object']) && $_POST['object'] == 'budget') {
            $email = $this->mailDevis($_POST);
        }
        if(isset($_POST['object']) && $_POST['object'] == 'appointment') {
            $email = $this->mailRdv($_POST);
        }
        if(isset($_POST['object']) && $_POST['object'] == 'other') {
            $email = $this->mailAutre($_POST);
        }*/
        
        $email = 'Email </br>';
        foreach($_POST as $a => $b) {
            if($a != '_token')
                $email = $email . $a . ' - ' . $b .'</br>';
        }
        
        return $email;
    }
}

