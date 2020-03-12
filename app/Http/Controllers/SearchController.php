<?php

namespace App\Http\Controllers;
use App\User;
use Illuminate\Http\Request;

class SearchController extends Controller
{
    //
   public  function   Search(Request $request){
        $q=$request->input('q');
        $user = User::where('name','LIKE','%'.$q.'%')->orWhere('email','LIKE','%'.$q.'%')->get();
        if(count($user) > 0)
            return view('search')->withDetails($user)->withQuery ( $q );
        else return view ('search')->withMessage('No Details found. Try to search again !');
    }











}
