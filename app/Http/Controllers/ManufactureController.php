<?php

namespace App\Http\Controllers;

use App\Models\Manufacture;
use Illuminate\Http\Request;
use App\Http\Requests\ManufactureRequest;
use JsValidator;

class ManufactureController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $manufactures=Manufacture::orderBy('manufac_id','desc')->get();
        
        return view('Backend.pages.Manufacture.manufacture',compact('manufactures'));
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
    public function store(ManufactureRequest $request)
    {
       
        $manufacture = new Manufacture;
        $manufacture->fill($request->all())->save();
        
        $notification = array(
            'title' => 'Manufacture',
            'message'=>"Manufacturer Added Successfully",
            'alert-type' => 'success',
        );
        return redirect()->back()->with($notification);
        
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Manufacture  $manufacture
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data = Manufacture::findOrFail($id);
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
     * @param  \App\Models\Manufacture  $manufacture
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
     
        $manufacture = Manufacture::findOrFail($id);
        return response()->json($manufacture);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Manufacture  $manufacture
     * @return \Illuminate\Http\Response
     */
    public function update(ManufactureRequest $request, $id)
    {
        
        $manufacture= Manufacture::find($id);
        $manufacture->fill($request->all())->save();
        $notification = array(
            'title' => 'Manufacture',
            'message' => 'Successfully ! Manufacture Information Updated',
            'alert-type' => 'success',
        );
        return redirect()->back()->with($notification);
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Manufacture  $manufacture
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $manufacture = Manufacture::findOrFail($id);
        $delete =$manufacture->delete();
        if($delete){
            $notification = array(
                'title'=> 'Manufacture',
                'message' => 'Successfully! Manufacture Information Deleted',
                'alert-type' => 'success',
            );  
        }
        else{
            $notification = array(
                'title'=> 'Manufacture',
                'message' =>  'Ooh No! Something Went Wrong.',
                'alert-type' => 'error',
            ); 

        }
        return redirect()->back()->with($notification);
    
        
    }
} 
 