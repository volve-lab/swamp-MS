<?php

namespace App\Http\Controllers\Cooperative;

use App\Http\Controllers\Controller;

use App\demand;
use App\swamp;
use Auth;
use Illuminate\Http\Request;

class DemandController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function swamp()
    {
        //
        $swamps=swamp::where('status','available')->get();
        return view('cooperative/swamp.index', compact('swamps'));
    }

    public function demand($id)
    {
        //
        // return 1;

        $demand=new Demand();
        $demand->swamp_id= $id;
        $demand->cooperative_id=Auth::guard('cooperative')->user()->id;
        $demand->save(); 

        return redirect()->route('demand.index')->with('message','demand request Successfully');
  
    }

    // public function swampRequest( $id)
    // {
       
    //     return 1;

    //     $demand=new Demand();
    //     $demand->swamp_id= $id;
    //     $demand->cooperative_id->Auth::guard('cooperative')->user()->id;
    //     $demand->save(); 

    //     return redirect()->route('demand.index')->with('message','demand request Successfully');
  
    // }
    public function index()
    {
        //
        $demands=demand::where('cooperative_id',Auth::guard('cooperative')->user()->id)->get();
        return view('cooperative/demand.index', compact('demands'));
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\demand  $demand
     * @return \Illuminate\Http\Response
     */
    public function show(demand $demand)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\demand  $demand
     * @return \Illuminate\Http\Response
     */
    public function edit(demand $demand)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\demand  $demand
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, demand $demand)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\demand  $demand
     * @return \Illuminate\Http\Response
     */
    public function destroy( $id)
    {
        //
        $demand = demand::find($id);
        //delete
        $demand->delete();
        return redirect()->route('demand.index');
    }
}
