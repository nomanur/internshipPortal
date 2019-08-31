<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Student Academic Info</title>
        
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
                    <div class="title text-center">
                        <h4>Academic information</h4>
                    </div>

                        
                        <div class="row">
                            <div class="col-md-6">
                                <h6>Supervisor:</h6>
                            </div>
                            <div class="col-md-6">
                                <h6>Co-Supervisor:</h6>
                            </div>
                        </div>
                </div>
            </div>
        </div>

        <hr>

        <div class="info-area">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                           {!! Form::open(['method'=>'POST', 'action'=>'StudentGroupController@academicInfo']) !!}
                        <div class="row">
                            <div class="col-md-6">
                               <div class="form-group">
                                   {!! Form::label('internship_semester', 'Internship Semester') !!}
                                   {!! Form::select('internship_semester',[''=>'Choose Options', '1'=>'spring 2019'], null, ['class'=>'form-control']) !!}
                               </div>
                            </div>
                            <div class="col-md-6">
                               <div class="form-group">
                                   {!! Form::label('till_now_completed_credits', 'Till Now Completed Credits') !!}
                                   {!! Form::text('till_now_completed_credits', null, ['class'=>'form-control']) !!}
                               </div>
                            </div>
                            <div class="col-md-6">
                               <div class="form-group">
                                   {!! Form::label('group_id', 'Group Id') !!}
                                   {!! Form::text('group_id', null, ['class'=>'form-control']) !!}
                               </div>
                            </div>
                            <div class="col-md-6">
                               <div class="form-group">
                                   {!! Form::label('specification', 'Specification') !!}
                                   {!! Form::text('specification', null, ['class'=>'form-control']) !!}
                               </div>
                            </div>
                            <div class="col-md-6">
                               <div class="form-group">
                                   {!! Form::label('internship_arranged_by', 'Internship Arranged By') !!}
                                   {!! Form::select('internship_arranged_by',['1'=>'CBC', '2'=>'SELF'], NULL, ['class'=>'form-control']) !!}
                               </div>
                            </div>
                            <div class="col-md-6">
                               <div class="form-group">
                                   {!! Form::label('result_till_now', 'Result till now (out of 4)') !!}
                                   {!! Form::text('result_till_now', null, ['class'=>'form-control']) !!}
                               </div>
                            </div>
                            <div class="col-md-6">
                               <div class="form-group">
                                   {!! Form::label('int_strarting_date', 'Internship starting date') !!}
                                   {!! Form::date('int_strarting_date', null, ['class'=>'form-control']) !!}
                               </div>
                            </div>
                        </div>
                       
                       
                           <div class="form-group">
                               {!! Form::submit('Submit', ['class'=>'btn btn-primary']) !!}
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