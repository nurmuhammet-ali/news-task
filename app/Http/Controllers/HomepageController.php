<?php

namespace App\Http\Controllers;

use App\Models\News;

class HomepageController extends Controller
{
    /**
     * Homepage
     */
    public function index()
    {
        return view('home', [
            'news' => News::query()->paginate(4),
        ]);
    }
}
