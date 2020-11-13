@extends('Backend.layouts.app')
@section('title') Customer @endsection
@section('head', 'Customer')
@section('content')

<div class="col-md-10 header">
    <h3>Customer</h3>
</div>
<div class="col-md-2">
    <button class="btn btn-primary float-right" data-toggle="modal" data-target="#addModal">Add Customer</button>
</div>

<div class="col-md mt-5">
    <table id="dataTable" class="table table-striped table-bordered ">
        <thead class="text-center">
            <tr>
                <th>#</th>
                <th>Name</th>
                <th>Phone</th>
                <th>Status</th>
                <th class="text-center">Action</th>
            </tr>
        </thead>
        <form method="post" id="deleteForm">
            @method('delete')
            @csrf
        </form>
        <tbody class="text-center">
            @foreach($customers as $customar)
    
           
            <tr>
                <td><input type="checkbox" data-id=""></td>
                <td>{{ $customar-> customar_name}}</td>
                <td>{{ $customar-> customar_mobile }}</td>
    
                <td>
                    @if($customar-> customar_status == 1)
                    <span class="text-success">Active</span>
                    @else
                    <span class="text-danger">Inactive</span>
                    @endif
                </td>
                <td>
                    <ul class="table-controls">
                        <a href="" class="view" data-toggle="modal" data-placement="top" data-id="{{$customar->customar_id}}" title="View" data-target="#view"><i class="text-info" data-feather="eye"></i></a>

                        @if($customar->customar_status == 1)
                        <a class="status_id active_btn" data-id="{{$customar->customar_id}}"><i data-feather="refresh-ccw"></i></a>
                        @else
                        <a class="status_id inactive_btn" data-id="{{$customar->customar_id}}"><i data-feather="refresh-ccw"></i></a>
                        @endif

                        <a href="" class="edit" data-toggle="modal" data-placement="top" data-id="{{$customar->customar_id}}" title="Edit" data-target="#editModal"><i class="text-info" data-feather="edit"></i></a>

                        <a href="{{ route('customar.destroy',($customar->customar_id)) }}" data-toggle="tooltip" data-placement="top" title=""onclick="event.preventDefault(); Delete({{ $customar->customar_id }});"
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
                <h5 class="modal-title">Add customar</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"> <span
                        aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="{{ route('customar.store') }}" method="post" id="addForm">
                @csrf
                <div class="modal-body">

                    <div class="form-group">
                        <label> Name:</label>
                        <input type="text" class="form-control"  name="customar_name" placeholder="Type Name">
                    </div>

                    <div class="form-group">
                        <label> Phone:</label>
                        <input type="text" class="form-control"  name="customar_mobile" placeholder="Type Phone Number">
                    </div>
            

                    <div class="form-group">
                        <label> Address:</label>
                        <textarea class="form-control" style="max-height: 65px;" name="customar_address" cols="10"
                            rows="10" placeholder="Type Address"></textarea>
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
                <h5 class="modal-title">Edit customar</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"> <span
                        aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="" method="post" id="editForm">
                @csrf
                @method('put')
                <div class="modal-body">
            
                    <div class="form-group">
                        <label> Name:</label>
                        <input class="form-control" name="customar_name" 
                            id="e_name" placeholder="Type Name">
                    </div>

                    <div class="form-group">
                        <label> Phone:</label>
                        <input type="text" class="form-control" id="e_mobile"  name="customar_mobile" placeholder="Type Phone Number">
                    </div>
            
                    <div class="form-group">
                        <label> Address:</label>
                        <textarea class="form-control" style="max-height: 65px;" name="customar_address" cols="10"
                            rows="10" id="e_address" placeholder="Type Address"></textarea>
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

{{-- view Modal --}}

<div class="modal fade" tabindex="-1" role="dialog" id="view">
    <div class="modal-dialog modal-lg" role="document">
<div class="modal-content">
    <div class="modal-header">
        <h4 id="exampleModalLabel" class="modal-title"><b >View Customer</b></h4> 
        <button type="button" data-dismiss="modal" aria-label="Close" class="close"><span aria-hidden="true">×</span></button>
    </div>

     <div class="modal-body" >
         <div id="printableArea">
             <div class="row">
                 <div class="col-sm-6 invoice-left">
                     <a href="/">
                        <img src="{{asset('Backend_assets/assets/img/favicon1.png')}}"  width="60" alt="">
                        <b >Pharmacy BD</b>
                    </a>
                </div> 
                <div class="col-sm-6 invoice-right">
                    </div>
                </div> 
                <hr class="margin">
                 <div class="row">
                    <div class="col-sm-6 invoice-left" style="font-family: ubuntu;"><h5>Customer Details:</h5> 
         <strong>Name &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp: <b id="v_name"></b> </strong>
    <br> <strong>Mobile &nbsp&nbsp&nbsp&nbsp: <b id="v_mobile"></b> </strong>
    <br> <strong>Address &nbsp&nbsp: <b id="v_address"></b> </strong>
    <br> <strong>Due Able : </strong>NO
     </div>
     </div>
 <div class="margin">
     </div>  
     <div class="row">
         <div class="col-md-4">
             </div>
              <div class="col-md-4">
                 </div> 
                 <div class="col-md-4">
                     <table class="pull-right table table-bordered">
                         <tbody >
                             <tr >
                             <td ><b>Total Product</b></td> 
                             <td ><b>0</b></td>
                            </tr> <tr >
                                <td ><b>Total Amount</b></td> 
                                <td ><b>0</b></td>
                            </tr> 
                            <tr >
                                <td ><b>Total Paid</b></td>
                                 <td ><b>0</b></td>
                                </tr>
                                 <tr >
                                     <td ><b>Total Change</b></td>
                                      <td ><b>0</b></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div> 
                    <div class="row">
                        <div class="col-sm-4 invoice-left"></div> 
                        <div class="col-sm-4"></div>
                         <div class="col-sm-4 invoice-right">
                             </div>
                            </div>
                             <center style="margin-top: 15px;">
                                <p ><strong> Developed By:</strong>
                                </p>
                                <hr style="margin-top: -5px; margin-bottom: 5px; width: 20%;"> 
                                <span style="color: black; font-size: 12px;"> Pharmacy BD</span>
                                 <br > <span style="color: black; font-size: 12px;">(234) 145-1810</span> <br > 
                                 <span style="color: black; font-size: 12px;">Pharmacy@Pharmacy.com</span> <br > 
                                 <span style="color: black; font-size: 12px;">Mirpur 1, Dhaka</span> <p ></p>
                            </center>
                        </div>
                    </div> 
                    <div class="modal-footer">
                     <input type="button" class="btn btn-success btn-icon icon-left print" onclick="printDiv('printableArea')" value="Print Details" />
                        <button type="button" data-dismiss="modal" class="btn btn-secondary">Close</button>
                    </div>
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
               url:"/admin/customar/"+id+"/edit",
               type:"get",
               data:{"_token":"{{ csrf_token() }}"},
               dataType:"json",
               success:function(data){
                   console.log(data);
                   $("#e_name").val(data.customar_name);
                   $("#e_mobile").val(data.customar_mobile);
                   $("#e_address").val(data.customar_address);
                    
                   $("#editForm").attr("action","/admin/customar/"+data.customar_id);

               }

           });

       });
       $(".view").click(function(){
            let id =$(this).attr("data-id");
           $.ajax({
            url:"{{route('customar_view')}}",
			data:{'id':id,"_token": "{{ csrf_token() }}"},
			type:"get",
			dataType:"json",
               success:function(data){
                   console.log(data);
                   $("#v_name").text(data.customar_name);
                   $("#v_mobile").text(data.customar_mobile);
                   $("#v_address").text(data.customar_address);

               }

           });
       });

   }); 
   $(document).on('click',".status_id",function(){
    var id=$(this).attr('data-id');
    console.log(id);
	
		$.ajax({
			url:"/admin/customar/status/"+id,
			type:'get',
			dataType:'json',
			success:function(response)
			{
				if(response==200)
						{
							iziToast.success({
								title: "Customar Status",
								message: "Customar Status Successfully Changed",
								position: 'topBottom',
							});
							location.reload();
						}
			}
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

                $form.attr('action','/admin/customar/'+id);
                $form.submit()
            }, true],
            ['<button>NO</button>', function (instance, toast) {

                instance.hide({ transitionOut: 'fadeOut' }, toast, 'button');

            }],
        ],
    });
}

function printDiv(divName) {
     var printContents = document.getElementById(divName).innerHTML;
     var originalContents = document.body.innerHTML;

     document.body.innerHTML = printContents;

     window.print();

     document.body.innerHTML = originalContents;
}

</script>
{!! JsValidator::formRequest('App\Http\Requests\CustomarRequest', '#addForm'); !!}
{!! JsValidator::formRequest('App\Http\Requests\CustomarRequest', '#editForm'); !!}

@endsection