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
            $msg = array('sucess' => "Email enviado com sucesso!");
            return response()->json(json_encode($msg), 200);
        }catch(\Exception $error){
            $msg = array('error' => "Ocorreu um erro inesperado: {$error->getMessage()}");
            return response()->json(json_encode($msg), 200);
        }
    }
}
