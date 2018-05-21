<?php

namespace App\Http\Controllers\Front;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Http\Requests;

use Mail;
use App\Mail\Front\Support;

use App\Http\Requests\Front\SupportRequest;
use App\Http\Requests\Front\SupportWppRequest;

class SupportController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $attributes = [
            'data-theme' => 'white',
            'data-type' => 'audio',
        ];

        return view('front.support.index', compact('attributes'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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

    public function send(SupportRequest $request)
    {
        \Mail::send('mails.support', array(
            'name' => $request->get('name'),
            'email' => $request->get('email'),
            'phone' => $request->get('phone'),
            'subject_matter' => $request->get('subject'),
            'msg' => $request->get('message'),
                //'file' => $filePath,
        ), function($message) 
        {
            $message->from('no-reply@rolimnet.com.br', 'No reply');
            $message->to('suporte@rolimnet.com.br', 'Rolim Net Suporte')->subject('Você recebeu uma nova mensagem, SITE: Suporte | Rolim Net!');
        }
    );
        return \Redirect::route('suporte.index')->with('message', 'Sua mensagem foi enviada com sucesso!');
    }

    protected function upload($file)
    {
        if ($file->isValid()) {
            $fileName = (new \DateTime())->format('d.m.Y-hsi').'.'.$file->guessExtension();
            $file->move(storage_path() . '/uploads', $fileName);
            return storage_path() . '/uploads/' . $fileName;
        } else {
            return \Redirect::route('suporte.index')
            ->with('message', 'O arquivo enviado não é válido!');
        }        
    }

    public function whatsapp(SupportWppRequest $supportwpp)
    {
        //
        $supportwpp = SupportWppRequest::create($supportwpp->getValidRequest());

        //return redirect()->route('suporte.index')->with('message', 'Item adicionado com sucesso.');
    }
}
