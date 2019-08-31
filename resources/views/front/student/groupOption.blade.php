<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Student Group option</title>
        
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

        <link rel="stylesheet" type="text/css" href="{{URL::asset('/css/appDash.css')}}">
        <link href="assets/css/responsive.css" rel="stylesheet">
    </head>
    <body>
        
        <div class="header-area">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="logo">
                            <img src="assets/img/logo.jpg" alt="">
                        </div>
                    </div>
                </div>
                <div class="menu">
                    <div class="row">
                        <div class="col-md-12">
                            <ul>
                                <li><a href="">Dashboard</a></li>
                                <li><a href="">Opening Jobs</a></li>
                                <li><a href="">Logout</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="title text-center ">
                        
                        {!! Form::open(['method'=>'POST', 'action'=>'StudentGroupController@store']) !!}
                    
                        <div class="form-group">
                            {!! Form::label('group_status', 'Are you in a group') !!}
                            {!! Form::select('group_status',array('1'=>'Yes', '0'=>'No'), null, ['class'=>'form-control col-md-2 offset-md-5']) !!}
                        </div>
                            
                        <div class="form-group">
                            {!! Form::submit('Create Post', ['class'=>'btn btn-primary']) !!}
                        </div>


                    {!! Form::close() !!}

                </div>
                </div>
            </div>
        </div>



        <div class="footer">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="menu">
                            <ul>
                                <li><a href="">Copyright © 2019 Daffodil International University</a></li>
                                <li><a href="">About us | Contact Us</a></li>
                                <li><a href="">Created By</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
            
            
            <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
            
        </body>
    </html>