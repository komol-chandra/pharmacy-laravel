<?php

namespace App\Http\Controllers;

use App\Models\Type;
use Illuminate\Http\Request;
use App\Http\Requests\TypeRequest;
use JsValidator;

class TypeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $type = Type::all();
        return view ('Backend.pages.Type.type', [
            'type' => $type,
        ]);
        // return view('Backend.pages.Type.type');
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
    public function store(TypeRequest $request)
    {
        $type = new Type;
        $type->fill($request->all())->save();
        $notification = array(
            'title' => 'Type',
            'message'=>"Type Added Successfully",
            'alert-type' => 'success',
        );
        return redirect()->back()->with($notification);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Type  $type
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data = Type::findOrFail($id);
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
     * @param  \App\Models\Type  $type
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $type_edit = Type::findOrFail($id);
        return response()->json($type_edit);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Type  $type
     * @return \Illuminate\Http\Response
     */
    public function update(TypeRequest $request, $id)
    {
        $type_update= Type::find($id);
        $type_update->fill($request->all())->save();
        $notification = array(
            'title' => 'Type',
            'message' => 'Successfully ! Type Updated',
            'alert-type' => 'success',
        );
        return redirect()->back()->with($notification);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Type  $type
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $type_destroy = Type::findOrFail($id);
        $delete =$type_destroy->delete();
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
