<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CoffeeController extends Controller
{
   public function index(){
            $coffees=[
                ['type'=> 'Americano'],
                ['type'=> 'Latte'],
                ['type'=> 'Expresso'],
                ['type'=> 'Mocha'],
                ['type'=> 'Cappuccino'],
                ['type'=> 'Cortado']
            ];
            return view('coffee',['coffees' => $coffees,]);
       
    }
   public function show($id){
        return view('details',
        ['id' => $id,]);
    }
}
