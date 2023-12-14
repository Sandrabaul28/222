<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class FilesController extends Controller
{
    public function allfiles()
    {
        return view('admin.files.allfiles',[
            'title' => 'Files '
        ])
    }
}
