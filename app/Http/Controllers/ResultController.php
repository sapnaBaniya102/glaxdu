<?php

namespace App\Http\Controllers;
use App\Models\siteconfig;
use App\Models\coursecat;
use App\Models\result;
use Illuminate\Http\Request;

class resultController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
         $result=result::paginate(8);
        return view('admin.result.index',compact('result'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
         return view('admin.result.create');
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
            'name'=>'required',

              'date'=>'required',
               'link'=>'required',

                  'status'=>'required',

        ]));

        $result=new result([
            'name'=>$request->get('name'),

              'date'=>$request->get('date'),
               'link'=>$request->get('link'),

                  'status'=>$request->get('status'),
        ]);
        $result->save();
        return redirect()->route('result.index')->with('success','Result added successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Result  $result
     * @return \Illuminate\Http\Response
     */
    public function show(result $result)
    {
          return view('admin.result.show',compact('result'));
    }

    public function search(Request $request){
        // Get the search value from the request
        $search = $request->input('search');
        $categories = Coursecat::all();
        $sites = SiteConfig::all();

        // Search in the title and body columns from the posts table
        $results = result::query()
            ->where('name', 'LIKE', "%{$search}%")
            ->paginate(8);

        // Return the search view with the resluts compacted
        return view('result', compact('results', 'categories','sites'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Result  $result
     * @return \Illuminate\Http\Response
     */
    public function edit(result $result)
    {
         return view('admin.result.edit',compact('result'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Result  $result
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, result $result)
    {
        $request->validate([
              'name'=>'required',

              'date'=>'required',
               'link'=>'required',

                  'status'=>'required',

        ]);
        $result->update($request->all());
        return redirect()->route('result.index')->with('update','Result updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Result  $result
     * @return \Illuminate\Http\Response
     */
    public function destroy(result $result)
    {
         $result->delete();
        return redirect('result')->with('delete', 'Deleted successfully');
    }

}
