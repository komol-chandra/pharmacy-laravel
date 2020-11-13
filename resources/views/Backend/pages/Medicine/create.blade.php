@extends('Backend.layouts.app')
@section('title') Add Medicine @endsection
@section('head', 'Add Medicine')
@section('content')


    <div class="col-md-12 center">
        <div class="card-header">
           <div> Add Medicine</div> 
            <div><a href="{{ url('/admin/medicine') }}"><button  style="margin-top:-2rem;" class="btn-sm btn-dark float-right">List</button></a> </div>
        </div>
        <div class="card mt-3">
        <form action="{{ route('medicine.store') }}" method="post" id="addForm" enctype="multipart/form-data">
            @csrf
        <div class="row mt-4">
            <div class="col-md-6">
                <div class="form-group col-md-12">
                <div class="col-sm-7">
                    <label for="Category" class="control-label">Medicine Category*</label>
                     <select id="category" class="form-control" name="med_cat_id">
                        <option value=""> Select Somthing</option>
                        @foreach($categorys as $category)
                        @if($category->parentId == null)
                        <option value="{{ $category->category_id }}">{{ $category->category_name }}</option>
                        @endif 
                        @endforeach
                        </select>
                    </div>
                </div> 
                <div class="form-group col-md-12"><div class="col-sm-7">
                    <label for="mobile" class="control-label">Sub Category*</label>
                     <select id="sub_cat" class="form-control" name="med_sub_cat_id">
                         
                        </select>
                    </div>
                </div> 
            <div class="form-group col-md-12">
                <div class="col-sm-7">
                    <label for="type" class="control-label">Medicine Type*</label>
                        <select id="med_type_id" class="form-control" name="med_type_id">
                            <option value="">Select Somthing</option>
                            @foreach($medTypes as $medType)
                            <option value="{{ $medType->type_id}}">{{ $medType->type_name }}</option>
                            @endforeach
                            
                            
                        </select>
                    </div>
                </div>
            <div class="form-group col-md-12">
                <div class="col-sm-7">
                    <label for="generic_id" class="control-label">Generic*</label> 
                    <select id="med_gen_id" class="form-control" name="med_gen_id">
                        <option value="">Select Somthing</option>
                        @foreach($generics as $generic)
                        <option value="{{ $generic->generic_id }}">{{ $generic->generic_name }}</option>
                        @endforeach
                        
                        
                    </select>
                </div>
            </div>
            <div class="form-group col-md-12">
                <div class="col-sm-7">
                    <label for="name" class="control-label">Medicine Name*</label> 
                    <input type="text" id="name" placeholder="Enter Medicine Name" class="form-control" name="med_name">
                </div>
            </div>
                <div class="form-group col-md-12">
                    <div class="col-sm-7">
                        <label for="sku" class="control-label">SKU(Auto Generate)*</label>
                        <input type="text" id="Sku" placeholder="SKU" disabled="disabled" readonly="readonly" class="form-control">
                    </div>
                </div> 
            <div class="form-group col-md-12">
                <div class="col-sm-7">
                    <label for="barcode" class="control-label">Barcode</label>
                        <input type="text" id="barcode" name="med_barcode" placeholder="Enter Barcode" class="form-control">
                    </div>
                </div>
                <div class="form-group col-md-12">
                    <div class="col-sm-7">
                        <label for="manufacturer" class="control-label">Manufacturer</label>
                        <select id="manufacturer" class="form-control" name="med_manuf_id">
                            <option value="">Select Somthing</option>
                            @foreach($manufactures as  $manufac)
                            <option value="{{ $manufac->manufac_id }}">{{ $manufac->manufac_name }}</option>
                            @endforeach
                           
                       
                        </select>
                    </div>
                </div> 
                <div class="form-group col-md-12">
                    <div class="col-sm-7">
                        <label for="image" class="control-label">Medicine Image</label> 

                        <input type="file" id="image" class="form-control" name="image">                    </div>
                </div>
         </div> 
         <div class="col-md-6">
            <div class="form-group col-md-12">
                <div class="col-sm-7">
                    <label for="tax" class="control-label">Tax</label>
                        <input type="text" name="med_tax" id="tax" placeholder="Enter Medicine Tax" class="form-control">
                    </div>
                </div>
                    <div class="form-group col-md-12"><div class="col-sm-7">
                        <label for="state" class="control-label">Vat</label> 
                        <input type="text" name="med_vat" id="Vat" placeholder="Enter Medicine Vat" class="form-control">
                    </div>
                </div> 
        <div class="form-group col-md-12">
            <div class="col-sm-7">
                <label for="details" class="control-label">Details</label> 
                <textarea id="address" name="med_details" placeholder="Enter Medicine Details" cols="10" rows="3" class="form-control"></textarea>
            </div>
        </div>
            <div class="form-group col-md-12">
                <div class="col-sm-7">
                    <label for="unit" class="control-label">Unit Type*</label>
                    <select id="unit" class="form-control" name="med_unit_id">
                        <option value="">Select Somthing</option>
                        @foreach($units as $unit)
                        <option value="{{$unit->unit_id }}">{{ $unit->unit_name }}</option> 
                        @endforeach
                       
                        
                    </select>
                </div>
            </div> 
        <div class="form-group col-md-12">
            <div class="col-sm-7">
                <label for="single_weight" class="control-label">Single Unit Weight</label>
                    <input type="text" id="single_weight" name="med_single_weight" placeholder="Single unit weight; ex: 5gm,10gm" class="form-control">
                </div>
            </div> 
            <div class="form-group col-md-12">
                <div class="col-sm-7">
                    <label for="box_weight" class="control-label">Box Weight</label> 
                    <input type="text" name="med_box_weight" id="box_weight" placeholder="Box Weight; ex: 20gm,50gm" class="form-control">
                </div>
            </div> 
        <div class="form-group col-md-12">
            <div class="col-sm-7">
                <label for="unit_per_box" class="control-label">Unit Per Box</label>
                    <input type="number" min="0" name="med_per_box" id="unit_per_box" placeholder="Amoutn of unit per box?" class="form-control">
                </div>
            </div>
            <div class="form-group col-md-12">
                <div class="col-sm-7">
                    <label for="minimum_unit" class="control-label">Minimum Unit</label> 
                    <input type="number" min="0" name="med_mini_unit" id="minimum_unit" placeholder="Minimum alert for stock notification?" class="form-control">
                </div>
            </div>
                <div class="form-group col-md-12">
                    <div class="col-sm-7">
                        <label for="unit_location" class="control-label">Unit Location</label> 
                        <input type="text" name="med_location" id="unit_location" placeholder="Where you store this unit?" class="form-control">
                    </div>
                </div>
                <div class="float-right" style="margin-bottom: 10px;">
                    <button class="btn-sm btn-success" type="submit">Save</button> 
                    <a href="{{ url('/admin/medicine') }}" class="close-btn" style="margin-right: 10px;"> Close</a> 
                </div>
                   
                </div>
            </div> 
           
        </div>
        
    </form>
</div>
    </div>

@endsection
@section('script')
<script>
    $(document).ready(function(){
       
       

    });
    $("#category").change(function(){
       
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
       

    });
</script>
{!! JsValidator::formRequest('App\Http\Requests\MedicineRequest', '#addForm'); !!}
@endsection