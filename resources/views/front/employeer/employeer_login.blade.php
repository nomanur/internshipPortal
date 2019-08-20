<!DOCTYPE html>
<html>
	<head>
		<title>Employeer Login</title>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
		<link rel="stylesheet" type="text/css" href="{{URL::asset('/css/custom.css')}}">
	</head>
	<body>
		<nav class="navbar navbar-default">
			<div class="container">
				<!-- Brand and toggle get grouped for better mobile display -->
				<div class="navbar-header">
					<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					</button>
					<a class="navbar-brand" href="index.php">
						
						<img src="{{URL::asset('/images/logo.png')}}" alt="profile Pic" >
					</a>            </div>
					<!-- Collect the nav links, forms, and other content for toggling -->
					<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
						
						<ul class="main-nav nav navbar-nav navbar-right">
							<li class="wow fadeInDown" data-wow-delay="0s"><a class="active" href="index.php" style="color:#0033CC"><strong>Home</strong></a></li>
							
						</ul>
						</div><!-- /.navbar-collapse -->
						</div><!-- /.container-fluid -->
					</nav>
					<div class="container slider-content">
						<div class="row">
							<div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1 col-sm-12">
								<h3><span style=" color:#006699">&nbsp;&nbsp;Applicant Login&nbsp;&nbsp;</span>



				@if(Session::has('login_error'))
					<p class="bg-danger" style="margin-top: 50px; background: red;">{{session('login_error')}}</p>
				@endif


								<br /><span style=" color:#006600; font-size:12px">[(Please login with Student portal ID and Password)</span>
								</h3>
								<div class="search-form wow pulse" data-wow-delay="0.8s">
									{!! Form::open(['method'=>'POST', 'action'=>'EmployeerLoginController@login', 'class'=>'form-inline']) !!}
									@csrf
									
									<div class="form-group">
										{!! Form::label('employeer_id', 'Employeer Id') !!}
										{!! Form::number('employeer_id', null, ['class'=>'form-control', 'placeholder'=>'Employeer Id']) !!}
									</div>
									<div class="form-group">
										{!! Form::label('password', 'Password') !!}
										{!! Form::password('password', ['class'=>'form-control', 'placeholder'=>'Password']) !!}
									</div>
									
									<div class="form-group">
										{!! Form::submit('Login', ['class'=>'btn btn-primary']) !!}
									</div>
									{!! Form::close() !!}
								</div>
							</div>
						</div>
					</div>
				</div>
				
				
					<!-- Latest compiled and minified JavaScript -->
					<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
					
				</body>
			</html>