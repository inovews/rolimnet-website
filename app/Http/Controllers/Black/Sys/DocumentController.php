<?php

namespace App\Http\Controllers\Black\Sys;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Http\Requests\Black\DocumentRequest;
use App\Black\Document;

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
        $document = Document::orderBy('created_at','desc')->paginate(10);
        return view('black.sys.documents.index')->withDocuments($document); 
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('black.sys.documents.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(BannerRequest $document)
    {
        //
        $document = Document::create($document->getValidRequest());

        return redirect()->route('admin.documents.index')->with('message', 'Item adicionado com sucesso.');
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
        $document = Document::findOrFail($id);
        return view('black.sys.documents.edit', compact('document'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(BannerRequest $document, $id)
    {
        //
        $document = Document::find($id)->fill($document->getValidRequest());
        $document->save();

        return redirect()->route('admin.documents.index')->with('message', 'Item editado com sucesso.');
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
        $document = Document::findOrFail($id);
        //$post->tags()->detach(); // Depois eu vejo isso.
        $document->delete();

        return redirect()->route('admin.documents.index')->with('message', 'Item removido com sucesso.');
    }
}
