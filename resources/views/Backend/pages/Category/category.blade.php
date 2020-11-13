@extends('Backend.layouts.app')
@section('title') Category @endsection
@section('head', 'Category')
@section('content')

<div class="col-md-10 header">
    <h3>Category</h3>
</div>
<div class="col-md-2"><button class="btn btn-primary float-right" data-toggle="modal" data-target="#addModal">Add Category</button></div>

<div class="col-md  mt-5">
    <table id="dataTable" class="table table-striped table-bordered ">
        <thead class="text-center">
            <tr>
                <th>#</th>
                <th>Category Name</th>
                <th>Details</th>
                <th>Satus</th>
                <th>Action</th>
            </tr>
        </thead>
        <form method="post" id="deleteForm">
            @method('delete')
            @csrf
        </form>
        <tbody>

            @foreach($category as $value)
            <tr class="text-center">
                <td><input type="checkbox" data-id=""></td>
                <td>{{ $value['name'] }} <br>
                </td>
                <td>{{ $value['description'] }}</td>
                <td>
                    @if ($value['status'] == 1)
                    <span class="text-success">Active</span>
                    @else
                        <span class="text-danger">Inactive</span>
                    @endif
                </td>
    
    
                <td class="text-left">
                    <ul class="table-controls">

                        @if ($value['status'] == 1)
                            <a class="status_id active_btn" data-id="{{$value['id']}}"><i data-feather="refresh-ccw"></i></a>
                        @else
                            <a class="status_id inactive_btn" data-id="{{$value['id']}}"><i data-feather="refresh-ccw"></i></a>
                        @endif

                        <a href="javascript:void(0);" class="edit" data-toggle="modal" data-placement="top" data-id="{{$value['id']}}" title="Edit" data-target="#editModal"><i class="text-info" data-feather="edit"></i></a>

                        <a href="{{ route('category.destroy',($value['id'])) }}" data-toggle="tooltip" data-placement="top" title=""onclick="event.preventDefault(); Delete({{ $value['id'] }})";
                                data-original-title="Delete"><i class="text-danger" data-feather="trash-2"></i></a>                       
                    </ul>
                </td>
            </tr>
            @endforeach
    
        </tbody>
        <tfoot>
            <tr class="text-center">
                <th>#</th>
                <th>Category Name</th>
                <th>Details</th>
                <th>Status</th>
                <th class="text-center">Action</th>
            </tr>
        </tfoot>
    </table>
<br>
<br><br>
<div class="col-md-10 header">
    <h5>_Sub Category</h5><br>
</div>
    <table id="dataTable" class="table table-striped table-bordered ">
        <thead>
            <tr class="text-center">
                <th>#</th>
                <th>Category Name</th>
                <th>Sub Category Name</th>
                <th>Sub Category Details</th>
                <th>Satus</th>
                <th>Action</th>
            </tr>
        </thead>
        <form method="post" id="deleteForm">
            @method('delete')
            @csrf
        </form>
        <tbody>

            @foreach($subcategory as $value)
            <tr class="text-center">
                <td><input type="checkbox" data-id=""></td>
                <td>{{ $value['category'] }} <br>
                </td>
                <td>{{ $value['name'] }} <br>
                </td>
                <td>{{ $value['description'] }}</td>
                <td>
                    @if ($value['status'] == 1)
                    <span class="text-info">Active</span>
                    @else
                        <span class="text-danger">Inactive</span>
                    @endif
                </td>
    
    
                <td class="text-left">
                    <ul class="table-controls">

                        @if ($value['status'] == 1)
                            <a class="status_id active_btn" data-id="{{$value['id']}}"><i data-feather="refresh-ccw"></i></a>
                        @else
                            <a class="status_id inactive_btn" data-id="{{$value['id']}}"><i data-feather="refresh-ccw"></i></a>
                        @endif

                        <a href="javascript:void(0);" class="edit" data-toggle="modal" data-placement="top" data-id="{{$value['id']}}" title="Edit" data-target="#editModal"><i class="text-info" data-feather="edit"></i></a>


                        <a href="{{ route('category.destroy',($value['id'])) }}" data-toggle="tooltip" data-placement="top" title=""onclick="event.preventDefault(); Delete({{ $value['id'] }})";
                                data-original-title="Delete"><i class="text-danger" data-feather="trash-2"></i></a>                       
                    </ul>
                </td>
            </tr>
            @endforeach
    
        </tbody>
    </table>

</div>

           



<!-- Add Modal -->

<div class="modal fade" tabindex="-1" role="dialog" id="addModal">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Add Category</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"> <span
                        aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="{{ route('category.store') }}" method="post" id="addForm">
                @csrf
                <div class="modal-body">

                    <div class="form-group mb-4">
                        <label class="control-label">Category Name:</label>
                        <input type="text" name="category_name" class="form-control" placeholder="Category Name">
                    </div>
                    <div class="form-group mb-4">
                        <label class="control-label">Details:</label>
                        <input type="text" name="category_description" class="form-control" placeholder="Details">
                    </div>
                    <div>
                        <input type="checkbox" name="parent_category" id="parent_category" onchange="checkSubCategory('parent_category','parent_category_div','parent_category')" value="false">
                        <label for="parent_category">Use as Sub Category</label>
                    </div>
                    <div class="form-group mb-4 parent_category_div" hidden>
                        <label for="sub_category">Parent Category</label>
                        <select class="form-control" id="sub_category" name="parentId">
                            <option selected disabled hidden>Select Parent Cateogry</option>
                        </select>
                    </div>


                </div>
                <div class="modal-footer bg-whitesmoke br">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button class="btn btn-primary">Save</button>
            </form>
        </div>
    </div>
</div>
</div>

<!-- Edit Modal -->

<div class="modal fade "  role="dialog" id="editModal">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Edit Category</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"> <span
                        aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="" method="post" id="editForm">
                @csrf
                @method('put')
                <div class="modal-body">

                    <div class="form-group mb-4">
                        <label class="control-label">Category Name:</label>
                        <input type="text" name="category_name" class="form-control" id="e_category_name" placeholder="Category Name">
                    </div>
                    <div class="form-group mb-4">
                        <label class="control-label">Details:</label>
                        <input type="text" name="category_description" class="form-control" id="e_category_description" placeholder="Details">
                    </div>

                     <div>
                        <input type="checkbox" name="parent_category" id="e_parent_category" onchange="checkSubCategory('e_parent_category','e_parent_category_div','e_parent_category')" value="false">
                        <label for="e_parent_category">Use as Sub Category</label>
                    </div>
                    <div class="form-group mb-4 e_parent_category_div" hidden>
                        <label for="sub_category">Parent Category</label>
                        <select class="form-control" id="e_sub_category" name="parentId">
                        </select>
                    </div>

                </div>
                <div class="modal-footer bg-whitesmoke br">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button class="btn btn-primary">Update</button>
            </form>
        </div>
    </div>
</div>
</div>
@endsection
@section('script')
<script>
    $(document).ready(function(){
        $("#dataTable").DataTable();
    });

    $(document).on('click',".edit",function(){
            let id=$(this).attr("data-id");
           

            $.ajax({
                url:"/admin/category/"+id+"/edit",
                type:'get',
                data:{"_token":"{{ csrf_token() }}"},
                dataType:"json",
                success:function(data)
                {
                    $("#e_category_name").val(data.category_name);
                    $("#e_category_description").val(data.category_description);
                    $("#editForm").attr("action","/admin/category/"+data.category_id);
                    if(data.parentId){
                        getCategory('e_sub_category','e_parent_category');
                        $(".e_parent_category_div").removeAttr("hidden","hidden");
                        $("#e_parent_category").attr("checked","checked");
                        $("#e_sub_category").val(data.parentId);
                    }
                }

            });
        });

        $(document).on('click',".status_id",function(){
            var id=$(this).attr("data-id");

            $.ajax({
            url: "/admin/category/show/"+id,
            type: "get",
            dataType: "json",
            success: function (response) {
                console.log(response);
                if (response == 200) 
                {
                    location.reload();
                }
            }
        })
        });

        function Delete(id){
        var id=id;
        iziToast.question({
            timeout: 20000,
            close: true,
            overlay: true,
            displayMode: 'once',
            id: 'question',
            zindex: 999,
            title: 'Wait!',
            message: 'Are you sure? Once Deleted Can\'t be undone!',
            position: 'center',
            buttons: [
                ['<button><b>YES</b></button>', function () {
                    var $form = $("#deleteForm").closest('form');

                    $form.attr('action','/admin/category/'+id);
                    $form.submit()
                }, true],
                ['<button>NO</button>', function (instance, toast) {

                    instance.hide({ transitionOut: 'fadeOut' }, toast, 'button');

                }],
            ],
        });
    }

    function Delete(id){
    var id=id;
    iziToast.question({
        timeout: 20000,
        close: true,
        overlay: true,
        displayMode: 'once',
        id: 'question',
        zindex: 999,
        title: 'Wait!',
        message: 'Are you sure? Once Deleted Can\'t be undone!',
        position: 'center',
        buttons: [
            ['<button><b>YES</b></button>', function () {
                var $form = $("#deleteForm").closest('form');

                $form.attr('action','/admin/category/'+id);
                $form.submit()
            }, true],
            ['<button>NO</button>', function (instance, toast) {

                instance.hide({ transitionOut: 'fadeOut' }, toast, 'button');

            }],
        ],
    });
}

    function checkSubCategory(parentId,parentDiv,parentClass) {
        if ($(`#${parentId}`).is(':checked')) 
        {
            if(parentId=='e_parent_category'){
                getCategory('e_sub_category','e_parent_category');                
            }else{
                getCategory('sub_category','parent_category');
            }
            $(`.${parentDiv}`).removeAttr("hidden","hidden");
        }
        else{
            $(`.${parentClass}`).remove();
            $(`.${parentDiv}`).attr("hidden","hidden");
        }
    }


    function getCategory(optionId,optionClass){
        $.ajax({
            url:"allCategory/",
            type:"get",
            dataType:"json",
            success:function(data){
                $(`.${optionClass}`).remove();
                $.each(data,function(i,v){
                    $(`#${optionId}`).append(`
                        <option class="${optionClass}" value="${v.category_id}">${v.category_name}</option>
                        `);
                })
            }
        });
    }

</script>

{!! JsValidator::formRequest('App\Http\Requests\CategoryRequest', '#addForm'); !!}
{!! JsValidator::formRequest('App\Http\Requests\CategoryRequest', '#editForm'); !!}

@endsection


