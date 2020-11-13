<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Requests\CategoryRequest;
use JsValidator;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categories = Category::with('sub_category')->get();
        $subcategory=[];
        $category=[];
        foreach ($categories as $key => $value) {
            if ($value->parentId) 
            {
                $subcategory[]=
                [
                    'id'=>$value->category_id,
                    'name'=>$value->category_name,
                    'description'=>$value->category_description,
                    'category'=>$value->category->category_name,
                    'status'=>$value->status,
                ];    
            }
            else{
                $category[]=[
                   'id'=>$value->category_id,
                    'name'=>$value->category_name,
                    'description'=>$value->category_description,
                    'status'=>$value->status,
                ];
            }
        }
        $data['category']=$category;
        $data['subcategory']=$subcategory;
        return view ('Backend.pages.Category.category', $data);
    }

    public function allCategory(){
        $categories = Category::whereNull('parentId')->get();
        return response()->json($categories,200); 
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
    public function store(CategoryRequest $request) 
    {        
        $category = new Category;
        $category->fill($request->all())->save();
        $notification = array(
            'title' => 'Category',
            'message'=>"Category Added Successfully",
            'alert-type' => 'success',
        );
        return redirect()->back()->with($notification);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data = Category::findOrFail($id);
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
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $category_edit = Category::findOrFail($id);
        return response()->json($category_edit);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function update(CategoryRequest $request, $id)
    {
        $category= Category::find($id);
        $category->fill($request->all())->save();
        $notification = array(
            'title' => 'Category',
            'message' => 'Successfully ! Category Updated',
            'alert-type' => 'success',
        );
        return redirect()->back()->with($notification);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $category = Category::findOrFail($id);
        $delete =$category->delete();
        if($delete){
            $notification = array(
                'title'=> 'Category',
                'message' => 'Successfully! Category Information Deleted',
                'alert-type' => 'success',
            ); 
        }
        else{
            $notification = array(
                'title'=> 'Category',
                'message' =>  'Ooh No! Something Went Wrong.',
                'alert-type' => 'success',
            ); 

        }
        return redirect()->back()->with($notification);
    }
}
