<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PortfolioController extends Controller
{
    public function index(){
        return view('index');
    }

    public function store(Request $request){
        $request->validate([
            'name' => 'required',
            'email' => 'email|required',
            'topic' => 'required',
            'message' => 'required'
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
    }
}
