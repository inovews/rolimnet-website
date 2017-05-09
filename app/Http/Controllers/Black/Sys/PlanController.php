<?php

namespace App\Http\Controllers\Black\Sys;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Http\Requests\Black\PlanRequest;
use App\Black\Plan;
use App\Black\PlanCity;

class PlanController extends Controller
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
        $plan = Plan::orderBy('created_at','desc')->paginate(10);
        return view('black.sys.plans.index')->withPlans($plan); 
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('black.sys.plans.create', compact('plan'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(PlanRequest $plan)
    {
        //
        $plan = Plan::create($plan->getValidRequest());
        

        return redirect()->route('admin.plans.index')->with('message', 'Item adicionado com sucesso.');
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
        $plan = Plan::findOrFail($id);
        return view('black.sys.plans.edit', compact('plan'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(PlanRequest $plan, $id)
    {
        //
        $plan = Plan::find($id)->fill($plan->getValidRequest());
        $plan->save();

        return redirect()->route('admin.plans.index')->with('message', 'Item editado com sucesso.');
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
        $plan = Plan::findOrFail($id);
        //$post->tags()->detach(); // Depois eu vejo isso.
        $plan->delete();

        return redirect()->route('admin.plans.index')->with('message', 'Item removido com sucesso.');
    }

    /*function slug( $name ) {

    $slug = Str::slug( $name );
    $slugs = $this->whereRaw("slug REGEXP '^{$slug}(-[0-9]*)?$'");

    if ($slugs->count() === 0) {
        return $slug;
    }

    // Get the last matching slug
    $lastSlug = $slugs->orderBy('slug', 'desc')->first()->slug;

    // Strip the number off of the last slug, if any
    $lastSlugNumber = intval(str_replace($slug . '-', '', $lastSlug));

    // Increment/append the counter and return the slug we generated
    return $slug . '-' . ($lastSlugNumber + 1);
}*/
}
