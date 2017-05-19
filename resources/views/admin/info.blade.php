<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible " content="IE=edge">
<meta name ="viewport" content="width=device-width, initial-scale=1">
	<title>Info</title>
	<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

<script type="text/javascript">
	function makeActive(){
		return "active";
	}
</script>
</head>


<body>



<ul class="nav nav-tabs">
  <li role="presentation"><a href="/admin">Home</a></li>
  <li role="presentation" class="active"><a href="#">Info</a></li>
  <li role="presentation"><a href="/adminau">Authorize</a></li>
    <li role="presentation" align = "right"><a href="/logout">Logout</a></li>
</ul>
<div class="container">
<h1></h1>	
</div>
<div class="container"></div>
<div class="container">
<table class="table">
	<thead class="thead-default">
	<tr>
	<th>Voter I.D.</th>
	<th>Name</th>
	<th>Gender</th>
	<th>D.O.B.</th>
	<th>P. Voted</th>
	</tr>
	</thead>
	<tbody>
	@foreach($infos as $info)
	<tr>
	<td>{{$info->voterid}}</td>
	<td>{{$info->name}}</td>
	<td>{{$info->gender}}</td>
	<td>{{$info->dob}}</td>
	<td>{{$info->pvoted}}</td>
	</tr>
	@endforeach	
	</tbody>
	
</table>
</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <script src="js/bootstrap.min.js"></script>

</body>
</html>