<?php

namespace App\Http\Controllers;

use App\Category;
use App\File;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Storage;
use League\Flysystem\Adapter\Local;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
//        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categories = Category::where('parent_id', null)->get();
        return view('home', compact('categories'));
    }
    public function items(Request $request)
    {
        $id =(int)$request->get('ref');
        $categories = Category::where('parent_id', $id)->get();
        if ($categories ->count() == 0){
           $files = File::where('subject',$id)->get();
            return view('download', compact('files'));
        }
        return view('items', compact('categories'));
    }
    public function download(Request $request)
    {
        try {
            $id =(int)$request->get('ref');
            $file = File::where('id',$id)->first()->file_name;
            return Storage::download($file);
        }

        catch(\Exception $e) {
            return redirect()->back()
                ->with('message', 'file could not be found');
        }

    }
}
