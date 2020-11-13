<?php

namespace App\Http\Controllers;

use App\Models\Customar;
use Illuminate\Http\Request;
use App\Http\Requests\CustomarRequest;

class CustomarController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $customers = Customar::orderBy('customar_name','desc')->get();
        return view('Backend.pages.Customar.customer',compact('customers'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function status($id)
    {
        $customar = Customar::findOrFail($id);
        if($customar->customar_status== 1) {
            $customar->customar_status = 0;

        }
        else{
            $customar->customar_status =1;
        }
        $customar->save();
        $status=200;
        return response()->json($status);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CustomarRequest $request)
    {
        $customar = new Customar;
        $customar->fill($request->all())->save();
        $notification = array(
            'title'=>'Customer',
            'message'=>'Customar Added Successfully!',
            'alert-type' => 'success',
        );
        return redirect()->back()->with($notification);
        
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Customar  $customar
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request)
    {
        $id=$request->id;
        $customar=Customar::find($id);
        return response()->json($customar);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Customar  $customar
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $customar = Customar::findOrFail($id);
        return response()->json($customar);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Customar  $customar
     * @return \Illuminate\Http\Response
     */
    public function update(CustomarRequest $request,$id)
    {
        $customar= Customar::find($id);
        $customar->fill($request->all())->save();
        $notification = array(
            'title' => 'Customer',
            'message' => 'Successfully ! Customer Information Updated',
            'alert-type' => 'success',
        );
        return redirect()->back()->with($notification);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Customar  $customar
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $customar = Customar::findOrFail($id);
        $delete = $customar->delete();
        if($delete){
            $notification = array(
                'title'=> 'Customar',
                'message' => 'Successfully! Customar Information Deleted',
                'alert-type' => 'success',
            );  
        }
        else{
            $notification = array(
                'title'=> 'Customar',
                'message' => 'Successfully! Customar Information Deleted',
                'alert-type' => 'error',
            );  

        }
        return redirect()->back()->with($notification);
    }
}
