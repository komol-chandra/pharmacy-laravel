<?php

namespace App\Http\Controllers;

use App\Models\Medicine;
use App\Models\Category;
use App\Models\Type;
use App\Models\Generic;
use App\Models\Manufacture;
use App\Models\Unit;
use Illuminate\Http\Request;
use App\Http\Requests\MedicineRequest;
use App\Traits\subCategoryTraits;
use Arr;
use File;
class MedicineController extends Controller
{
    use subCategoryTraits;
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $medicines = Medicine::with('category','sub_category','generic','type')->get();
        return view('Backend.pages.Medicine.index',compact('medicines'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categorys = Category:: orderBy('category_name','asc')->get();
        $medTypes = Type::orderBy('type_name','asc')->get();
        $generics = Generic::orderBy('generic_name','asc')->get();
        $manufactures = Manufacture::orderBy('manufac_name','asc')->get();
        $units = Unit::orderBy('unit_name','asc')->get();
        return view('Backend.pages.Medicine.create',compact('categorys','medTypes','generics','manufactures','units'));
    }

    // public function subCatFind($id)
    // {   
    //     $subCategory=Category::where('parentId',$id)->get();
    //     return response()->json($subCategory,200);
    // }

    public function status($id)
    {
        $medicine = Medicine::findOrFail($id);
        if($medicine->med_status== 1) {
            $medicine->med_status = 0;

        }
        else{
            $medicine->med_status =1;
        }
        $medicine->save();
        $status=200;
        return response()->json($status);
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(MedicineRequest $request)
    {
        $medicine = new Medicine;
        if($request->image)
        {    
            $ext=$request->file('image')->getClientOriginalExtension();
            $path="Backend_assets/Medicine/";
            $name='Medicine_'.time().'.'.$ext;
            $request->file('image')->move($path, $name);
            Arr::set($request,'med_image',"/".$path.$name);
        }
        Arr::set($request,'med_sku','SKU-'.time());
        $medicine->fill($request->all())->save();
        $notification = array(
            'title'=>'Medicine',
            'message'=>'Medicine Added Successfully!',
            'alert-type' => 'success',
        );
        return redirect()->back()->with($notification);
        
        
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Medicine  $medicine
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request)
    {
        $id = $request->id;
        $medicine = Medicine::find($id);
        return response()->json($medicine);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Medicine  $medicine
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $medicines = Medicine::findOrFail($id);
        $categorys = Category:: orderBy('category_name','asc')->get();
        $medTypes = Type::orderBy('type_name','asc')->get();
        $generics = Generic::orderBy('generic_name','asc')->get();
        $manufactures = Manufacture::orderBy('manufac_name','asc')->get();
        $units = Unit::orderBy('unit_name','asc')->get();
        return view('Backend.pages.Medicine.edit',compact('medicines','categorys','medTypes','generics','manufactures','units'));
       
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Medicine  $medicine
     * @return \Illuminate\Http\Response
     */
    public function update(MedicineRequest $request, $id)
    {
        $medicine = Medicine::find($id);
        if(\File::exists(public_path($medicine->med_image))){
            \File::delete(public_path($medicine->med_image));
          } 
            if($request->image)
            {    
                $ext=$request->file('image')->getClientOriginalExtension();
                $path="Backend_assets/Medicine/";
                $name='Medicine_'.time().'.'.$ext;
                $request->file('image')->move($path, $name);
                Arr::set($request,'med_image',"/".$path.$name);
            }
            Arr::set($request,'med_sku','SKU-'.time());
            $medicine->fill($request->all())->save();
            $notification = array(
                'title'=>'Medicine',
                'message'=>'Medicine Update Successfully!',
                'alert-type' => 'success',
            );

        return redirect()->back()->with($notification);
        
    

        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Medicine  $medicine
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
       $medicine = Medicine::findOrFail($id);
       if(\File::exists(public_path($medicine->med_image))){
        \File::delete(public_path($medicine->med_image));
      }else{
        dd('File does not exists.');
      }
       $delete = $medicine->delete();
       if($delete){
        $notification = array(
            'title'=> 'Medicine',
            'message' => 'Successfully! Medicine Information Deleted',
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
