@extends('Backend.layouts.app')
@section('title') Manufacture @endsection
@section('head', 'Manufacture')
@section('content')

<div class="col-md-10 header">
    <h3>Manufacture</h3> 
</div>
<div class="col-md-2"><button class="btn btn-primary float-right" data-toggle="modal" data-target="#addModal">Add Manufacture</button></div>

<div class="col-md  mt-5">
    <table id="dataTable" class="table table-striped table-bordered ">
        <thead class="text-center">
            <tr>
                <th>#</th>
                <th>Manufacture Name</th>
                <th>Mobile</th>
                <th>Address</th>
                <th>Balance</th>
                <th>Status</th>
                <th class="text-center">Action</th>
            </tr>
        </thead>
        <form method="post" id="deleteForm">
            @method('delete')
            @csrf
        </form>
        <tbody class="text-center">
            @foreach($manufactures as $manufacture)
    
           
            <tr>
                <td><input type="checkbox" data-id=""></td>
                <td>{{ $manufacture-> manufac_name }}</td>
                <td>{{ $manufacture-> manufac_mobile }}</td>
                <td>{{ $manufacture-> manufac_address}}</td>
                <td>{{ $manufacture-> manufac_balance }}</td>
                <td>
                    @if ($manufacture->status == 1)
                    <span class="text-success">Active</span>
                    @else
                        <span class="text-danger">Inactive</span>
                    @endif
                </td>

                <td class="text-left">
                    <ul class="table-controls">

                        @if ($manufacture->status == 1)
                            <a class="status_id active_btn" data-id="{{$manufacture->manufac_id}}"><i data-feather="refresh-ccw"></i></a>
                        @else
                            <a class="status_id inactive_btn" data-id="{{$manufacture->manufac_id}}"><i data-feather="refresh-ccw"></i></a>
                        @endif

                        <a href="javascript:void(0);" class="edit" data-toggle="modal" data-placement="top" data-id="{{$manufacture->manufac_id}}" title="Edit" data-target="#editModal"><i class="text-info" data-feather="edit"></i></a>


                        <a href="{{ route('manufacture.destroy',($manufacture->manufac_id)) }}" data-toggle="tooltip" data-placement="top" title=""onclick="event.preventDefault(); Delete({{ $manufacture->manufac_id }});"
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
                <h5 class="modal-title">Add Manufacture</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"> <span
                        aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="{{ route('manufacture.store') }}" method="post" id="addForm">
                @csrf
                <div class="modal-body">

                    <div class="form-row sm mb-4">
                        <div class="form-group col-md-6">
                            <label for="name">Manufacture Name:</label>
                            <input type="name" class="form-control" name="manufac_name" id="name"
                                placeholder="Manufacture Name">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="email">Email:</label>
                            <input type="email" class="form-control" name="manufac_email" id="email"
                                placeholder="email@gmail.com">
                        </div>
                    </div>

                    <div class="form-row sm mb-4">
                        <div class="form-group col-md-6">
                            <label>Balance:</label>
                        <input type="number" class="form-control" name="manufac_balance" id="balence" placeholder="Balance">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="mobile">Mobile:</label>
                            <input type="text" class="form-control" name="manufac_mobile" id="mobile"
                                placeholder="Mobile">
                        </div>
                    </div>

            
                    <div class="form-group">
                        <label>Address:</label>
                        <textarea class="form-control" style="max-height: 65px;" name="manufac_address" cols="10"
                            rows="10" placeholder="Address"></textarea>
                    </div>
                    <div class="form-group">
                        <label> Details:</label>
                        <textarea class="form-control" style="max-height: 65px;" name="manufac_details" cols="10"
                            rows="10" placeholder="Details"></textarea>
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
                <h5 class="modal-title">Edit Manufacture</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"> <span
                        aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="" method="post" id="editForm">
                @csrf
                @method('put')
                <div class="modal-body">

                    <div class="form-row sm mb-4">
                        <div class="form-group col-md-6">
                            <label for="name">Manufacture Name:</label>
                            <input type="name" class="form-control" name="manufac_name" id="e_name"
                                placeholder="Manufacture Name">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="email">Email:</label>
                            <input type="email" class="form-control" name="manufac_email" id="e_email"
                                placeholder="email@gmail.com">
                        </div>
                    </div>

                    <div class="form-row sm mb-4">
                        <div class="form-group col-md-6">
                            <label>Balance:</label>
                        <input type="number" class="form-control" name="manufac_balance" id="e_balence" placeholder="Balance">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="mobile">Mobile</label>
                            <input type="text" class="form-control" name="manufac_mobile" id="e_mobile"
                                placeholder="Mobile">
                        </div>
                    </div>

            
                    <div class="form-group">
                        <label>Address:</label>
                        <textarea class="form-control" style="max-height: 65px;" name="manufac_address" cols="10"
                            rows="10" id="e_manufac_address" placeholder="Address"></textarea>
                    </div>
                    <div class="form-group">
                        <label>Details:</label>
                        <textarea class="form-control" style="max-height: 65px;" name="manufac_details" cols="10"
                            rows="10" id="e_manufac_details" placeholder="Details"></textarea>
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

    $(document).on("click",".edit",function(){
            let id=$(this).attr("data-id");
            $.ajax({
                url:"/admin/manufacture/"+id+"/edit",
                type:'get',
                data:{"_token":"{{ csrf_token() }}"},
                dataType:"json",
                success:function(data)
                {
                    $("#e_name").val(data.manufac_name);
                    $("#e_email").val(data.manufac_email);
                    $("#e_balence").val(data.manufac_balance);
                    $("#e_mobile").val(data.manufac_mobile);
                    $("#e_manufac_address").val(data.manufac_address);
                    $("#e_manufac_details").val(data.manufac_details);

                    $("#editForm").attr("action","/admin/manufacture/"+data.manufac_id);

                }

            });
        });
        $(document).on('click','.status_id',function(){
            var id=$(this).attr("data-id");

            $.ajax({
            url: "/admin/manufacture/show/"+id,
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

                $form.attr('action','/admin/manufacture/'+id);
                $form.submit()
            }, true],
            ['<button>NO</button>', function (instance, toast) {

                instance.hide({ transitionOut: 'fadeOut' }, toast, 'button');

            }],
        ],
    });
}
</script>
{!! JsValidator::formRequest('App\Http\Requests\ManufactureRequest', '#addForm'); !!}
{!! JsValidator::formRequest('App\Http\Requests\ManufactureRequest', '#editForm'); !!}
@endsection


