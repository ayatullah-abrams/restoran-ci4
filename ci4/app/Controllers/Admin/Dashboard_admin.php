<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;

class Dashboard_admin extends BaseController
{
    public function index()
    {
        // return view('template/admin');
        return view('templates/header');
        return view('templates/sidebar');
        return view('templates/footer');
    }

    //--------------------------------------------------------------------

}
