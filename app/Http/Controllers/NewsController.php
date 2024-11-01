<?php

namespace App\Http\Controllers;

use App\Models\News;

class NewsController extends Controller
{
    /**
     * News show page
     */
    public function show(News $news)
    {
        return view('news.show', [
            'news' => $news,
        ]);
    }
}
