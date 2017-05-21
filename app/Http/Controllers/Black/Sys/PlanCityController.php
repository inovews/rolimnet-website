<?php

namespace App\Http\Controllers\Black\Sys;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Http\Requests\Black\PlanCityRequest;
use App\Black\PlanCity;

class PlanCityController extends Controller
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
        $plancity = PlanCity::orderBy('created_at','desc')->paginate(10);
        return view('black.sys.planscities.index')->withPlanscities($plancity); 
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('black.sys.planscities.create', compact('plancity'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(PlanCityRequest $plancity)
    {
        //
        $plancity = PlanCity::create($plancity->getValidRequest());
        

        return redirect()->route('admin.planscities.index')->with('message', 'Item adicionado com sucesso.');
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
        $plancity = PlanCity::findOrFail($id);
        return view('black.sys.planscities.edit', compact('plancity'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(PlanCityRequest $plancity, $id)
    {
        //
        $plancity = PlanCity::find($id)->fill($plancity->getValidRequest());
        $plancity->slug = null;
        $plancity->update();
        //$plancity->save();

        return redirect()->route('admin.planscities.index')->with('message', 'Item editado com sucesso.');
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
        $plancity = PlanCity::findOrFail($id);
        //$post->tags()->detach(); // Depois eu vejo isso.
        $plancity->delete();

        return redirect()->route('admin.planscities.index')->with('message', 'Item removido com sucesso.');
    }
}
