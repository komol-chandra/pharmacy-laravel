@extends('Backend.layouts.app')
@section('title') Supplier @endsection
@section('head', 'Supplier')
@section('content')

<div class="col-md-10 header">
    <h3>Supplier</h3>
</div>
<div class="col-md-2"> <button class="btn btn-primary float-right" data-toggle="modal" data-target="#addModal">Add Supplier</button> </div>
    
<div class="col-md  mt-5">
    <table id="dataTable" class="table table-striped table-bordered ">
        <thead class="text-center">
            <tr>
                <th>#</th>
                <th>Supplier Name</th>
                <th>Address</th>
                <th>Mobile</th>
                <th>Email</th>
                <th>Previous Balance</th>
                <th>Current Balance</th>
                <th>Status</th>
                <th class="text-center">Action</th>
            </tr>
        </thead>
        <form method="post" id="deleteForm">
            @method('delete')
            @csrf
        </form>
        <tbody class="text-center">
            @foreach($supplier as $value)
    
           
            <tr>
                <td><input type="checkbox" data-id=""></td>
                <td>{{ $value-> supplier_name }}</td>
                <td>{{ $value-> supplier_address }}</td>
                <td>{{ $value-> supplier_mobile }}</td>
                <td>{{ $value-> supplier_email }}</td>
                <td>{{ $value-> supplier_previous_balance }}</td>
                <td>{{ $value-> supplier_current_balance }}</td>
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
                            <a class="status_id active_btn" data-id="{{$value->supplier_id}}"><i data-feather="refresh-ccw"></i></a>
                        @else
                            <a class="status_id inactive_btn" data-id="{{$value->supplier_id}}"><i data-feather="refresh-ccw"></i></a>
                        @endif

                        <a href="javascript:void(0);" class="edit" data-toggle="modal" data-placement="top" data-id="{{$value->supplier_id}}" title="Edit" data-target="#editModal"><i class="text-info" data-feather="edit"></i></a>

                        <a href="{{ route('supplier.destroy',($value->supplier_id)) }}" data-toggle="tooltip" data-placement="top" title=""onclick="event.preventDefault(); Delete({{ $value->supplier_id }})";
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
                <h5 class="modal-title">Add Supplier</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"> <span
                        aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="{{ route('supplier.store') }}" method="post" id="addForm">
                @csrf
                <div class="modal-body">

                    <div class="form-group mb-4">
                        <label class="control-label">Supplier Name:</label>
                        <input type="text" name="supplier_name" class="form-control" placeholder="Name">
                    </div>
                    <div class="form-row sm mb-4">
                        <div class="form-group col-md-6">
                            <label for="name">Address:</label>
                            <input type="name" class="form-control" name="supplier_address"
                                placeholder="Address">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="text">Mobile:</label>
                            <input type="text" class="form-control" name="supplier_mobile"
                                placeholder="Mobile">
                        </div>
                    </div>
                    <div class="form-group mb-4">
                        <label class="control-label">Email:</label>
                        <input type="email" name="supplier_email" class="form-control" placeholder="email@gmail.com">
                    </div>
                    <div class="form-row sm mb-4">
                        <div class="form-group col-md-6">
                            <label for="number">Previous Balance:</label>
                            <input type="number" class="form-control" name="supplier_previous_balance"
                                placeholder="Previous Balance">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="number">Current Balance:</label>
                            <input type="number" class="form-control" name="supplier_current_balance"
                                placeholder="Current Balance">
                        </div>
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
<div class="modal fade" tabindex="-1" role="dialog" id="editModal">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Edit Supplier</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"> <span
                        aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="" method="post" id="editForm">
                @csrf
                @method('put')
                <div class="modal-body">

                    <div class="form-group mb-4">
                        <label class="control-label">Supplier Name:</label>
                        <input type="text" name="supplier_name" class="form-control" placeholder="Name" id="e_supplier_name">
                    </div>
                    <div class="form-row sm mb-4">
                        <div class="form-group col-md-6">
                            <label for="name">Address:</label>
                            <input type="name" class="form-control" name="supplier_address"
                                placeholder="Address" id="e_supplier_address">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="text">Mobile:</label>
                            <input type="text" class="form-control" name="supplier_mobile"
                                placeholder="Mobile" id="e_supplier_mobile">
                        </div>
                    </div>
                    <div class="form-group mb-4">
                        <label class="control-label">Email:</label>
                        <input type="email" name="supplier_email" class="form-control" placeholder="email@gmail.com" id="e_supplier_email">
                    </div>
                    <div class="form-row sm mb-4">
                        <div class="form-group col-md-6">
                            <label for="number">Previous Balance:</label>
                            <input type="number" class="form-control" name="supplier_previous_balance"
                                placeholder="Previous Balance" id="e_supplier_previous_balance">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="number">Current Balance:</label>
                            <input type="number" class="form-control" name="supplier_current_balance"
                                placeholder="Current Balance" id="e_supplier_current_balance">
                        </div>
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
        $(".edit").click(function(){
            let id=$(this).attr("data-id");
           

            $.ajax({
                url:"/admin/supplier/"+id+"/edit",
                type:'get',
                data:{"_token":"{{ csrf_token() }}"},
                dataType:"json",
                success:function(data)
                {
                    console.log(data);
                    $("#e_supplier_name").val(data.supplier_name);
                    $("#e_supplier_address").val(data.supplier_address);
                    $("#e_supplier_mobile").val(data.supplier_mobile);
                    $("#e_supplier_email").val(data.supplier_email);
                    $("#e_supplier_previous_balance").val(data.supplier_previous_balance);
                    $("#e_supplier_current_balance").val(data.supplier_current_balance);

                    $("#editForm").attr("action","/admin/supplier/"+data.supplier_id);

                }

            });
        });
        $('.status_id').click(function(){
            var id=$(this).attr("data-id");

            $.ajax({
            url: "/admin/supplier/show/"+id,
            type: "get",
            dataType: "json",
            success: function (response) {
                console.log(response);
                if (response == 200) 
                {
                    iziToast.show({
                    title: 'Category',
                    timeout: 20000,
                    timeout: 20000,
                    close: true,
                    overlay: true,
                    displayMode: 'once',
                    message: 'status Changed successfully'
                    });
                    location.reload();
                }
            }
        })
        });
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

                $form.attr('action','/admin/supplier/'+id);
                $form.submit()
            }, true],
            ['<button>NO</button>', function (instance, toast) {

                instance.hide({ transitionOut: 'fadeOut' }, toast, 'button');

            }],
        ],
    });
}

</script>

{!! JsValidator::formRequest('App\Http\Requests\SupplierRequest', '#addForm'); !!}
{!! JsValidator::formRequest('App\Http\Requests\SupplierRequest', '#editForm'); !!}

@endsection