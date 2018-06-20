<?php

namespace App\Http\Controllers\Black\Sys;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Http\Requests\Black\CostaMarquesRequest;
use App\Black\CostaMarques;

class CostaMarquesController extends Controller
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
        $costamarques = CostaMarques::orderBy('created_at','desc')->paginate(10);
        return view('black.sys.costamarques.index')->withCostamarques($costamarques); 
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('black.sys.costamarques.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(FiberRequest $costamarque)
    {
        //
        $costamarque = CostaMarques::create($costamarque->getValidRequest());

        return redirect()->route('admin.costamarques.index')->with('message', 'Item adicionado com sucesso.');
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
        $costamarque = CostaMarques::findOrFail($id);
        return view('black.sys.costamarques.edit', compact('costamarque'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(FiberRequest $costamarque, $id)
    {
        //
        $costamarque = CostaMarques::find($id)->fill($costamarque->getValidRequest());
        $costamarque->save();

        return redirect()->route('admin.costamarques.index')->with('message', 'Item editado com sucesso.');
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
        $costamarque = CostaMarques::findOrFail($id);
        //$post->tags()->detach(); // Depois eu vejo isso.
        $costamarque->delete();

        return redirect()->route('admin.costamarques.index')->with('message', 'Item removido com sucesso.');
    }
}
