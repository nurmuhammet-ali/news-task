<?php

namespace App\Http\Controllers;

use App\Models\News;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class NewsController extends Controller
{
    /**
     * News create
     */
    public function create(): View
    {
        return view('news.create');
    }

    /**
     * Store news
     */
    public function store(Request $request): RedirectResponse
    {
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'description' => ['required', 'string'],
            'image' => ['required'],
        ]);

        News::create([
            'author' => auth()->user()->name,
            'name' => $request->name,
            'description' => $request->description,
            'image' => $request->file('image')->store(),
        ]);

        return back()->with('status', 'Successfully created');
    }

    /**
     * News show page
     */
    public function show(News $news): View
    {
        return view('news.show', [
            'news' => $news,
        ]);
    }
}
