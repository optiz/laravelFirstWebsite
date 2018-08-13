<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Crush;
use App\Qualities;
use Carbon\Carbon;
use DB;

class CrushesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $crushes = Crush::all();

        return view('crushes.index', array('crushes' => $crushes));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $crush = new Crush();
        return view('crushes.create', array('crush'=>$crush,
                                            'action'=>route('crushes.store'),
                                            'submit_text'=>"Create Crush"));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $crush = new Crush();
        $this->setAndSaveCrushData($crush, $request);

        return redirect()->route('crushes.index');
    }
    private function setAndSaveCrushData($crush, $request)
    {
        $request->validate([
            'first_name' =>'required',
            'last_name' => 'required',
            'fb_profile_link' => 'required|url',
            'contact_number' => 'required|digits:11'
        ]);

        $crush->first_name = $request->first_name;
        $crush->last_name = $request->last_name;
        $crush->fb_profile_link = $request->fb_profile_link;
        $crush->contact_number = $request->contact_number;
        $crush->created_at = Carbon::now();
        $crush->updated_at = Carbon::now();
        $crush->save();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $crush = Crush::find($id);

         
        $data = DB::table('crushes')
                ->join('qualities','qualities.crush_id','=','crushes.id')
                ->select('crushes.first_name','crushes.last_name','crushes.fb_profile_link','crushes.contact_number','qualities.id','qualities.crush_qualities')
                ->where('qualities.crush_id','=',$id)
                ->get();

        return view('crushes.show', array('crush'=>$crush))
                                    ->with('crushes',$data);

        /*echo "<pre>";
        print_r($data);*/



    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $crush = Crush::find($id);

        return view('crushes.create', array('crush'   =>$crush,
                                            'action'   =>route('crushes.id.update', array('id'=>$crush->id)),
                                            'submit_text' =>"Update Crush")
    );
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
        $crush = Crush::find($id);
        $this->setAndSaveCrushData($crush, $request);
        return redirect()->route('crushes.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $crush = Crush::find($id);
        $crush->delete();

        return redirect()->back();
    }

    public function destroy_quality($id)
    {
        $crush = Crush::find($id);
        $crush->delete();

        return redirect()->back();
    }
}
