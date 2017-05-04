<?php

namespace App\Http\Controllers\Front;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Http\Requests;

use Mail;
use App\Mail\Front\Contact;

use App\Http\Requests\Front\ContactRequest;

class ContactController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return view('front.contact.index');
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

    public function send(ContactRequest $request)
    {
        \Mail::send('mails.contact', array(
                'name' => $request->get('name'),
                'email' => $request->get('email'),
                'phone' => $request->get('phone'),
                'subject_matter' => $request->get('subject'),
                'msg' => $request->get('message'),
                //'file' => $filePath,
            ), function($message) 
            {
                $message->from('no-reply@rolimnet.com.br', 'No reply');
                $message->to('geral@rolimnet.com.br', 'Rolim Net Geral')->subject('Você recebe novas mensagem, SITE: Contato | Rolim Net!');
            }
        );

        return \Redirect::route('contato.index')->with('message', 'Sua mensagem foi enviada com sucesso!');

    }

    protected function upload($file)
    {
        if ($file->isValid()) {
            $fileName = (new \DateTime())->format('d.m.Y-hsi').'.'.$file->guessExtension();
            $file->move(storage_path() . '/uploads', $fileName);
            return storage_path() . '/uploads/' . $fileName;
        } else {
            return \Redirect::route('contato.index')
                ->with('message', 'O arquivo enviado não é válido!');
        }        
    }
}
