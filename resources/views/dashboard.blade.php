
@extends('layouts.app')

@section('content')

<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible " content="IE=edge">
<meta name ="viewport" content="width=device-width,initial-scale=1">
	<title></title>
	<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<style type="text/css">
		.input-group {
    position: relative;
    display: table;
    border-collapse: separate;
    padding-bottom: 25px;
	}
	</style>
	
</head>
<body>


<div class="container" style="padding-top: inherit;">




<div class="rows">
<!--
<div class="col-lg-3 col-md-3 col-sm-5 col-xs-8 col-lg-offset-3 ">
<br/>
&nbsp &nbsp  &nbsp &nbsp <img src="/pictures/usericon.png" height="170" width="170" />

<br/><br/><div class="input-group input-group-sm">
<span class="input-group-addon">Name</span>


<input type="text" name="" class="form-control" placeholder="Full Name"  value=" {{Auth::user()->name }}">
</div><br/>
<div class = "input-group input-group-addon-sm">
<span class="input-group-addon">Gender</span>
<input type="text" name="" class="form-control" placeholder="Gender">
</div><br/>

<div class="input-group input-group-sm">
<span class="input-group-addon">D.O.B.</span>
<input type="date" name="" class="form-control" placeholder="Date of birth">
</div><br/>
<div class="input-group input-group-sm">
<span class="input-group-addon">VOTER I.D.</span>
<input type="text" name="" class="form-control" placeholder="Voter ID Number"  value=" {{Auth::user()->id}}">
</div>
</div>
//-->



<img src="/pictures/brand.png" height="150" width="200" border="1" style="border: black;border-style:double">

<div class="selfclass col-lg-3 col-md-3 col-sm-5 col-xs-8 col-lg-offset-1">

<!--<h3> CAST YOUR VOTE</h3>//-->


<div class = "input-group input-group-md" style="padding-bottom:25px">
<span class = "input-group-addon">Vote For :</span>
<select class="form-control">
	@foreach($party as $p)
	<option value="{{$p['name']}}"> {{ $p['name'] }}</option>
	@endforeach
</select>
<br/>
</div>
<div class="input-group input-group-md">
<span class = "input-group-addon">DATE</span>
<input type="date" class="form-control" name="">
</div><br/>
<div class="input-group input-group-md">
<span class = "input-group-addon">TIME</span>
<input type="time" class="form-control" name="">
</div>
<br/>
<br/>
<br/>


</div>

</div>

</div>
<button type="submit" class="btn btn-success btn-md" style="padding-left: inherit;
    margin-left: 128px;
    margin-right: 25px">Vote</button>
<button type="submit" class="btn btn-default btn-md" style="padding-left: inherit">Abort</button>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
</body>
</html>

@endsection