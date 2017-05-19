@extends('admin.authorize')
@section('content')


<div class ="col-lg-4">
<div class="panel panel-primary">
<div class="panel-heading">
<h4 class="panel-heading">Authorize Users</h4>
</div>
<div class="panel-body" >
<form method="post" action="/authorized" style="margin-top: 30px">
{{ csrf_field() }}
<div class="rows" style="margin-bottom: 7px">

<div class="input-group input-group-sm">
<span class="input-group-addon">Full Name</span>
<input type="text" name="name" class="form-control" placeholder="Full Name">
</div><br/>
<div class="input-group input-group-sm">
<span class="input-group-addon">Gender</span>
<select class="form-control" name="gender">
	<option value="male">Male</option>
	<option value="female">Female</option>
</select>
</div><br/>
<div class="input-group input-group-sm">
<span class="input-group-addon">DOB</span>
<input type="date" name="dob" class="form-control">
</div><br/>
<div class="input-group input-group-sm">
<span class="input-group-addon">Voter I.D.</span>
<input type="number" name="voterid" class="form-control">
</div><br/>
<div class="input-group input-group-sm">
<span class="input-group-addon">User I.D.</span>
<input type="number" name="userid" class="form-control">
</div><br/>
<button  type="submit" class="btn btn-success btn-md">Authorize</button>
<button  type="submit" class="btn btn-danger btn-md"><a href="/adminau">Abort</a></button>

</div>
</form>
</div>
</div>
</div>




<div class ="col-lg-7">
<div class="panel panel-primary">
<div class="panel-heading">
<h4 class="panel-heading">Authorized Users</h4>
</div>
<div class="panel-body">
<table class="table table-fixed">
	<thead class="thead-default">
	<tr>
	<th class="col-xs-1">ID</th>
	<th class="col-xs-4">Name</th>
	<th class="col-xs-4">Gender</th>
	<th class="col-xs-2">DOB</th>
	</tr>
	</thead>
	<tbody>
	@foreach($voters as $voter)
	<tr>
	<td class="col-xs-1">{{$voter->voterid}}</td>
	<td class="col-xs-4">{{$voter->name}}</td>
	<td class="col-xs-4">{{$voter->dob}}</td>
	<td class="col-xs-2">{{$voter->gender}}</td>
	</tr>
	@endforeach
	</tbody>
</table>
</div>
</div>
</div>

<div class ="col-lg-7">
<div class="panel panel-primary">
<div class="panel-heading">
<h4 class="panel-heading">Registered Users</h4>
</div>
<div class="panel-body">
<table class="table table-fixed">
	<thead class="thead-default">
	<tr>
	<th class="col-xs-1">#</th>
	<th class="col-xs-5">Name</th>
	<th class="col-xs-4">Gender</th>
	<th class="col-xs-1">ID</th>
	</tr>
	</thead>
	<tbody>
	@foreach($users as $user)
	<tr>
	<td class="col-xs-1">{{$user->id}}</td>
	<td class="col-xs-3">{{$user->name}}</td>
	<td class="col-xs-2">GENDER</td>
	<td class="col-xs-1">VOTERID</td>
	</tr>
	@endforeach
	</tbody>
</table>
</div>
</div>
</div>


@endsection