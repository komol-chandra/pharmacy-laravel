@extends('Backend.layouts.app')
@section('title') Type @endsection
@section('head', 'Type')
@section('content')

<div class="col-md-10 header">
    <h3>Type</h3>
</div>
<div class="col-md-2"> <button class="btn btn-primary float-right" data-toggle="modal" data-target="#addModal">Add Type</button> </div>
    
<div class="col-md  mt-5">
    <table id="dataTable" class="table table-striped table-bordered ">
        <thead class="text-center">
            <tr>
                <th>#</th>
                <th>Type Name</th>
                <th>Descryption</th>
                <th>Status</th>
                <th class="text-center">Action</th>
            </tr>
        </thead>
        <form method="post" id="deleteForm">
            @method('delete')
            @csrf
        </form>
        <tbody class="text-center">
            @foreach($type as $value)
    
           
            <tr>
                <td><input type="checkbox" data-id=""></td>
                <td>{{ $value-> type_name }}</td>
                <td>{{ $value-> type_description }}</td>
                <td>
                    @if ($value->status == 1)
                    <span class="text-success">Active</span>
                    @else
                        <span class="text-danger">Inactive</span>
                    @endif
                </td>
    
                <td>
                    <ul class="table-controls">

                        @if ($value->status == 1)
                            <a class="status_id active_btn" data-id="{{$value->type_id}}"><i data-feather="refresh-ccw"></i></a>
                        @else
                            <a class="status_id inactive_btn" data-id="{{$value->type_id}}"><i data-feather="refresh-ccw"></i></a>
                        @endif

                        <a href="javascript:void(0);" class="edit" data-toggle="modal" data-placement="top" data-id="{{$value->type_id}}" title="Edit" data-target="#editModal"><i class="text-info" data-feather="edit"></i></a>

                        <a href="{{ route('type.destroy',($value->type_id)) }}" data-toggle="tooltip" data-placement="top" title=""onclick="event.preventDefault(); Delete({{ $value->type_id }})";
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
                <h5 class="modal-title">Add Type</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"> <span
                        aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="{{ route('type.store') }}" method="post" id="addForm">
                @csrf
                <div class="modal-body">

                    <div class="form-group mb-4">
                        <label class="control-label">Type Name:</label>
                        <input type="text" name="type_name" class="form-control" placeholder="Type Name">
                    </div>
                    <div class="form-group mb-4">
                        <label class="control-label">Descryption:</label>
                        <input type="text" name="type_description" class="form-control" placeholder="Descryption">
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
                <h5 class="modal-title">Edit Type</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"> <span
                        aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="" method="post" id="editForm">
                @csrf
                @method('put')
                <div class="modal-body">

                    <div class="form-group mb-4">
                        <label class="control-label">Type Name:</label>
                        <input type="text" name="type_name" class="form-control" id="e_type_name" placeholder="Type Name">
                    </div>
                    <div class="form-group mb-4">
                        <label class="control-label">Descryption:</label>
                        <input type="text" name="type_description" class="form-control" id="e_type_description" placeholder="Descryption">
                    </div>
                </div>
                <div class="modal-footer bg-whitesmoke br">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button class="btn btn-primary">Update</button>
            </form>
        </div>
    </div>
</div>
@endsection
@section('script')
<script>

    $(document).ready(function(){
        $("#dataTable").DataTable();
    });

    $(document).on('click','.edit',function(){
            let id=$(this).attr("data-id");
           

            $.ajax({
                url:"/admin/type/"+id+"/edit",
                type:'get',
                data:{"_token":"{{ csrf_token() }}"},
                dataType:"json",
                success:function(data)
                {
                    console.log(data);
                    $("#e_type_name").val(data.type_name);
                    $("#e_type_description").val(data.type_description);

                    $("#editForm").attr("action","/admin/type/"+data.type_id);

                }

            });
        });

        $(document).on('click','.status_id',function(){
            var id=$(this).attr("data-id");

            $.ajax({
            url: "/admin/type/show/"+id,
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

                $form.attr('action','/admin/type/'+id);
                $form.submit()
            }, true],
            ['<button>NO</button>', function (instance, toast) {

                instance.hide({ transitionOut: 'fadeOut' }, toast, 'button');

            }],
        ],
    });
}

</script>

{!! JsValidator::formRequest('App\Http\Requests\TypeRequest', '#addForm'); !!}
{!! JsValidator::formRequest('App\Http\Requests\TypeRequest', '#editForm'); !!}

@endsection