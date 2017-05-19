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
<h4 class="panel-heading">Registered Users</h4>
</div>
<div class="panel-body"  style="max-height: 10;overflow-y: scroll;">
<table class="table table-fixed">
	<thead class="thead-default">
	<tr>
	<th>#</th>
	<th>Full Name</th>
	<th>Gender</th>
    <th>Voter I.D.</th>
	</tr>
	</thead>
	<tbody>
	<tr>
	<td>1</td>
	<td>Gaurav Negi</td>
	<td>male</td>
	<td>1003</td>
	</tr>
	</tbody>
</table>
</div>
</div>
</div>

<div class ="col-lg-7">
<div class="panel panel-primary">
<div class="panel-heading">
<h4 class="panel-heading">Authorised Users</h4>
</div>
<div class="panel-body"  style="max-height: 10;overflow-y: scroll;">
<table class="table ">
	<thead class="thead-default">
	<tr>
	<th>#</th>
	<th>Full Name</th>
	<th>Gender</th>
    <th>Voter I.D.</th>
	</tr>
	</thead>
	<tbody>
	<tr>
	<td>1</td>
	<td>Gaurav Negi</td>
	<td>male</td>
	<td>1003</td>
	</tr>
	</tbody>
</table>
</div>
</div>
</div>

@endsection