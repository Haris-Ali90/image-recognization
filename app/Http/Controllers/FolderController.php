<?php

namespace App\Http\Controllers;

use App\Models\Folder;
use Illuminate\Http\Request;
use function Symfony\Component\String\slice;
use function Symfony\Component\String\Slugger\slug;

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
        return view('admin.folder.index');
    }

    public function store(Request $request)
    {
        $folder = Folder::create([
            'name' => $request->name,
            'slug' => slug($request->name),
            'link' => $request->link,
            'folder_type' => 'free',
            'folder_limit' => 20,
        ]);
    }
}
