<?php

namespace Biblios\Http\Controllers;

use Illuminate\Http\Request;

class PaginaController extends Controller
{
    public function home(){
        $lista = [
        "Vai allo store",
        "Vai al market",
        "Vai al lavoro",
        "Vai al concerto"
        ];
        
        return view('benvenuto', [
        
        'taskso'=>$lista,
        'foo'=> 'foobar'
        
        ]);
    }
    
    public function about(){
        return view('about');
    }
    public function contatto(){
        return view('contatto');
    }
    
}
