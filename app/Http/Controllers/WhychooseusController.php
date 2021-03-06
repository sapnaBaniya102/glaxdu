<?php

namespace App\Http\Controllers;

use App\Models\whychooseus;
use Illuminate\Http\Request;

class WhychooseusController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $whychooseus=Whychooseus::paginate(4);
        return view('admin.whychooseus.index',compact('whychooseus'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.whychooseus.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate(([
            'heading'=>'required',
            'text'=>'required',
            'status'=>'required',

       ]));

       $whychooseus=new Whychooseus([
           'heading'=>$request->get('heading'),
             'text'=>$request->get('text'),
                 'status'=>$request->get('status'),
       ]);
       $whychooseus->save();
       return redirect('whychooseus')->with('success','Whychooseus added successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Whychooseus  $whychooseus
     * @return \Illuminate\Http\Response
     */
    public function show(Whychooseus $whychooseus)
    {
        return view('admin.whychooseus.show',compact('whychooseus'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Whychooseus  $whychooseus
     * @return \Illuminate\Http\Response
     */
    public function edit(Whychooseus $whychooseu)
    {
        return view('admin.whychooseus.edit',compact('whychooseu'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Whychooseus  $whychooseus
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Whychooseus $whychooseu)
    {
        $request->validate([
            'heading'=>'required',
            'text'=>'required',
            'status'=>'required',
        ]);

        $whychooseu->update($request->all());
        return redirect()->route('whychooseus.index')->with('update','Whychooseus update successfully.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Whychooseus  $whychooseus
     * @return \Illuminate\Http\Response
     */
    public function destroy(Whychooseus $whychooseu)
    {
        $whychooseu->delete();
        return redirect('whychooseus')->with('delete', 'Deleted successfully');
    }

}
