<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;

class ProfilController extends Controller
{
    protected function initData()
    {
        parent::initData();
        $this->data['title'] = $this->getText('profil');
    }

    public function main($id)
    {
        $this->init();
        $this->initData();
        return view('profil', $this->data);
    }
}

