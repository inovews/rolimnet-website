<?php

namespace App\Http\Controllers\Black\Sys;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Http\Requests\Black\FiberRequest;
use App\Black\Fiber;

class FiberController extends Controller
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
        $fiber = Fiber::orderBy('created_at','desc')->paginate(10);
        return view('black.sys.fibers.index')->withFibers($fiber); 
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('black.sys.fibers.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(FiberRequest $fiber)
    {
        //
        $fiber = Fiber::create($fiber->getValidRequest());

        return redirect()->route('admin.fibers.index')->with('message', 'Item adicionado com sucesso.');
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
        $fiber = Fiber::findOrFail($id);
        return view('black.sys.fibers.edit', compact('fiber'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(FiberRequest $fiber, $id)
    {
        //
        $fiber = Fiber::find($id)->fill($fiber->getValidRequest());
        $fiber->save();

        return redirect()->route('admin.fibers.index')->with('message', 'Item editado com sucesso.');
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
        $fiber = Fiber::findOrFail($id);
        //$post->tags()->detach(); // Depois eu vejo isso.
        $fiber->delete();

        return redirect()->route('admin.fibers.index')->with('message', 'Item removido com sucesso.');
    }
}
