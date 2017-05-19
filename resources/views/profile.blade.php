@extends('layouts.app')
@section('content')
<div class="container">
	<div class="row">
	<div class="col-md-7 col-md-offset-1">
	<div class="panel panel-default">
	<div class="panel-heading"><h3>{{$user->name}}'s Profile</h3></div>
	<div class="panel-body">
	<img src = "/uploads/avatars/{{$user->avatar}}" style="width:150px; height:150px;float:left;border-radius:50%; margin-right: 25px">
	<form enctype="multipart/form-data" action="/profile" method="POST">
		<label>Update Profile Image</label>
	     <input type="file" name="avatar">
		<input type="hidden" name="_token" value="{{csrf_token() }}">
		<input type="submit" class="pull-right btn btn-sm btn-primary">
	</form>
	</div>
		
	</div>
		
	</div>
		
	</div>
</div>

@endsection