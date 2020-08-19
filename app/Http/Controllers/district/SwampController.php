<?php

namespace App\Http\Controllers\district;

use App\Http\Controllers\Controller;

use App\swamp;
use Illuminate\Http\Request;

class SwampController extends Controller
{
    public function index()
    {
        //
        $swamps=swamp::where('district_id',Auth::guard('admin')->user()->id)->get();
        return view('district/swamp.index', compact('swamps'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('district/swamp.create');
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

        $request->validate([
            'title'=>'required',
            'subtitle'=>'required',
            'amount'=>'required',
            'image'=>'required'
        ]);
        $id=Auth::guard('publisher')->user()->id;

        $image = $request->file('image');

        $new_name = rand() . '.' . $image->getClientOriginalExtension();
        $image->move(public_path('images'), $new_name);
        $form_data = array(
            'title'       =>   $request->title,
            'subtitle'        =>   $request->subtitle,
            'amount'       =>   $request->amount,
            'publisher_id'        =>  $id,
            'image'            =>   $new_name
        );

        swamp::create($form_data);


        // $swamp = new swamp();
  
        // $swamp->title= $request->input('title');
        // $swamp->subtitle= $request->input('subtitle');
        // $swamp->amount = $request->input('amount');
        // $swamp->publisher_id = Auth::guard('publisher')->user()->id;
        // $swamp->save(); 
        return redirect()->route('swamp.index')->with('info','swamp Updated Successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\swamp  $swamp
     * @return \Illuminate\Http\Response
     */
    public function show(swamp $swamp)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\swamp  $swamp
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $swamp = swamp::find($id);
        return view('publisher/swamp.edit',['swamp'=> $swamp]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\swamp  $swamp
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, swamp $swamp)
    { 
        //
        $image_name = $request->hidden_image;
        $image = $request->file('image');
        if($image != '')
        {
            $request->validate([
                'title'    =>  'required',
                'subtitle'     =>  'required',
                'amount'     =>  'required',
                
            ]);

         
        }
        else
        {
            $request->validate([
                'title'    =>  'required',
                'subtitle'     =>  'required',
                'amount'     =>  'required'
            ]);
        }

        $form_data = array(
            'title'       =>   $request->title,
            'subtitle'        =>   $request->subtitle,
            'amount'       =>   $request->amount,
            'publisher_id'        =>  Auth::guard('publisher')->user()->id,
          
        );
  
        swamp::whereId($request->id)->update($form_data);


        //  $request->validate([
        //      'title'=>'required',
        //     'subtitle'=>'required',
        //     'amount'=>'required'
        // ]);

        // $swamp = swamp::find($request->input('id'));
        // $swamp->title= $request->input('title');
        // $swamp->subtitle= $request->input('subtitle');
        // $swamp->amount = $request->input('amount');
        // $swamp->update(); 
        return redirect()->route('swamp.index')->with('info','swamp Updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\swamp  $swamp
     * @return \Illuminate\Http\Response
     */
    public function destroy( $id)
    {
        //
        $swamp = swamp::find($id);
        //delete
        $swamp->delete();
        return redirect()->route('swamp.index');

    }
}
