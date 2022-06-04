<?php

namespace App\Http\Controllers;

use App\User;
use App\Message;
use App\Callback;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CallbacksController extends Controller
{
    //
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $messages = Message::all()->sortByDesc('created_at');
        $callbacks = Callback::all()->sortByDesc('created_at');
        return view('/a-inbox', ['messages'=>$messages], ['callbacks'=>$callbacks]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('layouts.app');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, Callback $callback)
    {
        //
        $request->validate([
            'phone' => ['required', 'numeric', 'digits_between:1,10'],
        ]);

        $callback = Callback::create([
            'name' => $request -> input('name'),
            'phone' => $request -> input('phone'),
        ]);
            
        if($callback){
            return back()->with('success', 'Your callback request has been received! We\'ll contact you soonest!');
        }
        return back()->withInput()->with('errors', 'Sorry, your callback request just bounced back!');

    }



}
