<?php

namespace App\Http\Controllers;

use App\Models\Homepage;
use Illuminate\Http\Request;

class HomepageController extends Controller
{
    public function index()
    {
        return Homepage::pluck('url');
    }
}
