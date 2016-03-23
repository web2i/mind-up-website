<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;

class EditProfilController extends Controller
{
    protected function initData()
    {
        parent::initData();
        $this->data['title'] = $this->getText('a-edit-profil');
    }

    public function main()
    {
        $this->init();
        $this->initData();
        return view('edit-profil', $this->data);
    }
}

