<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class C_dasboard extends BaseController
{

    public function about()
    {
        return view('v_dasboard');
    }
}