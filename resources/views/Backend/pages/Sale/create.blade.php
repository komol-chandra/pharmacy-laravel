@extends('Backend.layouts.app')
@section('title') Sale @endsection
@section('head', 'Add Sale')
@section('content')
<style>
.custom-card{
    box-shadow: 2px 3px 10px 0px #888889;
}
.custom-card:hover{
    box-shadow: 4px 15px 16px 7px #c2c3c3;
    color: black;
    cursor: pointer;
}
.custom-div{
    min-height: 30rem;
    max-height: 30rem;
    overflow: scroll;
    margin-top: -1rem;
}

</style>
<div class="col-md-12 center">
    <div class="card-header">
       <div> Sale Medicine</div>
        <div><a href="{{ url('/admin/medicine') }}"><button  style="margin-top:-2rem;" class="btn-sm btn-dark float-right">List</button></a> </div>
    </div>
    <div class="mt-3">
     <form>
         <div class="container-fluid panel panel-primary">
             <div class="row">
                 <div class="col-sm-6">
                     <div class="row" style="padding-bottom: 5px;">
                        <div class="col-md-4"><input type="date" class="form-control"></div>
                         <div class="col-md-4">
                             <div class="input-group">
                                 <input type="text" placeholder="Enter Customer Phone" class="form-control">
                                 <span class="input-group-btn"><i class="refresh-ccw"></i></span>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <input type="text" placeholder="Enter Customer Name" class="form-control">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-4">
                            <select id="manufacturer" class="form-control" name="med_manuf_id">
                                <option value="">Select Somthing</option>
                                @foreach($manufactures as  $manufac)
                                <option value="{{ $manufac->manufac_id }}">{{ $manufac->manufac_name }}</option>
                                @endforeach

                            </select>
                    </div>
                    <div class="col-md-4">
                        <select id="med_gen_id" class="form-control" name="med_gen_id">
                            <option value="">Generic select</option>
                            @foreach($generics as $generic)
                            <option value="{{ $generic->generic_id }}">{{ $generic->generic_name }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="col-md-4">
                        <select id="category" class="form-control" name="med_cat_id">
                            <option value=""> Category Select</option>
                            @foreach($categorys as $category)
                            @if($category->parentId == null)
                            <option value="{{ $category->category_id }}">{{ $category->category_name }}</option>
                            @endif
                            @endforeach
                            </select>
                    </div>
                </div> 
                <div class="row" style="margin-top: 5px;">
                    @livewire('filter')
                 </div>
            </div>

             
                 

                    
                    <div class="col-sm-6">
                        <table class="table table-bordered">
                            <thead>
                                <th class="text-center bg-dark " style="max-width: 1rem; color:rgb(248, 248, 248); ">Batch  </th>
                                <th class="text-center bg-dark" style="max-width: 1rem; color:white;">QTY</th>
                                <th class="text-center bg-dark" style="max-width: 2rem; color:white;">Product</th>
                                <th class="text-center bg-dark" style="max-width: 2rem; color:white;">Price</th>
                                 <th class="text-center bg-dark" style="max-width: 2rem;color:white;">Subtotal</th>
                                 <th class="text-center bg-dark" style="max-width: 2rem; color: white;"><i class="" data-feather="trash"></i></th>
                            </thead>
                        </table>
                         <div class="custom-div">
                             <table class="table table-bordered mt-4" id="dynamic_field">
                                 <tbody>

                                 </tbody>
                            </table>
                        </div>
                        <table class="table table-bordered">
                            <tfoot>
                                <tr>
                                    <td><h6><b>Total:</b></h6></td>
                                     <td><h6>0</h6></td>
                                </tr>
                               <tr>
                                   <td><h6><b>Pay:</b></h6></td>
                                    <td><input type="text" class="form-control form-control-sm" style="width: 30%;"></td>
                                </tr>
                                <tr>
                                    <td><h6><b>Change Due:</b></h6></td>
                                     <td><h6>0</h6></td>
                                </tr>
                                 <tr class="hidden">
                                     <td><h6><b>Due:</b></h6></td>
                                      <td><h6>0</h6></td>
                                </tr>
                                <tr>
                                    <td>
                                        <button type="submit" class="btn btn-info btn-lg" style="display: block; width: 100%; height: 100%;">Save</button>
                                    </td>
                                   <td>
                                       <button type="submit" class="btn btn-success btn-lg pull-left" style="width: 100%; height: 100%;">Sale</button>
                                    </td>
                                </tr>
                            </tfoot>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        </form>
    </div>
    <div id="saleInvoice" tabindex="-1" aria-hidden="true" class="modal fade in">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 id="exampleModalLabel" class="modal-title"><b>Sale Invoice</b></h4>
                    <button type="button" data-dismiss="modal" aria-label="Close" class="close"><span aria-hidden="true">×</span></button>
                </div>
                 <div class="modal-body">
                     <div id="printDiv" class="invoice">
                         <div class="row">
                             <div class="col-sm-6 invoice-left">
                                 <a href="/">
                                    <img src="assets/images/logo1602840182.webp" width="60" alt=""><b>BD Pharmacy</b>
                                </a>
                            </div>
                            <div class="col-sm-6 invoice-right">
                                <span>24th October 2020</span><br>
                                <span>Invoice #</span>
                            </div>
                        </div>
                         <hr class="margin">
                         <div class="row">
                             <div class="col-sm-6 invoice-left">
                                 <h4>Customer</h4>
                                 <strong>Name: </strong>Not Set
                                <br>
                                <strong>Phone: </strong>Not Set
                            </div>
                        </div>
                        <div class="margin"></div>
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th class="text-center">#</th>
                                     <th>Batch</th>
                                     <th>Product</th>
                                     <th>Sku</th>
                                      <th>Quantity</th>
                                      <th>Total Price</th>
                                </tr>
                            </thead>
                                <tbody>
                                </tbody>
                        </table>
                        <div class="row">
                            <div class="col-sm-4 invoice-left"></div>
                             <div class="col-sm-4"></div>
                             <div class="col-sm-4 invoice-right">
                                 <p><strong>Total Amount: </strong>Not Counted</p>
                                 <p><strong>Paid Amount: </strong>Not Counted</p>
                                  <p><strong>Due Amount: </strong>Not Counted</p>
                                  <p><strong>Change Due Amount: </strong>Not Counted</p>
                            </div>
                        </div>
                        <center style="margin-top: 15px;">
                            <p><strong style="color: black;"> Developed By:</strong></p>
                            <hr style="margin-top: -5px; margin-bottom: 5px; width: 20%;">
                            <span style="color: black; font-size: 12px;">BD Pharmacy</span>
                            <br>
                            <span style="color: black; font-size: 12px;">01305976639</span> <br>
                             <span style="color: black; font-size: 12px;">bdpharmacy@gmail.com</span> <br>
                              <span style="color: black; font-size: 12px;">1Mirpur</span>
                              <p></p>
                        </center>
                    </div>
                </div>
                <div class="modal-footer">
                    <button class="btn btn-info btn-icon icon-left hidden-print">
						POS Print
                        <i class="entypo-doc-text"></i>
                    </button>
                    <button class="btn btn-success btn-icon icon-left hidden-print">
						Print Details
                        <i class="entypo-doc-text"></i>
                    </button>
                     <button type="button" data-dismiss="modal" class="btn btn-secondary">Close</button>
              </div>
            </div>
        </div>
    </div>
    <div id="PosPrintDiv" hidden="hidden" class="invoice">
        <div class="row">
            <div class="col-sm-6 invoice-left"><h3>BD Pharmacy</h3></div>
            <div class="col-sm-6 invoice-right">
                <span>24th October 2020</span><br>
                 <span>Invoice #</span>
            </div>
        </div>
        <hr class="margin">
        <div class="row">
            <div class="col-sm-6 invoice-left">
                <h4>Customer</h4>
                <strong>Name: </strong>Not Set
				<br> <strong>Phone: </strong>Not Set
            </div>
        </div>
        <div class="margin"></div>
         <table class="table table-bordered">
             <thead>
                 <tr>
                     <th class="text-center">#</th>
                      <th>Batch</th>
                      <th>Product</th>
                      <th>Sku</th>
                      <th>Quantity</th>
                      <th>Total Price</th>
                </tr>
            </thead>
            <tbody></tbody>
        </table>
        <div class="row">
            <div class="col-sm-4 invoice-left"></div>
            <div class="col-sm-4"></div>
            <div class="col-sm-4 invoice-right"><p><strong>Total Amount: </strong>
					Not Counted</p> <p><strong>Paid Amount: </strong>
					Not Counted</p> <p><strong>Due Amount: </strong>
					Not Counted</p> <p><strong>Change Due Amount: </strong>
                    Not Counted</p>
            </div>
        </div>
         <center style="margin-top: 15px;"><p><strong style="color: black;"> Developed By:</strong>
        </p><hr style="margin-top: -5px; margin-bottom: 5px; width: 20%;">
         <span style="color: black; font-size: 12px;"> BD Pharmacy</span>
          <br> <span style="color: black; font-size: 12px;">01305976639</span>
          <br> <span style="color: black; font-size: 12px;">bizitbd@gmail.com</span>
           <br> <span style="color: black; font-size: 12px;">  Mirpur 1</span>
           <p></p>
        </center>
    </div>
</div>

@endsection

@section('script')
<script>
  $('.each_medicine').click(function(){
          let i = 1;
           i++;
           $('#dynamic_field').append(
               '<tr style="height: 50px;" id="row'+i+'"><td class="text-center" style="max-width: 1rem; width: 6rem;"><select class="form-control"><option value="[object Object]">2002</option></select></td>   <td class="text-center" style="max-width: 1rem; width: 5rem;"><input min="0" class="form-control"></td><td class="text-center" style="min-width: 1rem; max-width: 1rem;">Ace (b)</td> <td class="text-center" style="min-width: 1rem; max-width: 2rem;"><input min="0" class="form-control"></td> <td class="text-center" style="max-width: 1rem;"><input min="0" class="form-control"></td> <td class="text-center" style="max-width: 1rem;"> <button type="button"id="'+i+'" class="btn btn-danger btn_remove">X</button></td></tr>');
      });
      $(document).on('click', '.btn_remove', function(){
           var button_id = $(this).attr("id");
           $('#row'+button_id+'').remove();
      });
</script>
@endsection
@livewireScripts
