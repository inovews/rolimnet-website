<?php

namespace App\Http\Controllers\Black\Sys;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Http\Requests\Black\SeringueirasRequest;
use App\Black\Seringueiras;

class SeringueirasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
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
        $seringueiras = Seringueiras::orderBy('created_at','desc')->paginate(250);
        return view('black.sys.seringueiras.index')->withCostamarques($seringueiras); 
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('black.sys.seringueiras.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(SeringueirasRequest $seringueira)
    {
        //
        $seringueira = Seringueiras::create($seringueira->getValidRequest());

        return redirect()->route('admin.seringueiras.index')->with('message', 'Item adicionado com sucesso.');
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
        $seringueira = Seringueiras::findOrFail($id);
        return view('black.sys.seringueiras.edit', compact('seringueira'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(SeringueirasRequest $seringueira, $id)
    {
        //
        $seringueira = Seringueiras::find($id)->fill($seringueira->getValidRequest());
        $seringueira->save();

        return redirect()->route('admin.seringueiras.index')->with('message', 'Item editado com sucesso.');
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
        $seringueira = Seringueiras::findOrFail($id);
        //$post->tags()->detach(); // Depois eu vejo isso.
        $seringueira->delete();

        return redirect()->route('admin.seringueiras.index')->with('message', 'Item removido com sucesso.');
    }
}
