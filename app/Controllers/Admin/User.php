<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;

class User extends BaseController
{
    public function index()
    {
        echo "Halo ini adalah controller User di dalam Sub direktori Admin";
    }
}