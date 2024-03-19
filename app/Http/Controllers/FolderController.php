<?php

namespace App\Http\Controllers;

use App\Models\Folder;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class FolderController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $folders = Folder::all();
        return view('admin.folder.index', compact('folders'));
    }

    public function store(Request $request)
    {
        $folder = Folder::create([
            'name' => $request->name,
            'slug' => Str::slug($request->name),
            'link' => $request->link,
            'folder_type' => 'free',
            'folder_limit' => 20,
        ]);
    }

    public function folderImage(Folder $folder)
    {
        return view('admin.folder.folder_images.index', compact('folder'));
    }
}
