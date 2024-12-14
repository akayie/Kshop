<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Payment;
use App\Http\Requests\PaymentRequest;

class PaymentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $payments = Payment::orderBy('id','DESC')->paginate(15);
        return view('admin.payments.index', compact('payments'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $payments =Payment::all();
        return view('admin.payments.create',compact ('payments'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(PaymentRequest $request)
    {
    //      dd($request);
       $payments=Payment::create($request->all());
       {
        
        //file upload
        $file_name = time().'.'.$request->logo->extension();//12341234.png

        $upload = $request->logo->move(public_path('images/payments/'),$file_name); //upload to folder
        if($upload){
            $payments->logo = "/images/payments/".$file_name; //upload to database
        }
       $payments->save();
       return redirect()->route('backend.payments.index');
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
