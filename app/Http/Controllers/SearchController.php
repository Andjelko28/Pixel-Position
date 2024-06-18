<?php

namespace App\Http\Controllers;

use App\Models\Job;
use Illuminate\Http\Request;

class SearchController extends Controller
{
    public function _invoke()
    {
        $jobs = Job::where('title', 'LIKE', '%' . request('q') . '%')->get();
        return view('results', ['jobs' => $jobs]);
    }
}
