<?php

namespace App\Http\Controllers;

use App\Models\message;
use Illuminate\Http\Request;

class MessageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
         $message=message::all();
        return view('admin.message.index',compact('message'));
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
         $request-> validate([
             'name' => 'required',
 'email' => 'required',
  'subject' => 'required',
   'details' => 'required',
    'phone' => 'required',
        ]

        );
        $message=new message([
            'name'=> $request-> get('name'),
      'email'=> $request-> get('email'),
      'subject'=> $request-> get('subject'),
      'details'=> $request-> get('details'),
      'phone'=> $request-> get('phone'),

        ]);

        $message->save();

        return redirect('contacts')->with('sucess', 'Message sucessfully created');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\message  $message
     * @return \Illuminate\Http\Response
     */
    public function show(message $message)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Message  $message
     * @return \Illuminate\Http\Response
     */
    public function edit(message $message)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Message  $message
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, message $message)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Message  $message
     * @return \Illuminate\Http\Response
     */
    public function destroy(message $message)
    {
        $message->delete();
        return redirect('message')->with('deleted','deleted succesfully');
    }
}
