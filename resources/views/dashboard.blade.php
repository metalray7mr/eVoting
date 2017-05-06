
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
<style type="button.css"></style>
</head>
<body>


<div class="container">




<div class="rows">

<div class="col-lg-3 col-md-3 col-sm-5 col-xs-8 col-lg-offset-3 ">
<br/>
&nbsp &nbsp  &nbsp &nbsp <img src="pictures/usericon.ico" height="170" width="170" />

<br/><br/><div class="input-group input-group-sm">
<span class="input-group-addon">Name</span>
<input type="text" name="" class="form-control"  placeholder="{{Auth::user()->name }}">
</div><br/>
<div class = "input-group input-group-sm">
<span class="input-group-addon">Gender</span>
<input type="text" name="" class="form-control" placeholder="{{Auth::user()->Gender }}">
</div><br/>

<div class="input-group input-group-sm">
<span class="input-group-addon">D.O.B.</span>
<input type="" name="" class="form-control" placeholder="{{Auth::user()->dob }}">
</div><br/>
<div class="input-group input-group-sm">
<span class="input-group-addon">VOTER I.D.</span>
<input type="" name="" class="form-control" placeholder="{{Auth::user()->id }}">
</div>
</div>



<div class="selfclass col-lg-3 col-md-3 col-sm-5 col-xs-8 col-lg-offset-1">

<h3> CAST YOUR VOTE</h3>

<div id=voteindex class = "input-group input-group-sm">
<span class = "input-group-addon">Vote For :</span>

</div>
<select class="form-control" class = "input-group-addon" onchange="document.getElementById('preview').src = this.value">
	<option value="">   </option>
    <option value="pictures/1.ico">Party 1</option>
    <option value="pictures/2.ico">Party 2</option>
    <option value="pictures/3.ico">Party 3</option>
    <option value="pictures/4.ico">Party 4</option>
    <option value="pictures/5.ico">Party 5</option>
    <option value="pictures/6.ico">Party 6</option>
</select>

&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp &nbsp &nbsp &nbsp &nbsp<img id="preview" height="150" width="150">

<br/>

<br/>
<br/>
<script type="text/javascript">
document.write ('<p>DATE: <span id="date-time">', new Date().toLocaleString(), '<\/span>.<\/p>')
if (document.getElementById) onload = function () {
	setInterval ("document.getElementById ('date-time').firstChild.data = new Date().toLocaleString()", 50)
}
</script>
<br/>
<br/>
<!-- <input type = 'submit' value = "Add student" href="{{ url('/home/face') }}"/> 
<a type = 'submit' value = "Add student" href="{{ url('/home/face') }}" >vote</a> 

-->
<form action="/action_page.php" method="get">
 
 
&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp &nbsp &nbsp  &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp &nbsp &nbsp &nbsp &nbsp<button type="submit" formaction="{{ url('/home/face') }}" >vote</button> 
 

</form>

</div>

</div>
</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
</body>
</html>

@endsection