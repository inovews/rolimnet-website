<?php

namespace App\Http\Controllers\Black\Sys;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Http\Requests\Black\FileRequest;
use App\Black\File;

use Illuminate\Support\Facades\Input;


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
        $whitelist = array('jpg', 'JPG', 'jpeg', 'JPEG', 'png', 'PNG', 'pdf', 'PDF');
        $img_name = $_FILES['file']['name'];
        $file = Input::file("file");
        
        //process each file
        if (!empty($img_name)) {
            $rename_img = '';
            $ext = pathinfo($img_name);
            $ext = $ext['extension'];
            if (in_array($ext, $whitelist)) {
                $rename_img = "CRT" . date('YmdHis') . '.' . $ext;
            } else {
                return redirect()->back()->with('error', 'The image file must be jpg, jpeg, png format.');
            }
            $file->posts_picture = $rename_img;
            $file->move(($folder), $rename_img);
        }

        $file = File::create($file->getValidRequest());

        return redirect()->route('admin.files.index')->with('message', 'Item adicionado com sucesso.');
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
