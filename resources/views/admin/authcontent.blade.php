@extends('admin.authorize')
@section('content')

<form method="post" action="/authorized" style="margin-top: 30px">
{{ csrf_field() }}
<div class="rows">
<div class="col-lg-3">
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
</div>
</form>



@endsection