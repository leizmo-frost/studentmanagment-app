<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Student Management System</title>
    <style>
        /* The side navigation menu */
        .sidebar {
            margin:0;
            padding:0;
            width:200px;
            background-color:#343a40; /* Changed background color to dark */
            position:fixed;
            height:100%;
            overflow:auto;
        }

        /* Sidebar links */
        .sidebar a {
            display:block;
            color:#ffffff; /* Changed text color to white */
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
            background-color:#f1f1f1; /* Light grey on hover */
            color:black;
        }

        /* Page content */
        .content {
            margin-left:200px;
            padding:1px 16px;
            min-height:1000px; /* Changed height to min-height for dynamic content */
        }

        /* Centering the header */
        .navbar-brand {
            width: 100%;
            text-align: center;
        }

        /* On screens that are less than 700px wide */
        @media screen and (max-width:700px) {
            .sidebar {
                width:100%;
                height:auto;
                position:relative;
            }
            .sidebar a {
                float:none;
                text-align:center;
            }
            .content {
                margin-left:0;
            }
        }
    </style>
</head>
<body>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <nav class="navbar navbar-expand-lg navbar-light bg-light">
                    <div class="container-fluid">
                        <a class="navbar-brand" href="#"><h2>Student Management</h2></a>
                    </div>
                </nav>
            </div>
        </div>
        <div class="row">
            <div class="col-md-3">
                <!-- The sidebar -->
                <div class="sidebar">
                    <a class="active" href="/welcome">Home</a>
                    <a href="/dashboards">Dashboard</a>
                    <a href="/students">Student</a>
                    <a href="/teachers">Teacher</a>
                    <a href="/courses">Courses</a>
                    <a href="/batches">Batches</a>
                    <a href="/enrollments">Enrollments</a>
                    <a href="/payments">Payment</a>
                    <a href="/exams">Exams</a>
                </div>
            </div>
            <div class="col-md-9">
                <!-- Page content -->
                @yield('content')
            </div>
        </div>
    </div>

</body>
</html>
