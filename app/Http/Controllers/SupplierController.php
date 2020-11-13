<?php

namespace App\Http\Controllers;

use App\Models\Supplier;
use Illuminate\Http\Request;
use App\Http\Requests\SupplierRequest;
use JsValidator;

class SupplierController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $supplier = Supplier::all();
        return view ('Backend.pages.Supplier.supplier', [
            'supplier' => $supplier,
        ]);
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
    public function store(SupplierRequest $request)
    {
        $supplier = new Supplier;
        $supplier->fill($request->all())->save();
        $notification = array(
            'title' => 'Supplier',
            'message'=>"Supplier Added Successfully",
            'alert-type' => 'success',
        );
        return redirect()->back()->with($notification);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Supplier  $supplier
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data = Supplier::findOrFail($id);
        if($data->status == 1) {
            $data->status= 0;
        }else{
            $data->status= 1;
        } 
        $data->save();
        $status=200;
        return response()->json($status);

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Supplier  $supplier
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $supplier = Supplier::findOrFail($id);
        return response()->json($supplier);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Supplier  $supplier
     * @return \Illuminate\Http\Response
     */
    public function update(SupplierRequest $request, $id)
    {
        $supplier= Supplier::find($id);
        $supplier->fill($request->all())->save();
        $notification = array(
            'title' => 'Supplier',
            'message' => 'Successfully ! Supplier Updated',
            'alert-type' => 'success',
        );
        return redirect()->back()->with($notification);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Supplier  $supplier
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $supplier = Supplier::findOrFail($id);
        $delete =$supplier->delete();
        if($delete){
            $notification = array(
                'title'=> 'Supplier',
                'message' => 'Successfully! Supplier Information Deleted',
                'alert-type' => 'success',
            ); 
        }
        else{
            $notification = array(
                'title'=> 'Supplier',
                'message' =>  'Ooh No! Something Went Wrong.',
                'alert-type' => 'success',
            ); 

        }
        return redirect()->back()->with($notification);
    }
}
