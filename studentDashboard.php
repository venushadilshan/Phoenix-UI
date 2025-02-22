<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta http-equiv="Content-Language" content="en" />
    <meta name="msapplication-TileColor" content="#2d89ef">
    <meta name="theme-color" content="#4188c9">
    <meta name="apple-mobile-web-app-status-bar-style" content="black-translucent"/>
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="mobile-web-app-capable" content="yes">
    <meta name="HandheldFriendly" content="True">
    <meta name="MobileOptimized" content="320">
    <link rel="icon" href="./favicon.ico" type="image/x-icon"/>
    <link rel="shortcut icon" type="image/x-icon" href="./favicon.ico" />
    <!-- Generated: 2018-04-16 09:29:05 +0200 -->
    <title>Student Dashboard</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,300i,400,400i,500,500i,600,600i,700,700i&amp;subset=latin-ext">
    <script src="./assets/js/require.min.js"></script>
    <script>
      requirejs.config({
          baseUrl: '.'
      });
    </script>
     <link rel="stylesheet" href="assets/styles.css" type="text/css">
    <!-- Dashboard Core -->
    <link href="./assets/css/dashboard.css" rel="stylesheet" />
    <script src="./assets/js/dashboard.js"></script>
    <!-- c3.js Charts Plugin -->
    <link href="./assets/plugins/charts-c3/plugin.css" rel="stylesheet" />
    <script src="./assets/plugins/charts-c3/plugin.js"></script>
    <!-- Google Maps Plugin -->
    <link href="./assets/plugins/maps-google/plugin.css" rel="stylesheet" />
    <script src="./assets/plugins/maps-google/plugin.js"></script>
    <!-- Input Mask Plugin -->
    <script src="./assets/plugins/input-mask/plugin.js"></script>
</head>
<body>
	<div class="header py-4">
          <div class="container">
            <div class="d-flex">
              <a class="header-brand" href="./index.html">
               Phoenix 
              </a>
              <div class="d-flex order-lg-2 ml-auto">
              
                <div class="dropdown d-none d-md-flex">
                  <a class="nav-link icon" data-toggle="dropdown">
                    <i class="fe fe-bell"></i>
                    <span class="nav-unread"></span>
                  </a>

                  <div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow">
                    <a href="#" class="dropdown-item d-flex">
                      <span class="avatar mr-3 align-self-center" style="background-image: url(demo/faces/male/41.jpg)"></span>
                      <div>
                        <strong>Nathan</strong> pushed new commit: Fix page load performance issue.
                        <div class="small text-muted">10 minutes ago</div>
                      </div>
                    </a>
                    <a href="#" class="dropdown-item d-flex">
                      <span class="avatar mr-3 align-self-center" style="background-image: url(demo/faces/female/1.jpg)"></span>
                      <div>
                        <strong>Alice</strong> started new task: Tabler UI design.
                        <div class="small text-muted">1 hour ago</div>
                      </div>
                    </a>
                    <a href="#" class="dropdown-item d-flex">
                      <span class="avatar mr-3 align-self-center" style="background-image: url(demo/faces/female/18.jpg)"></span>
                      <div>
                        <strong>Rose</strong> deployed new version of NodeJS REST Api V3
                        <div class="small text-muted">2 hours ago</div>
                      </div>
                    </a>
                    <div class="dropdown-divider"></div>
                    <a href="#" class="dropdown-item text-center text-muted-dark">Mark all as read</a>
                  </div>
                </div>
                <div class="dropdown">
                  <a href="#" class="nav-link pr-0 leading-none" data-toggle="dropdown">
                    <span class="avatar" style="background-image: url(./demo/faces/female/25.jpg)"></span>
                    <span class="ml-2 d-none d-lg-block">
                      <span class="text-default">Username</span>
                      <small class="text-muted d-block mt-1">Student</small>
                    </span>
                  </a>
                  <div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow">
                    <a class="dropdown-item" href="#">
                      <i class="dropdown-icon fe fe-user"></i> Profile
                    </a>
                   
                    <a class="dropdown-item" href="#">
                      <span class="float-right"><span class="badge badge-primary">6</span></span>
                      <i class="dropdown-icon fe fe-mail"></i> Inbox
                    </a>
                    <a class="dropdown-item" href="#">
                      <i class="dropdown-icon fe fe-send"></i> Message
                    </a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="#">
                      <i class="dropdown-icon fe fe-help-circle"></i> Need help?
                    </a>
                    <a class="dropdown-item" href="#">
                      <i class="dropdown-icon fe fe-log-out"></i> Sign out
                    </a>
                  </div>

                </div>

              </div>
              <div class="nav-item d-none d-md-flex">
                  <a class="btn btn-sm btn-outline-primary" data-toggle="modal" data-target="#courseModal">Enroll to a Course</a>
                </div>
              <a href="#" class="header-toggler d-lg-none ml-3 ml-lg-0" data-toggle="collapse" data-target="#headerMenuCollapse">
                <span class="header-toggler-icon"></span>
              </a>
            </div>
          </div>
        </div>

        <div class="container">
        	<div class="row">
  <div class="col-8">
  	
<br>
<h4> Enrolled Courses </h4>
  <div class="row">
    <div class="col-sm">
     <div class="card" style="width: 100%;">
  <img class="card-img-top" src="assets/images/coursecap.jpg" alt="Card image cap">
  <div class="card-body">
    <h5 class="card-title">Computer Systems</h5>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
    <a href="#" class="btn btn-primary">View</a>
     <a href="#" class="btn btn-danger">Unenroll</a>
  </div>
</div>
<div class="card">
                  <div class="card-status bg-red"></div>
                  <div class="card-header">
                    <h3 class="card-title">You have not enrolled to any course</h3>
                    <div class="card-options">
                      <a href="#" class="card-options-collapse" data-toggle="card-collapse"><i class="fe fe-chevron-up"></i></a>
                      <a href="#" class="card-options-remove" data-toggle="card-remove"><i class="fe fe-x"></i></a>
                    </div>
                  </div>
                  
                </div>
    </div>
    <div class="col-sm">
     <div class="card" style="width: 100%;">
  <img class="card-img-top" src="assets/images/coursecap.jpg" alt="Card image cap">
  <div class="card-body">
    <h5 class="card-title">Software Engineering</h5>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
    <a href="#" class="btn btn-primary">View</a>
     <a href="#" class="btn btn-danger">Unenroll</a>
  </div>
</div>
    </div>
    
  </div>


  </div>
  <div class="col-4">
  	<br>
  	<h4> Assisgnments and Tests </h4>
  				<div class="card">
                  <div class="card-header">
                    <h2 class="card-title">Assignments</h2>
                  </div>
                  <table class="table card-table">
                    <tbody><tr>
                      <td>Software Engineering</td>
                      <td class="text-right">
                       <span class="badge badge-warning">Pending</span> <a class="btn btn-sm btn-outline-primary margin5px txtw" data-toggle="modal" data-target="#assignmentModal"> Submit </a> 
                      </td>
                    </tr>
                   
                  </tbody></table>
                </div>

                	<div class="card">
                  <div class="card-header">
                    <h2 class="card-title">Tests</h2>
                  </div>
                  <table class="table card-table">
                    <tbody><tr>
                      <td>Hardware Engineering</td>
                      <td class="text-right">
                       <span class="badge badge-success">Submitted</span> <a class="btn btn-sm btn-outline-primary margin5px txtw" > Resubmit </a> 
                      </td>
                    </tr>
                   
                  </tbody></table>
                </div>

  </div>
</div>



<!-- Modal for submit assignments -->
<div class="modal fade" id="assignmentModal" tabindex="-1" role="dialog" aria-labelledby="assignmentModal" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="assignmentModal">Submit an Assignment</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <p> Assignment Name</p>
        <p> Due Date </p>
         <input type="file" name="fileToUpload" id="fileToUpload" class="btn btn-primary">
    <input type="submit" class="btn btn-success" value="Upload" name="submit">
    <br>
         <div class="form-group">
    <label for="exampleFormControlTextarea1">Comment</label>
    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
  </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Done</button>
      </div>
    </div>
  </div>
</div>

<!-- modal for enroll to a course-->
<div class="modal fade" id="courseModal" tabindex="-1" role="dialog" aria-labelledby="courseModal" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="courseModal">Enroll to a Course</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
       <input type="text" name="txtCourseID" id="txtCourseID" class="form-control" placeholder="Course Code">
        <br>
   
    <br>
 
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Enroll</button>
      </div>
    </div>
  </div>
</div>
<hr>
<h4> Your Progress </h4>

<div class="container">
  <div class="row">
    <div class="col-sm">
      <div class="card">
                  <div class="card-header">
                    <h4 class="card-title">Tests</h4>  <a class="btn btn-sm btn-outline-primary margin5px txtw " > Generate Report </a>
                  </div>
                  <table class="table card-table">
                    <tbody>
                    	<tr>
                    
                      <td>Python Test</td>
                      <td class="text-right"><span class="text-muted">23%</span></td>
                    </tr>
                    <tr>
                    
                      <td>C Test</td>
                      <td class="text-right"><span class="text-muted">50%</span></td>
                    </tr>
                    
                  </tbody></table>
                

    </div>
</div>
    <div class="col-sm">
       <div class="card">
                  <div class="card-header">
                    <h4 class="card-title">Assignments  </h4> <a class="btn btn-sm btn-outline-primary margin5px txtw"> Generate Report </a> 
                  </div>
                  <table class="table card-table">
                    <tbody>
                    	<tr>
                    
                      <td>Python Test</td>
                      <td class="text-right"><span class="text-muted">23%</span></td>
                    </tr>
                    <tr>
                    
                      <td>C Test</td>
                      <td class="text-right"><span class="text-muted">50%</span></td>
                    </tr>
                    
                  </tbody></table>
                </div>
    </div>
  
  </div>
</div>
        </div>

</body>
</html>