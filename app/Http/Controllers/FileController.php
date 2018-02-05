<?php

namespace App\Http\Controllers;

use App\Category;
use App\customs\upload;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Storage;

class FileController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.files.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $subjects = Category::where('type', 'subject')->get();
        $types = Category::where('type', 'category')->get();
        $classes = Category::where('type', 'class')->get();
        return view('admin.files.create', compact('subjects','types', 'classes'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [

            'file' => "required|mimes:pdf,doc,docx|max:10000",

        ]);


        if(Input::hasFile('file'))
        {
//            dd($request->all());
            $type = Input::get('type');
            Category::find('id');
            $file = Input::file('file');

            $extension = $file->getClientOriginalExtension();
            Storage::disk('local')->put($file->getClientOriginalName(),  File::get($file));


            $entry = new \App\File();

            $entry->file_name ='uploads'. $file->getClientOriginalName();
            $entry->title = Input::get('title');
            $entry->type = Input::get('type');
            $entry->class = Input::get('class');
            $entry->subject = Input::get('subject');
            $entry->save();


            return redirect(url('/'));
        }

        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
//        $entry = File::where('filename', '=', $id)->firstOrFail();
//        $file = Storage::disk('local')->get($entry->filename);
//
//        return (new Response($file, 200))
//            ->header('Content-Type', $entry->mime);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
