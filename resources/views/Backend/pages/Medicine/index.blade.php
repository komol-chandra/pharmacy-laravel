@extends('Backend.layouts.app')
@section('title') Medicine @endsection
@section('head', 'Medicine')
@section('content')

<div class="col-md-12 header">
    <div class="card-header">
        <div> <strong>Medicine</strong>  </div>
         <div><a href="{{ url('/admin/medicine/create') }}"><button  style="margin-top:-2rem;" class="btn-sm btn-success float-right">Add Medicine</button></a> </div>
     </div>

<div class="col-md  mt-5">
    <table id="dataTable" class="table table-striped table-bordered ">
        <thead class="text-center">
            <tr>
                <th>#</th>
                <th>Generic Name</th>
                <th>Name</th>
                <th>Image</th>
                <th>SKU</th>
                <th>Category</th>
                <th>Sub-Category</th>
                <th>Type</th>
                <th>Status</th>
                <th class="text-center">Action</th>
            </tr>
        </thead>
        <form method="post" id="deleteForm">
            @method('delete')
            @csrf
        </form>
        <tbody class="text-center">
            @foreach($medicines as $medicine)


            <tr>
                <td><input type="checkbox" data-id=""></td>
                 <td>{{ $medicine->generic ? $medicine->generic->generic_name : "Not Set" }}</td>

                <td>{{ $medicine->med_name }}</td>
                @if($medicine->med_image== null)
                <td><img alt="image" id="previmage" width="40" height="40" src='/blankmedicine.jpeg' class="rounded-circle mb-3 emp_img"></td>
                @else

                <td><img width="40" height="40" src={{$medicine->med_image}}> </td>


                @endif

                <td>{{ $medicine-> med_sku}}</td>

                <td>{{ $medicine->category ? $medicine->category->category_name : "Not Set" }}</td>
                <td>{{ $medicine->sub_category ? $medicine->sub_category->category_name : "Not Set"}}</td>

                <td>{{ $medicine->type ? $medicine->type->type_name : "Not set"}}</td>
                <td>
                    @if($medicine-> med_status == 1)
                    <span class="text-success">Active</span>
                    @else
                    <span class="text-danger">Inactive</span>
                    @endif
                </td>

                <td class="text-left">
                    <ul class="table-controls">
                        <a href="" class="view" data-toggle="modal" data-placement="top" data-id="{{$medicine->med_id}}" title="View" data-target="#view"><i class="text-info" data-feather="eye"></i></a>

                        @if($medicine->med_status == 1)
                        <a class="status_id active_btn" data-id="{{$medicine->med_id}}"><i data-feather="refresh-ccw"></i></a>
                        @else
                        <a class="status_id inactive_btn" data-id="{{$medicine->med_id}}"><i data-feather="refresh-ccw"></i></a>
                        @endif
                        <a href="{{ route('medicine.edit',($medicine->med_id)) }}" class="edit" title="Edit" data-target="#editModal"><i class="text-info" data-feather="edit"></i></a>


                        <a href="{{ route('medicine.destroy',($medicine->med_id)) }}" data-toggle="tooltip" data-placement="top" title=""onclick="event.preventDefault(); Delete({{ $medicine->med_id }});"
                                data-original-title="Delete"><i class="text-danger" data-feather="trash-2"></i></a>
                    </ul>
                </td>
            </tr>
            @endforeach

        </tbody>
    </table>
</div>
</div>
{{-- view modal --}}
<div class="modal fade" tabindex="-1" role="dialog" id="view">
    <div class="modal-dialog modal-lg" role="document">
     <div class="modal-content">
       <div class="modal-header">
        <h4 id="exampleModalLabel" class="modal-title"><b>View Medicine</b></h4>
        <button type="button" data-dismiss="modal" aria-label="Close" class="close"><span aria-hidden="true">×</span></button>
    </div>
    <div class="modal-body">
        <div id="printableArea">
            <div class="row">
                <div class="col-sm-6 invoice-left">
                    <a href="/">
                        <img src="{{asset('Backend_assets/assets/img/favicon1.png')}}"  width="60" alt="">
                        <b>Bd Pharmacy</b></a>
                </div>
                 <div class="col-sm-6 invoice-right">
                     </div>
             </div>
             <hr class="margin">
             <div class="row">
                 <div class="col-sm-4 invoice-left">
                     <h5 style="font-family: ubuntu;">Medicine:</h5>
                      <strong >Name : </strong><b id="v_name"></b>
								<br> <strong>Generic Name : </strong> <b id="v_gen_name"></b>
								<br> <strong>Category Name : </strong><b id="v_cat_name"></b>
								<br> <strong>Sub Category Name : </strong> <b id="v_sub_cat_name"></b>

                    </div>
                    <div class="col-sm-4 invoice-left">
                        <h5 style="font-family: ubuntu;">Manufacturer:</h5>
                        <strong>Name : </strong> <b id="v_man_name"></b>
								<br> <strong>Email : </strong> <b id="v_email"></b>
								<br> <strong>Mobile : </strong> <b id="v_mobile"></b>
								<br> <strong>Address : </strong> <b id="v_address"></b>
                    </div>
                    <div class="col-md-4 invoice-left">
                        <h5 style="font-family: ubuntu;">Unit Details:</h5>
                        <strong>Unit Type : </strong> <b id="v_tye_name"></b>
								<br> <strong>Single Unit Weight : </strong><b id="v_unit_weight"></b>
								<br> <strong>Box Weight : </strong> <b id="v_weight"></b>
								<br> <strong>Unit Location: </strong> <b id="v_location"></b>
								<br> <strong>Minimum Unit : </strong> <b id="v_m_unit"></b>

                            </div>
                        </div>
                    <div class="margin"></div>
                    <div class="margin"></div>
                     <div style="margin-top: 30px;"></div>
                     <center style="margin-top: 15px;"><p><strong style="color: black;"> Developed By:</strong></p><hr style="margin-top: -5px; margin-bottom: 5px; width: 20%;">
                        <span style="color: black; font-size: 12px;"> Pharmacy BD</span>
                         <br> <span style="color: black; font-size: 12px;">01305976639</span>
                          <br> <span style="color: black; font-size: 12px;">Pharmacy@gmail.com</span>
                           <br> <span style="color: black; font-size: 12px;"></span>House:28 - RoadNO:6 Blog:D,Mirpur 1. </span> <p></p></center></div></div> <div class="modal-footer">

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


    });
    $(".view").click(function(){
       let id = $(this).attr("data-id");
       console.log(id);

       $.ajax({
        url:"{{ route('medicine_view') }}",
        data:{'id':id,"_token": "{{ csrf_token() }}"},
        type:"get",
        dataType:"json",
        success:function(data){
            console.log(data);
            $("#v_name").text(data.med_name);
            $("#v_gen_name").text(data.med_gen_id);
            $("#v_cat_name").text(data.med_cat_id);
            $("#v_sub_cat_name").text(data.med_sub_cat_id);
            $("#v_man_name").text(data.med_manuf_id);
            $("#v_email").text(data.med_gen_id);
            $("#v_address").text(data.med_gen_id);
            $("#v_mobile").text(data.med_gen_id);
            $("#v_tye_name").text(data.med_type_id)
            $("#v_unit_weight").text(data.med_single_weight	);
            $("#v_weight").text(data.med_box_weight	);
            $("#v_location").text(data.med_location);
            $("#v_m_unit").text(data.med_mini_unit);
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

                $form.attr('action','/admin/medicine/'+id);
                $form.submit()
            }, true],
            ['<button>NO</button>', function (instance, toast) {

                instance.hide({ transitionOut: 'fadeOut' }, toast, 'button');

            }],
        ],
    });
}

$(document).on('click',".status_id",function(){
         var id=$(this).attr('data-id');
          console.log(id);

		$.ajax({
			url:"/admin/medicine/status/"+id,
			type:'get',
			dataType:'json',
			success:function(response)
			{
				if(response==200)
						{
							iziToast.success({
								title: "Medicine Status",
								message: "Medicine Status Successfully Changed",
								position: 'topBottom',
							});
							location.reload();
						}
			}
		});
});

function printDiv(divName) {
     var printContents = document.getElementById(divName).innerHTML;
     var originalContents = document.body.innerHTML;

     document.body.innerHTML = printContents;

     window.print();

     document.body.innerHTML = originalContents;
}

</script>
@endsection
