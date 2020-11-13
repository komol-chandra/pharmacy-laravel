<?php

namespace App\Http\Controllers;

use App\Models\Unit;
use Illuminate\Http\Request;
use App\Http\Requests\UnitRequest;
use JsValidator;

class UnitController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $unit = Unit::all();
        return view ('Backend.pages.Unit.unit', [
            'unit' => $unit,
        ]);
        // return view('Backend.pages.Unit.unit');
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
    public function store(UnitRequest $request)
    {
        $unit = new Unit;
        $unit->fill($request->all())->save();
        $notification = array(
            'title' => 'unit',
            'message'=>"Unit Added Successfully",
            'alert-type' => 'success',
        );
        return redirect()->back()->with($notification);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Unit  $unit
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data = Unit::findOrFail($id);
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
     * @param  \App\Models\Unit  $unit
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $unit_edit = Unit::findOrFail($id);
        return response()->json($unit_edit);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Unit  $unit
     * @return \Illuminate\Http\Response
     */
    public function update(UnitRequest $request, $id)
    {
        $unit_update= Unit::find($id);
        $unit_update->fill($request->all())->save();
        $notification = array(
            'title' => 'Unit',
            'message' => 'Successfully ! Unit Updated',
            'alert-type' => 'success',
        );
        return redirect()->back()->with($notification);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Unit  $unit
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $unit = Unit::findOrFail($id);
        $delete =$unit->delete();
        if($delete){
            $notification = array(
                'title'=> 'Type',
                'message' => 'Successfully! Type Information Deleted',
                'alert-type' => 'success',
            ); 
        }
        else{
            $notification = array(
                'title'=> 'Type',
                'message' =>  'Ooh No! Something Went Wrong.',
                'alert-type' => 'success',
            ); 

        }
        return redirect()->back()->with($notification);
    }
}
