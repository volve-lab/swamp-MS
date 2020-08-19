<?php

namespace App\Http\Controllers\Cooperative;

use App\Http\Controllers\Controller;
use App\cooperative_info;
use Illuminate\Http\Request;
use Auth;
class CooperativeInfoController extends Controller
{
    public function index()
    {
        //
        $cooperative_infos=cooperative_info::where('cooperative_id',Auth::guard('cooperative')->user()->id)->get();
        return view('cooperative/cooperative_info.index', compact('cooperative_infos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('cooperative/cooperative_info.create');
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
            'certificate'=>'required',
            'names'=>'required',
            'services'=>'required',
            
            'email'=>'required',
            'phone'=>'required',
            'leader'=>'required',
            'location'=>'required'
        ]);
        // return 1;
        $id=Auth::guard('cooperative')->user()->id;

         $certificate = $request->file('certificate');

        $new_name = rand() . '.' . $certificate->getClientOriginalExtension();
        $certificate->move(public_path('certificates'), $new_name);
        $form_data = array(
            'names'       =>   $request->names,
            'services'        =>   $request->services,
            'email'       =>   $request->email,
            'cooperative_id'        =>  $id,
            'phone'       =>   $request->phone,
            'leader'        =>  $request->leader,
            'location'        =>  $request->location,
            'certificate'            =>   $new_name
        );

        cooperative_info::create($form_data);


        
        return redirect()->route('cooperative.index')->with('info','cooperative_info saved Successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\cooperative_info  $cooperative_info
     * @return \Illuminate\Http\Response
     */
    public function show(cooperative_info $cooperative_info)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\cooperative_info  $cooperative_info
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $cooperative_info = cooperative_info::find($id);
        return view('cooperative/cooperative_info.edit',['cooperative_info'=> $cooperative_info]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\cooperative_info  $cooperative_info
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, cooperative_info $cooperative_info)
    { 
        //
        $image_name = $request->hidden_image;
        $certificate = $request->file('certificate');
        if($certificate != '')
        {

            $request->validate([
                'certificate'=>'required',
                'names'=>'required',
                'services'=>'required',
                'email'=>'required',
                'phone'=>'required',
                'leader'=>'required',
                'location'=>'required',
                
            ]);

         
        }
        else
        {
            $request->validate([
                // 'certificate'=>'required',
                'names'=>'required',
                'services'=>'required',
                'email'=>'required',
                'phone'=>'required',
                'leader'=>'required',
                'location'=>'required',
            ]);
            // return 1;
        }
         $certificate = $request->file('certificate');
        if($certificate){
        $new_name = rand() . '.' . $certificate->getClientOriginalExtension();
        $certificate->move(public_path('certificates'), $new_name);

        
        $form_data = array(
            'names'       =>   $request->names,
            'services'        =>   $request->services,
            'email'       =>   $request->email,
            'cooperative_id'        =>  Auth::guard('cooperative')->user()->id,
            'phone'       =>   $request->phone,
            'leader'        =>  $request->leader,
            'location'        =>  $request->location,
            'certificate'            =>   $new_name
          
        );

  
        cooperative_info::whereId($request->id)->update($form_data);

    }else{
        $form_data = array(
            'names'       =>   $request->names,
            'services'        =>   $request->services,
            'email'       =>   $request->email,
            'cooperative_id'        =>  Auth::guard('cooperative')->user()->id,
            'phone'       =>   $request->phone,
            'leader'        =>  $request->leader,
            'location'        =>  $request->location,
        );

  
        cooperative_info::whereId($request->id)->update($form_data);
    }
       
        return redirect()->route('cooperative.index')->with('info','cooperative_info Updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\cooperative_info  $cooperative_info
     * @return \Illuminate\Http\Response
     */
    public function destroy( $id)
    {
        //
        $cooperative_info = cooperative_info::find($id);
        //delete
        $cooperative_info->delete();
        return redirect()->route('cooperative.index');

    }
}
