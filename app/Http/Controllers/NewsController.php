<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\subscriber;
use App\contact;
class NewsController extends Controller
{
    public function store(subscriber $subscribe)
    {
    	$validated=request()->validate(['email'=>['required','min:7','max:255']]);
    	subscriber::create($validated);
    	return redirect('/home');
    }

    public function contactstore(contact $contacts)
    {
    	$validater=request()->validate([
            'name'=>['required','min:7','max:255'],
            'email'=>['required','min:7','max:255'],
            'phone'=>['required','min:9','max:10'],
            'message'=>['required','max:255']
        ]);

        // dd($validater);
    	contact::create($validater);

    	return redirect('/contact');
    }
}
