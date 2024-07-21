<?php

namespace App\Http\Controllers;

use App\Models\Chapter;
use Illuminate\Http\Request;

class ChapterController extends Controller
{
    public function create()
    {
        return view('chapters.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'description' => 'required',
            'order' => '',
        ]);

        Chapter::create($request->all());

        return redirect()->route('videos.index')
            ->with('success', 'Chapter created successfully.');
    }
}
