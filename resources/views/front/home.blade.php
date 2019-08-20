<!DOCTYPE html>
<html>
	<head>
		<title>Home</title>
		<!-- Latest compiled and minified CSS -->
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


		

	<div class="content-area">
            <div class="container">
               
                <div class="row how-it-work text-center">
                    <div class="col-md-3"><a href="{{route('employeer.login')}}" style="text-decoration:none; color:#0066FF">
                        <div class="single-work wow fadeInUp" data-wow-delay="0.8s">
                            <img src="{{URL::asset('/images/admin.png')}}" alt="">
                            <h3>Supporting Offices  </h3>
                            <strong>Login</strong>
                        </div></a>
                    </div>
					<div class="col-md-3"><a href="{{route('student.login')}}" style="text-decoration:none; color:#0066FF">
                        <div class="single-work wow fadeInUp" data-wow-delay="0.8s">
                            <img src="{{URL::asset('/images/student.png')}}" alt="">
                            <h3>Students</h3>
                           <strong>Login</strong>
                        </div></a>
                    </div>
                    <div class="col-md-3"><a href="?app=employer" style="text-decoration:none; color:#0066FF">
                        <div class="single-work  wow fadeInUp"  data-wow-delay="0.9s">
                            <img src="{{URL::asset('/images/teacher.png')}}" alt="">
                            <h3>Academic Supervisor</h3>
                            <strong>Login</strong>
                        </div></a>
                    </div>
                    <div class="col-md-3"><a href="?app=corporate_login" style="text-decoration:none; color:#0066FF">
                        <div class="single-work wow fadeInUp"  data-wow-delay="1s">
                            <img src="{{URL::asset('/images/how-work3.png')}}" alt="">
                            <h3>Industrial Supervisor</h3>
                           <strong>Login</strong>
                        </div></a>
                    </div>
                </div>
            </div>

        </div>





        <div class="header-connect" style="background-color:#20961C;">
            <div class="container">
                <div class="row">
                    <div class="col-md-10">
                        <div class="header-half header-call" >
                            <p style="color:#FFFFFF">
							
							<span>Career Development Center (CDC), Daffodil International University (DIU)</span><br />
<span><i class="icon-map"></i>Address: Daffodil Tower (DT), Level-4,  4/2 Sobhanbag, Dhanmondi, Dhaka-1207, Bangladesh</span><br />

<span><i class="icon-mail"></i>cdc.internship@daffodilvarsity.edu.bd</span>
<span><i class="icon-cloud"></i>Ph: :02 8130864, 8129177, 8129402 Ext: 400 , Cell: 01991195535, Skype: cdc.diu</span>  </p>
                        </div>
                    </div>
                    <div class="col-md-2">
                        <div class="header-half header-social">
                            <ul class="list-inline">
                                <li><a href="https://www.facebook.com/diu.cdc" style="color:#FFFFFF"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="https://twitter.com/diucdc" style="color:#FFFFFF"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="#" style="color:#FFFFFF"><i class="fa fa-google-plus"></i></a></li>
                                <li><a href="https://www.linkedin.com/start/join?session_redirect=https%3A%2F%2Fwww.linkedin.com%2Fgroups%2F6723416&trk=login_reg_redirect" style="color:#FFFFFF"><i class="fa fa-linkedin"></i></a></li>
                                <li><a href="https://www.youtube.com/channel/UC4Eci1l5W7iKQ75UHDqShHw" style="color:#FFFFFF"><i class="fa fa-youtube"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>




		<!-- Latest compiled and minified JavaScript -->
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
	</body>
</html>