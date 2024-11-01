<?php

namespace App\Http\Controllers;

use App\Models\News;
use Illuminate\Contracts\View\View;

class HomepageController extends Controller
{
    /**
     * Homepage
     */
    public function index(): View
    {
        return view('home', [
            'news' => News::query()->latest()->paginate(4),
        ]);
    }
}
