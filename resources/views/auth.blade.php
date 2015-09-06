@extends('app',['title'=>'Auth Form'])

@section('content')

<div class = "row">
	<div class = "col-sm-3 col-md-3"></div>
	<div class= "col-sm-6 col-md-6">
		<div class = "panel panel-default">
			<div class = "panel-heading">
				Auth Form
			</div>
			<div class = "panel-body">
				<form action = "/auth" method = "POST">
					<input type = "hidden" name = "_token" value = "{{csrf_token()}}">
					
					<label for = "Login">Login:</label>
					<input type = "text" name = "Login" class = "form-control" required>
					<label for = "Password">Password</label>
					<input type = "password" name = "Password" class = "form-control" required>
					
					<button type = "submit" class = "btn btn-primary">
						Log in
					</button>
				</form>
			</div>
		</div>
	</div>
	<div class = "col-sm-3 col-md-3"></div>
</div>

@stop
