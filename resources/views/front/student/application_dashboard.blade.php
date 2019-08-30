<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Quickstart pack</title>
        
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
        <div class="welcome-area">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="section-title text-center">
                            <h7>Welcome,<b>{{$user->name}}</b></h7>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="menu">
                            <ul>
                                <li><a href="">Resume Status</a></li>
                                <li><a href="">View Resume</a></li>
                                <li><a href="">Job Apply History</a></li>
                                <li><a href="">Application Status</a></li>
                                <li><a href="">Placement Info</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <p>Dear applicant, photocopy of your transcript must be submitted while collecting forwarding letter from Department and original copy of the transcript must be shown. Also please complete your resume before Creating Inern Information.</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="intern-info-area">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="section-title text-center">
                            <a href="{{url('student/dashboard/grp_option', $user->id)}}"><h6>Create Intern Info</h6></a>
                            
                            <p>Internship Application Information</p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="menu">
                            <ul>
                                <li>Group No</li>
                                <li>ID</li>
                                <li>Name</li>
                                <li>Cell No.</li>
                                <li>Supervisor</li>
                                <li>Company</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="approval-section">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="section-title">
                            <h2>View Approval Status</h2>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="menu">
                            <ul>
                                <li>Accounts Approval</li>
                                <li>Department Approval</li>
                                <li>Forwarding Letter</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="menu down-menu">
                            <ul>
                                <li>Pending</li>
                                <li>Pending</li>
                                <li><a href="">Not Ready Yet</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="note-section">
                            <div class="menu">
                                <ul>
                                    <li>Note</li>
                                    <li>Note</li>
                                    <li>Note</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="submission-section">
            <div class="container">
                <div class="row">
                    <div class="col-md-4">
                        <div class="box">
                            <h2> Total Apply Position : 0  Total CV View : 0  Total Short Listed : 0</h2>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="box">
                            <h6 class="text-center">Assigned questions</h6>
                            <div class="row">
                                <div class="col-md-3">
                                    <h6>Month</h6>
                                </div>
                                <div class="col-md-9">
                                    
                                    <select>
                                        <option value="volvo">Volvo</option>
                                        <option value="saab">Saab</option>
                                        <option value="opel">Opel</option>
                                        <option value="audi">Audi</option>
                                    </select>
                                    <button type="search">Search</button>
                                    <a href="">All answered question</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="box box-table">
                            <div class="box-table-cell">
                                <!-- <h6>Monthly Report to: <span>Not now</span></h6>
                                <h6>View Monthly Report From: <span>Not now</span></h6>
                                <h6>Final(pre/final defence) Report:</h6> -->
                                <div class="row">
                                    <div class="col-md-9">
                                        <h6>Monthly Report to:</h6>
                                        <h6>View Monthly Report From:</h6>
                                        <h6>Final(pre/final defence) Report:</h6>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="bordered-tag">
                                            <h6>Not now</h6>
                                            <h6>Not now</h6>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="box">
                            <h6 class="text-center">Answer Feedback Report</h6>
                            <div class="row">
                                <div class="col-md-3">
                                    <h6>Month</h6>
                                </div>
                                <div class="col-md-9">
                                    <select>
                                        <option value="">Select</option>
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                        <option value="4">4</option>
                                    </select>
                                    <button type="search">Search</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="box">
                            <h6 class="text-center">Corporate Evaluation Report</h6>
                            <div class="row">
                                <div class="col-md-3">
                                    <h6>Month</h6>
                                </div>
                                <div class="col-md-9">
                                    <select>
                                        <option value="">Select</option>
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                        <option value="4">4</option>
                                    </select>
                                    <button type="search">Search</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="box">
                            <h6 class="text-center">Surveillance Team Report</h6>
                            <div class="row">
                                <div class="col-md-5">
                                    <h6>Team Member</h6>
                                </div>
                                <div class="col-md-7">
                                    <select>
                                        <option value="">Select</option>
                                        
                                    </select>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-5">
                                    <h6>Month</h6>
                                </div>
                                <div class="col-md-7">
                                    <select>
                                        <option value="">Select</option>
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                        <option value="4">4</option>
                                    </select>
                                    <button type="search">Search</button>
                                </div>
                            </div>
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