<?php

namespace App\Http\Controllers\Front;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Http\Requests;

use Mail;
use App\Mail\Front\Ombudsman;

use App\Http\Requests\Front\OmbudsmanRequest;

class OmbudsmanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return view('front.ombudsman.index');
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

    public function send(OmbudsmanRequest $request)
    {
        \Mail::send('mails.ombudsman', array(
                'name' => $request->get('name'),
                'email' => $request->get('email'),
                'phone' => $request->get('phone'),
                'subject_matter' => $request->get('subject'),
                'msg' => $request->get('message'),
                //'file' => $filePath,
            ), function($message) 
            {
                $message->from('no-reply@rolimnet.com.br', 'No reply');
                $message->to('pauloricardo@rolimnet.com.br', 'Rolim Net Alexandre Silvério')->subject('Você recebe uma nova mensagem, SITE: Ouvidoria | Rolim Net!');
            }
        );

        return \Redirect::route('ouvidoria.index')->with('message', 'Sua mensagem foi enviada com sucesso!');

    }

    protected function upload($file)
    {
        if ($file->isValid()) {
            $fileName = (new \DateTime())->format('d.m.Y-hsi').'.'.$file->guessExtension();
            $file->move(storage_path() . '/uploads', $fileName);
            return storage_path() . '/uploads/' . $fileName;
        } else {
            return \Redirect::route('ouvidoria.index')
                ->with('message', 'O arquivo enviado não é válido!');
        }        
    }
}
