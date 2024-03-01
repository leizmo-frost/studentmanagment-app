<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Student managment system</title>
    <style>
        /* The side navigation menu */
.sidebar {
  margin:0;
  padding:0;
  width:200px;
  background-color:#f1f1f1;
  position:fixed;
  height:100%;
  overflow:auto;
}

/* Sidebar links */
.sidebar a {
  display:block;
  color:black;
  padding:16px;
  text-decoration:none;
}

/* Active/current link */
.sidebar a.active {
  background-color:#2b08f4;
  color:white;
}

/* Links on mouse-over */
.sidebar a:hover:not(.active) {
  background-color:#131212;
  color:white;
}

/* Page content. The value of the margin-left property should match the value of the sidebar's width property */
div.content {
  margin-left:200px;
  padding:1px 16px;
  height:1000px;
}

/* On screens that are less than 700px wide, make the sidebar into a topbar */
@media screen and (max-width:700px) {
  .sidebar {
    width:100%;
    height:auto;
    position:relative;
  }
  .sidebar a {float:left;}
  div.content {margin-left:0;}
}

/* On screens that are less than 400px, display the bar vertically, instead of horizontally */
@media screen and (max-width:400px) {
  .sidebar a {
    text-align:center;
    float:none;
  }
}
    </style>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class=col-md-12>
            <nav class="navbar navbar-expand-lg navbar-light bg-light">
                <div class="container-fluid">
                  <a class="navbar-brand" href="#"><h2 style="text-align:center">student managment</h2></a>
                  <div class="collapse navbar-collapse" id="navbarSupportedContent">
                  </div>
                </div>
              </nav>
            </div>
        </div>
        <div class="row">
            <div class=col-md-3>
                <!-- The sidebar -->
                 <div class="sidebar">
                    <a class="active" href="#home">Home</a>
                    <a href="{{ url('/students') }}">Student</a>
                    <a href="{{ url('/teachers') }}">Teacher</a>
                    <a href="{{ url('/courses') }}">Courses</a>
                    <a href="{{ url('/batches') }}">Batches</a>
                    <a href="{{ url('/enrollments') }}">Enrollments</a>
                    <a href="{{ url('/payment') }}">Payment</a>
                </div>
            </div>
            <div class=col-md-9>
                <!-- Page content -->
                @yield('content')
            </div>
        </div>
    </div>

</body>
</html>
