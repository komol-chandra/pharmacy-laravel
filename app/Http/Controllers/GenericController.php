<?php

namespace App\Http\Controllers;

use App\Models\Generic;
use Illuminate\Http\Request;
use App\Http\Requests\GenericRequest;
use JsValidator;
class GenericController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $generics = Generic::orderBy('generic_id','desc')->get();
        return view('Backend.pages.Generic.generic',compact('generics'));
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
    public function store(GenericRequest $request)
    {
        $generic = new Generic;
        $generic->fill($request->all())->save();
        $notification = array(
            'title' => 'Generic',
            'message'=>"Generic Added Successfully",
            'alert-type' => 'success',
        );
        return redirect()->back()->with($notification);
         
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Generic  $generic
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data = Generic::findOrFail($id);
        if($data->status == 1) {
            $data->status= 0;
        }
        else{
            $data->status= 1;
        } 
        $data->save();
        $status=200;
        return response()->json($status);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Generic  $generic
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $generic= Generic::findOrFail($id);
        return response()->json($generic);
        
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Generic  $generic
     * @return \Illuminate\Http\Response
     */
    public function update(GenericRequest $request,$id)
    {
        $generic = Generic::find($id);
        $generic->fill($request->all())->save();
        $notification = array(
            'title' => 'Generic',
            'message' => 'Successfully ! Generic Information Updated',
            'alert-type' => 'success',
        );
        return redirect()->back()->with($notification);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Generic  $generic
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $generic = Generic::findOrFail($id);
        $delete = $generic->delete();
        if($delete){
            $notification = array(
                'title'=> 'Generic',
                'message' => 'Successfully! Generic Information Deleted',
                'alert-type' => 'success',
            );  
        }
        else{
            $notification = array(
                'title'=> 'Generic',
                'message' =>  'Ooh No! Something Went Wrong.',
                'alert-type' => 'success',
            ); 
        }
        return redirect()->back()->with($notification);
    }
}
