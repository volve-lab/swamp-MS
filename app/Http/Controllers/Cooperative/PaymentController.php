<?php

namespace App\Http\Controllers\Cooperative;

use App\Http\Controllers\Controller;

use App\payment;
use App\demand;
use Illuminate\Http\Request;
use DB;
use Auth;
use App\contract;
use App\swamp;

class PaymentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

   
    public function index()
    {
        //
        $payments=payment::where('demand_id',DB::table('demands')->where('cooperative_id',Auth::guard('cooperative')->user()->id)->value('id'))->get();
        return view('cooperative/payment.index', compact('payments'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($id)
    {
        //
        $demand=demand::find($id);
        return view('cooperative/payment.create',['demand'=> $demand]);

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
        // return 1;
        $request->validate([
            'bank_receipt'=>'required',
            'id'=>'required'
        ]);

         $bank_receipt = $request->file('bank_receipt');

        $new_name = rand() . '.' . $bank_receipt->getClientOriginalExtension();
        $bank_receipt->move(public_path('bank_receipts'), $new_name);
        $form_data = array(
            'bank_receipt'       =>   $new_name,
            'demand_id'        =>   $request->id
        );

        payment::create($form_data);


        
        return redirect()->route('payment.index')->with('info','cooperative_info saved Successfully');
    
        
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\payment  $payment
     * @return \Illuminate\Http\Response
     */
    public function show(payment $payment)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\payment  $payment
     * @return \Illuminate\Http\Response
     */
    public function edit(payment $payment)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\payment  $payment
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, payment $payment)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\payment  $payment
     * @return \Illuminate\Http\Response
     */
    public function destroy(payment $payment)
    {
        //
    }

    public function contract()
    {
         $contracts=contract::where('payment_id',payment::where('demand_id',DB::table('demands')->where('cooperative_id',Auth::guard('cooperative')->user()->id)->value('id'))->value('id'))->get();
        return view('cooperative/contract.index', compact('contracts'));
    }

    public function statusContractApprove( $id)
    {
        $contract=contract::find($id);
        contract::where('id',$id)
            ->update(['status' => 'in','comment'=>'your allowed to use swamp']);

            swamp::where('id',$contract->payment->demand->swamp_id)
            ->update(['status' => 'not available','comment'=>'swamp not available']);
            
        return redirect()->route('cooperative.contract.index')->with('message',' request approve Successfully');
  
    }

    public function statusContractDeny( $id)
    {
        //
        contract::where('id',$id)
            ->update(['status' => 'Deny','comment'=>'we can tolk']);
        return redirect()->route('cooperative.contract.index');
    }

}
