@extends('Backend.layouts.app')
@section('title') Edit Medicine @endsection
@section('head', 'Edit Medicine')
@section('content')

    <div class="col-md-12 center">
        <div class="card-header">
            <div> Edit Medicine</div> 
             <div><a href="{{ url('/admin/medicine') }}"><button  style="margin-top:-2rem;" class="btn-sm btn-dark float-right">List</button></a> </div>
         </div>
        
        <div class="card mt-3">
        <form action="{{ route('medicine.update',($medicines->med_id)) }}" method="post" id="addForm" enctype="multipart/form-data">
            @method('put')
                @csrf
        <div class="row mt-4">
            <div class="col-md-6">
                <div class="form-group col-md-12">
                <div class="col-sm-7">
                    <label for="Category" class="control-label">Medicine Category*</label>
                     <select id="category" class="form-control" name="med_cat_id" onchange="Category()">
                        
                        @foreach($categorys as $category)
                        @if($category->parentId == null)
                        <option value="{{$category->category_id}}" {{ $category->category_id == $category->parentId ? 'selected' : ''}}>{{$category->category_name}}</option>
                       
                        @endif 
                        @endforeach
                        </select>
                    </div>
                </div> 
                <div class="form-group col-md-12"><div class="col-sm-7">
                    <label for="mobile" class="control-label">Sub Category*</label>
                     <select id="sub_cat" class="form-control" name="med_sub_cat_id	">
                         
                        </select>
                    </div>
                </div> 
            <div class="form-group col-md-12">
                <div class="col-sm-7">
                    <label for="type" class="control-label">Medicine Type*</label>
                        <select id="med_type_id" class="form-control" name="med_type_id">

                            @foreach($medTypes as $medType)
                            <option value="{{ $medType->type_id}}"{{$medType->type_id ? 'selected': ''}}>{{$medType->type_name }}</option>

                            @endforeach
                            
                            
                        </select>
                    </div>
                </div>
            <div class="form-group col-md-12">
                <div class="col-sm-7">
                    <label for="generic_id" class="control-label">Generic*</label> 
                    <select id="med_gen_id" class="form-control" name="med_gen_id">

                        @foreach($generics as $generic)
                        <option value="{{ $generic->generic_id }}" {{ $generic->generic_id ? 'selected': ''}}>{{ $generic->generic_name }}</option>
                        
                        @endforeach
                        
                        
                    </select>
                </div>
            </div>
            <div class="form-group col-md-12">
                <div class="col-sm-7">
                    <label for="name" class="control-label">Medicine Name*</label> 
                    <input type="text" id="name" placeholder="Enter Medicine Name" class="form-control" name="med_name" value="{{ $medicines->med_name }}">
                </div>
            </div>
                <div class="form-group col-md-12">
                    <div class="col-sm-7">
                        <label for="sku" class="control-label">SKU(Auto Generate)*</label>
                        <input type="text" id="Sku" placeholder="SKU" disabled="disabled" readonly="readonly" value="{{ $medicines->med_sku }}"class="form-control">
                    </div>
                </div> 
            <div class="form-group col-md-12">
                <div class="col-sm-7">
                    <label for="barcode" class="control-label">Barcode</label>
                        <input type="text" id="barcode" name="med_barcode" placeholder="Enter Barcode" value="{{ $medicines->med_barcode }}"  class="form-control">
                    </div>
                </div>
                <div class="form-group col-md-12">
                    <div class="col-sm-7">
                        <label for="manufacturer" class="control-label">Manufacturer</label>
                        <select id="manufacturer" class="form-control" name="med_manuf_id">

                            @foreach($manufactures as  $manufac)

                            <option value="{{ $manufac->manufac_id }}"{{ $manufac->manufac_id ? 'selected': '' }}>{{ $manufac->manufac_name }}</option>
                            @endforeach
                           
                       
                        </select>
                    </div>
                </div> 
                <div class="form-group col-md-12">
                    <div class="col-sm-7">
                        <label for="image" class="control-label">Medicine Image</label> 

                        <input type="file" id="image" class="form-control" name="image" value="{{ $medicines->med_image }}">

                    </div>
                </div>
         </div> 
         <div class="col-md-6">
            <div class="form-group col-md-12">
                <div class="col-sm-7">
                    <label for="tax" class="control-label">Tax</label>
                        <input type="text" name="med_tax" id="tax" placeholder="Enter Medicine Tax" class="form-control" value="{{ $medicines->med_tax }}">
                    </div>
                </div>
                    <div class="form-group col-md-12"><div class="col-sm-7">
                        <label for="state" class="control-label">Vat</label> 
                        <input type="text" name="med_vat" id="Vat" placeholder="Enter Medicine Vat" class="form-control" value="{{ $medicines->med_vat }}">
                    </div>
                </div> 
        <div class="form-group col-md-12">
            <div class="col-sm-7">
                <label for="details" class="control-label">Details</label> 
                <textarea id="address" name="med_details" placeholder="Enter Medicine Details" cols="10" rows="3" value="{{ $medicines->med_details }}"class="form-control"></textarea>
            </div>
        </div>
            <div class="form-group col-md-12">
                <div class="col-sm-7">
                    <label for="unit" class="control-label">Unit Type*</label>
                    <select id="unit" class="form-control" name="med_unit_id">

                        @foreach($units as $unit)
                        <option value="{{$unit->unit_id }}" {{ $unit->unit_id ? 'selected': '' }}>{{ $unit->unit_name }}</option> 
                        @endforeach
                       
                        
                    </select>
                </div>
            </div> 
        <div class="form-group col-md-12">
            <div class="col-sm-7">
                <label for="single_weight" class="control-label">Single Unit Weight</label>
                    <input type="text" id="single_weight" name="med_single_weight" value="{{ $medicines->med_single_weight }}" class="form-control" placeholder="Enter Single Unit Weight">
                </div>
            </div> 
            <div class="form-group col-md-12">
                <div class="col-sm-7">
                    <label for="box_weight" class="control-label">Box Weight</label> 
                    <input type="text" name="med_box_weight" id="box_weight" value="{{ $medicines->med_box_weight }}"class="form-control" placeholder="Enter Box Weight">
                </div>
            </div> 
        <div class="form-group col-md-12">
            <div class="col-sm-7">
                <label for="unit_per_box" class="control-label">Unit Per Box</label>
                    <input type="number" min="0" name="med_per_box" id="unit_per_box" value="{{ $medicines->med_per_box }}" class="form-control" placeholder="Enter Unit per Box">
                </div>
            </div>
            <div class="form-group col-md-12">
                <div class="col-sm-7">
                    <label for="minimum_unit" class="control-label">Minimum Unit</label> 
                    <input type="number" min="0" name="med_mini_unit" id="minimum_unit" value="{{ $medicines->med_mini_unit }}" class="form-control" placeholder="Enter Minimum unit">
                </div>
            </div>
                <div class="form-group col-md-12">
                    <div class="col-sm-7">
                        <label for="unit_location" class="control-label">Unit Location</label> 
                        <input type="text" name="med_location" id="unit_location" value="{{ $medicines->med_location }}" class="form-control" placeholder="Enter Unit Location">
                    </div>
                </div>
                <div class="float-right" style="margin-bottom: 10px;">
                    <button class="btn btn-success" type="submit">update</button> 
                    <a href="{{ url('/admin/medicine') }}" class="btn-sm btn-danger" style="margin-right: 10px;">Close</a> 
                </div>
            </div> 
        </div>
    </form>
</div>
<br>
@endsection
@section('script')
<script>
$(document).ready(function(){
    Category();   
    
  


function Category(){
    let id = $("#category").val();

    $.ajax({
            url:"/admin/medicine/subCategory/"+id,
            type:'get',
            dataType:"json",
            success:function(data)
            {   
                $(".sub_cat_option").remove();
                $.each(data,function(i,v){
                    $("#sub_cat").append(`<option class="sub_cat_option" value=${v.category_id}>${v.category_name}</option>`);
                });
            }

    });
}

$(wrapper).on("click", ".remove_field", function (e) {
       alert('jello');
                e.preventDefault();
                $(this).closest('div').remove();
                i--;
            });
});
</script>
{!! JsValidator::formRequest('App\Http\Requests\MedicineRequest', '#addForm'); !!}
@endsection