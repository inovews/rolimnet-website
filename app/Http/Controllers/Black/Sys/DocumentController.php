<?php

namespace App\Http\Controllers\Black\Sys;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use Storage;

class DocumentController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:admin');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return view('black.sys.documents.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    public function upload(UploadRequest $request){
        $extension = Input::file('file')->getClientOriginalExtension();
        $filename = rand(11111111, 99999999). '.' . $extension;
        Input::file('file')->move(
          base_path().'/public/files/uploads/', $filename
        );
        if(\Auth::user()->level == 2) {
            $approved = $request['approved'];
        } else {
            $approved = 3;
        }
        $fullPath = '/public/files/uploads/' . $filename;
        $upload = new Uploads(array(
            'name' => $request['name'],
            'format' => $extension,
            'path' => $fullPath,
            'approved' => $approved,
        ));
        $upload->save();
        $uploads = Uploads::orderBy('approved')->get();
        return view('uploadspanel.index', compact('uploads'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
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
