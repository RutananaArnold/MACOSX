<?php

namespace App\Http\Controllers;

use App\User;
use App\Message;
use App\Callback;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class MessagesController extends Controller
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
        return view('layouts.contact-form');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, Message $message)
    {
        //
        $message = Message::create([
            'name' => $request -> input('name'),
            'email' => $request -> input('email'),
            'phone' => $request -> input('phone'),
            'message' => $request -> input('message'),
        ]);
            
        if($message){
            return back()->with('success', 'Your message has been sent successfully! Thank you for contacting us. We\'ll email you soonest.');
        }
        return back()->withInput()->with('errors', 'Sorry, your message just bounced back!');

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
