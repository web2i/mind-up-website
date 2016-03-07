<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;

class ProjectController extends Controller
{
    public function main($id)
    {
        $data['id'] = $id;
        $data['title'] = 'Title';
        return view('project', $data);
    }
}
