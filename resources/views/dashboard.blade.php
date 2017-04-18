
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

	
</head>
<body>


<div class="container">




<div class="rows">

<div class="col-lg-3 col-md-3 col-sm-5 col-xs-8 col-lg-offset-3 ">
<br/>
&nbsp &nbsp  &nbsp &nbsp <img src="pictures/usericon.ico" height="170" width="170" />

<br/><br/><div class="input-group input-group-sm">
<span class="input-group-addon">Name</span>
<input type="text" name="" class="form-control" placeholder="Full Name">
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
<input type="number" name="" class="form-control" placeholder="Voter ID Number">
</div>
</div>



<div class="selfclass col-lg-3 col-md-3 col-sm-5 col-xs-8 col-lg-offset-1">

<h3> CAST YOUR VOTE</h3>

<div class = "input-group input-group-sm">
<span class = "input-group-addon">Vote For :</span>
<select class="form-control">
	<option value="party1">   </option>
	<option value="party1">Party 1</option>
	<option value="party2">Party 2</option>
	<option value="party3">Party 3</option>
	<option value="party4">Party 4</option>
	<option value="party5">Party 5</option>
</select>
</div><br/>
&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp &nbsp &nbsp<img src="pictures/brand.ico" height="150" width="200" >
<br/>
<br/>
<div class="input-group input-group-sm">
<span class = "input-group-addon">DATE</span>
<input type="date" class="form-control" name="">
</div><br/>
<div class="input-group input-group-sm">
<span class = "input-group-addon">TIME</span>
<input type="time" class="form-control" name="">
</div><br/>
<br/>
<br/>

<button type="submit" class="btn btn-default btn-md">Vote</button>

</div>

</div>
</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
</body>
</html>

@endsection