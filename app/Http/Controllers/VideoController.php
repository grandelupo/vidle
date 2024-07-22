<?php

namespace App\Http\Controllers;

use App\Models\Chapter;
use App\Models\User;
use App\Models\Video;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class VideoController extends Controller
{

    public $title;
    public $url;
    public $subscription_level;

    public function index(Request $request)
    {
        $chapters = Chapter::all();
        $success = $request->get('success');
        $error = $request->get('error');

        if (session('success')) {
            $success = session('success');
        }

        return view('videos.index', compact('chapters', 'success', 'error'));
    }

    public function create()
    {
        return view('videos.create', ['chapters' => Chapter::all()]);
    }

    public function store(Request $request)
    {

        $request->validate([
            'title' => 'required',
            'url' => 'required',
            'subscription_level' => 'required',
            'description' => '',
            'chapter_id' => 'required',
        ]);

        Video::create($request->all());

        return redirect()->route('videos.index')
            ->with('success', 'Video created successfully.');
    }

    public function show(Video $video)
    {

        $chapters = Chapter::all();

        $user = User::find(auth()->id());
        if ($user) {
            $canIWatch = false;
            $canIWatch = $video->subscription_level === '0'
                        || $user->subscribed() && $video->subscription_level === '1'
                        || $user->isAdmin();
        }
        else {
            $canIWatch = $video->subscription_level === '0';
        }
        
        return view('videos.show', compact('video', 'chapters', 'canIWatch'));
    }

    public function edit(Video $video)
    {
        return view('videos.edit', compact('video'));
    }

    public function update(Request $request, Video $video)
    {
        $request->validate([
            'title' => 'required',
            'url' => 'required',
            'description' => 'required',
            'subscription_level' => 'required',
        ]);

        $video->update($request->all());

        return redirect()->route('videos.index')
            ->with('success', 'Video updated successfully');
    }

    public function destroy(Video $video)
    {
        $video->delete();

        return redirect()->route('videos.index')
            ->with('success', 'Video deleted successfully');
    }
}
