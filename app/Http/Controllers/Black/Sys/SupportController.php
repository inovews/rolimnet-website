<?php

namespace App\Http\Controllers\Black\Sys;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Http\Requests\Black\SupportRequest;
use App\Black\Support;

class SupportController extends Controller
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
        $support = Support::orderBy('created_at','desc')->paginate(10);
        return view('black.sys.supports.index')->withSupports($support); 
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('black.sys.supports.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(BannerRequest $support)
    {
        //
        $support = Support::create($support->getValidRequest());

        return redirect()->route('admin.supports.index')->with('message', 'Item adicionado com sucesso.');
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
        $support = Support::findOrFail($id);
        return view('black.sys.supports.edit', compact('support'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(SupportRequest $support, $id)
    {
        //
        $support = Support::find($id)->fill($support->getValidRequest());
        $support->save();

        return redirect()->route('admin.supports.index')->with('message', 'Item editado com sucesso.');
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
        $support = Support::findOrFail($id);
        //$post->tags()->detach(); // Depois eu vejo isso.
        $support->delete();

        return redirect()->route('admin.supports.index')->with('message', 'Item removido com sucesso.');
    }
}
