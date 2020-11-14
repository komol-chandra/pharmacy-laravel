@extends('Backend.layouts.app')
@section('title') Profile @endsection
@section('head', 'Profile')
@section('content')
	<form class="profile_form" action="" method="post" enctype="multipart/form-data">@csrf
        @method('PUT')
        <h5>User Profile Change</h5>
        <input type="hidden" name="id" ">
	  <div class="form-group">
		  <label for="email">Full Name:</label>
		  <div class="relative">
			  <input class="form-control" id="name" name="name" value="{{Auth::user()->name}}" type="text" pattern="[a-zA-Z\s]+" autofocus="" title="Username should only contain letters. e.g. Piyush Gupta" autocomplete="" placeholder="Type your name here...">
			  <i class="fa fa-user"></i>
		  </div>
	  </div>
	  <div class="form-group">
	  	<label for="email">Email address:</label>
	  	<div class="relative">
		  	<input class="form-control" type="email" name="email" value="{{Auth::user()->email}}"  placeholder="Type your email address..." pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$">
		  	<i class="fa fa-envelope"></i>
	  	</div>
	  </div>
	  <div class="form-group">
	  	<label for="email">Contact Number:</label>
	  	<div class="relative">
	  		<input class="form-control" type="text" name="contact" value="{{Auth::user()->contact}}" maxlength="10" oninput="this.value=this.value.replace(/[^0-9]/g,'');" placeholder="Type your Mobile Number...">
	  		<i class="fa fa-phone"></i>
	  	</div>
	  </div>
	  <div class="form-group">
	  	<label for="email">Designation:</label>
	  	<div class="relative">
	  	<input class="form-control" type="text" id="designation" name="designation" value="{{Auth::user()->designation}}"  placeholder="Type your designation...">
	  	<i class="fa fa-suitcase"></i>
	  </div>
	  </div>
	  <div class="form-group">
          <label for="email"> Profile Photo:</label>
	  	<div class="relative">
            <img style="height: 200px; width: 200px; border-radius: 100px; margin-left: 100px;" name="image" id='profileImage' src="{{asset('Backend_assets/images/img_avatar2.png')}}" alt="image" class='img-responsive'>
            <br><br>
            <input type='file' id="image" name="image" onchange="readURL(this);" />
            <span class="text-danger" id="image"></span>
        </div>
	  </div>
	  <div class="tright">
	  	<a href=""><button class="movebtn movebtnre" type="Reset"><i class="fa fa-fw fa-refresh"></i> Reset </button></a>
	  	<a href=""><button class="movebtn movebtnsu" type="Submit">Update<i class="fa fa-paper-plane-o"></i></button></a>
	  </div>
	</form>
@endsection
@section('script') 
<script>
    function readURL(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();
            reader.onload = function(e) {
                $('#profileImage')
                    .attr('src', e.target.result)
                    .width(200)
                    .height(200);
            };
            reader.readAsDataURL(input.files[0]);
        }
    }
</script>
@endsection

