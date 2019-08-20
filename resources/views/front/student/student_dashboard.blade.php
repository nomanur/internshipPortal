<!DOCTYPE html>
<html>
	<head>
		<title>dashboard</title>
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
							<a class="dropdown-item active" href="{{ route('logout') }}"
								onclick="event.preventDefault();
								document.getElementById('logout-form').submit();">
								{{ __('Logout') }}
							</a>
							
						</ul>
						</div><!-- /.navbar-collapse -->
						</div><!-- /.container-fluid -->
					</nav>
					
					<style type="text/css">
						html{
							overflow: auto;
						}
						form{
							margin-top: 80px;
						}
						input.btn.btn-primary.new{
							margin-top: 30px;
							margin-left: 220px;
						}
						a.dropdown-item.active {
					margin-top: 14px;
					display: block;
					text-decoration: none;
					font-weight: bold;
					float: left;
					}
					
					
					</style>
					<!-- <div class="container slider-content">
												<div class="row">
							<div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1 col-sm-12"> -->
								
								
								<div class="container">
									<div class="row">
										
										<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
											@csrf
										</form>
										
										
										<div class="well">
											
											{!! Form::model($user, ['method'=>'POST', 'action'=>['StudentLoginController@store', 'class'=>'form-horizontal', $user->id]]) !!}
											<fieldset>
												
												<legend>Dashboard</legend>
												
												<!-- Email -->
												<div class="form-group">
													{!! Form::label('full_name', 'Full Name', ['class'=>'col-lg-2 control-label']) !!}
													<div class="col-lg-10">
														{!! Form::text('full_name', isset($user->student->full_name)?$user->student->full_name:null, ['class'=>'form-control', 'placeholder'=>'Your Full Name',]) !!}
													</div>
												</div>
												<div class="form-group">
													{!! Form::label('department', 'Department', ['class'=>'col-lg-2 control-label']) !!}
													<div class="col-lg-10">
														{!! Form::text('department', isset($user->student->department) ? $user->student->department :null, ['class'=>'form-control', 'placeholder'=> 'Your Department Name' ]) !!}
													</div>
												</div>
												<div class="form-group">
													{!! Form::label('cell_phone', 'Cell Phone',  ['class'=>'col-lg-2 control-label']) !!}
													<div class="col-lg-10">
														{!! Form::number('cell_phone', isset($user->student->cell_phone) ? $user->student->cell_phone:null, ['class'=>'form-control', 'placeholder'=>'Your Cell Phone']) !!}
													</div>
												</div>
												<div class="form-group">
													{!! Form::label('nationality', 'Nationality', ['class'=>'col-lg-2 control-label']) !!}
													<div class="col-lg-10">
														{!! Form::text('nationality',isset( $user->student->nationality)?$user->student->nationality:null, ['class'=>'form-control', 'placeholder'=>'Your Nationality']) !!}
													</div>
												</div>
												
												<div class="form-group">
													{!! Form::label('religion', 'Religion ', ['class'=>'col-lg-2 control-label']) !!}
													<div class="col-lg-10">
														{!! Form::text('religion',isset( $user->student->religion)?$user->student->religion:null, ['class'=>'form-control', 'placeholder'=>'Your Religion']) !!}
													</div>
												</div>
												<div class="form-group">
													{!! Form::label('present_address', 'Present Address', ['class'=>'col-lg-2 control-label']) !!}
													<div class="col-lg-10">
														{!! Form::text('present_address',isset($user->student->present_address)?$user->student->present_address: null, ['class'=>'form-control', 'placeholder'=>'Your Present Address']) !!}
													</div>
												</div>
												<div class="form-group">
													{!! Form::label('arranged_by', 'Arranged By', ['class'=>'col-lg-2 control-label']) !!}
													<div class="col-lg-10">
														{!! Form::text('arranged_by',isset( $user->student->arranged_by)?$user->student->arranged_by:null, ['class'=>'form-control', 'placeholder'=>'Arranged By']) !!}
													</div>
												</div>
												<div class="form-group">
													{!! Form::label('arranged_by', 'Arranged By', ['class'=>'col-lg-2 control-label']) !!}
													<div class="col-lg-10">
														<!-- {!! Form::select('arranged_by', array([''=>'Select one', '1'=>'CDC', '2'=>'Teacher', '3'=>'Self']), isset($user->student->arranged_by)?$user->student->arranged_by:'Your Gender', ['class'=>'form-control']) !!} -->

														{!! Form::select('arranged_by', array(''=>'Select one', '1'=>'CDC', '2'=>'Teacher', '3'=>'Self'), '', ['class'=>'form-control']) !!}
													</div>
												</div>
												<div class="form-group">
													{!! Form::label('student_id', 'Student Id', ['class'=>'col-lg-2 control-label']) !!}
													<div class="col-lg-10">
														{!! Form::number('student_id', null, ['class'=>'form-control']) !!}
													</div>
												</div>
												<div class="form-group">
													{!! Form::label('program', 'Program', ['class'=>'col-lg-2 control-label']) !!}
													<div class="col-lg-10">
														{!! Form::text('program', isset($user->student->program)?$user->student->program:null, ['class'=>'form-control', 'placeholder'=>'Your Program']) !!}
													</div>
												</div>
												<div class="form-group">
													{!! Form::label('dob', 'Date of Birth', ['class'=>'col-lg-2 control-label']) !!}
													<div class="col-lg-10">
														{!! Form::date('dob',isset( $user->student->dob)?$user->student->dob:null, ['class'=>'js-form-control form-control']) !!}
													</div>
												</div>
												<div class="form-group">
													{!! Form::label('gender', 'Gender', ['class'=>'col-lg-2 control-label']) !!}
													<div class="col-lg-10">
														<!-- {!! Form::select('gender', array([''=>'Select One', '1'=>'Male', '2'=>'Female']), null, ['class'=>'form-control']) !!} -->
														{!! Form::select('gender', array(''=>'Select One',1 => 'Male', 2 => 'Female'), '', ['class'=>'form-control']) !!}
													</div>
												</div>
												<div class="form-group">
													{!! Form::label('email', 'Email', ['class'=>'col-lg-2 control-label']) !!}
													<div class="col-lg-10">
														{!! Form::email('email', null, ['class'=>'form-control']) !!}
													</div>
												</div>
												<div class="form-group">
													{!! Form::label('parmanent_address', 'Parmanent Addres', ['class'=>'col-lg-2 control-label']) !!}
													<div class="col-lg-10">
														{!! Form::text('parmanent_address', isset($user->student->parmanent_address)?$user->student->parmanent_address:null, ['class'=>'form-control', 'placeholder'=>'Your Parmanent Address']) !!}
													</div>
												</div>
												
												<div class="form-group">
													
													{!! Form::submit('Submit', ['class'=>'btn btn-primary new']) !!}
													
												</div>
												
												
												{!! Form::close()  !!}
												
											</div>
											
											
										</div>
										
									</div>
									
									
									<!-- Latest compiled and minified JavaScript -->
									<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
									
								</body>
							</body>
						</html>