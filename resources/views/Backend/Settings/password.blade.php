@extends('Backend.layouts.app')
@section('title') Password @endsection
@section('head', 'Password')
@section('content')

	<form class="profile_form" style="margin-top: 60px; margin-bottom: 60px;">
	  <h5>Password Change</h5>
	  <div class="form-group">
	  	<label for="email">Current Password:</label>
	  	<div class="relative">
		  	<input class="form-control" type="password" id="current_password" name="current_password" required="" placeholder="Current Password...">
		  	<i class="fa fa-lock"></i>
	  	</div>
	  </div>
	  <div class="form-group">
	  	<label for="email">New Password:</label>
	  	<div class="relative">
		  	<input class="form-control" type="password" id="new_password" name="new_password" required="" placeholder="New Password (Upper, LowerCase & Number)" pattern="^(?=.*\d)(?=.*[a-z])(?=.*[A-Z])(?!.*\s).*$">
		  	<i class="fa fa-lock"></i>
	  	</div>
	  </div>
	  <div class="form-group">
	  	<label for="email">Retype Password:</label>
	  	<div class="relative">
		  	<input class="form-control" type="password" id="retype_password" required="" placeholder="Retype Password..." pattern="^(?=.*\d)(?=.*[a-z])(?=.*[A-Z])(?!.*\s).*$">
		  	<i class="fa fa-lock"></i>
	  	</div>
	  </div>
	  <div class="tright">
	  	<a href=""><button class="movebtn movebtnre" type="Reset"><i class="fa fa-fw fa-refresh"></i> Reset </button></a>
	  	<a href=""><button class="movebtn movebtnsu" type="Submit">Update<i class="fa fa-paper-plane-o"></i></button></a>
	  </div>
	</form>
@endsection
