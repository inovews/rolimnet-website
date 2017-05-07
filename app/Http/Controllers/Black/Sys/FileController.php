<?php

namespace App\Http\Controllers\Black\Sys;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Http\Requests\Black\FileRequest;
use App\Black\File;


class FileController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:admin'); 
    }

    private $folder = 'arquivos/documentos-publicos';
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $file = File::orderBy('created_at','desc')->paginate(10);
        return view('black.sys.files.index')->withFiles($file); 
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('black.sys.files.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(FileRequest $file)
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

    /*protected function upload($file)
    {
        if ($file->isValid()) {
            $fileName = (new \DateTime())->format('d.m.Y-hsi').'.'.$file->guessExtension();
            $file->move(storage_path() . '/uploads', $fileName);
            return storage_path() . '/uploads/' . $fileName;
        } else {
            return \Redirect::route('contato.index')
                ->with('message', 'O arquivo enviado não é válido!');
        }        
    }*/
}
