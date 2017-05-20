<?php

namespace App\Http\Controllers\Front\CentralCliente;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Front\CentralCliente\CentralClienteCategory;
use App\Front\CentralCliente\Comments;
use App\Mailers\AppMailer;
use App\Front\CentralCliente\Priority;
use App\Front\CentralCliente\Status;
use App\Front\CentralCliente\Ticket;
use App\Front\CentralCliente\User;

class TicketsController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return view('front.central-cliente.front.tickets.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $categories = CentralClienteCategory::all();
        $prioritys = Priority::all();
        $statuses = Status::all();

        return view('front.central-cliente.front.tickets.create', compact('categories', 'statuses', 'prioritys'));
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
