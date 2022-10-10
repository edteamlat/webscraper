<?php

namespace App\Controllers;

use App\Models\Task;

class HomeController
{
    public function show()
    {
        return view('index');
    }
}
