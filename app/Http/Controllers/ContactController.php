<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
// use Mail;
// use App\Mail\SendMail;

class ContactController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        return view("index");
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
        $request->validate([
            'nome' => 'required',
            'email' => 'email|required',
            'assunto' => 'required',
            'mensagem' => 'required'
        ]);

        $contato = new MailController($request);

        try{
            $contato->sendMail();
            return back()
                    ->with('sucess', "Email enviado com sucesso!");
        }catch(\Exception $error){
            return back()
                    ->with('error', "Ocorreu um erro inesperado: {$error->getMessage()}");
        }
       

        // $data = array(
        //     'nome' => $request->nome,
        //     'email' => $request->email,
        //     'assunto' => $request->assunto,
        //     'mensagem' => $request->mensagem
        // );

        // Mail::to( config('mail.from.address') )
        //     ->send( new SendMail($data) );

        // return back()
        //             ->with('sucess', "Email enviado com sucesso!");
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
