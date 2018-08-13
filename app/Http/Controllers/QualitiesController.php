<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Qualities;
use Carbon\Carbon;

class QualitiesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($id)
    {
        $qualities = new Qualities();
       
        return view('crushes.add', array(
            'crush'=>$qualities,
            'id'=>$id,
            'action'=>route('qualities.store'),
            'submit_text' =>"Add Quality"

        ));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate(['crush_qualities'=>'required']);
        
        $qualities = new Qualities();
        $qualities->crush_id=$request->crush_id;
        $qualities->crush_qualities=$request->crush_qualities;
        $qualities->created_at = Carbon::now();
        $qualities->updated_at = Carbon::now();
        $qualities->save();

        return redirect()->route('crushes.id.show', array('id'=>$qualities->crush_id));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request)
    {
        $request->session()->put('crush_id',$request->input('crush_id'));
        return view('crushes.add')->with('crush_id',$request->session()->get('crush_id'));  
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
    public function destroy_quality($id)
    {
        $qualities = Qualities::find($id);
        $qualities->delete();

        return redirect()->back();
    }
}
