<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>student mgnt-official</title>

    <style>
    /* The side navigation menu */
    .sidebar {
        margin: 0;
        padding: 0;
        width: 200px;
        background-color: #f1f1f1;
        position: fixed;
        height: 100%;
        overflow: auto;
    }

    /* Sidebar links */
    .sidebar a {
        display: block;
        color: black;
        padding: 16px;
        text-decoration: none;
    }

    /* Active/current link */
    .sidebar a.active {
        background-color: #04AA6D;
        color: white;
    }

    /* Links on mouse-over */
    .sidebar a:hover:not(.active) {
        background-color: #555;
        color: white;
    }

    /* Page content. The value of the margin-left property should match the value of the sidebar's width property */
    div.content {
        margin-left: 200px;
        padding: 1px 16px;
        height: 1000px;
    }

    /* On screens that are less than 700px wide, make the sidebar into a topbar */
    @media screen and (max-width: 700px) {
        .sidebar {
            width: 100%;
            height: auto;
            position: relative;
        }

        .sidebar a {
            float: left;
        }

        div.content {
            margin-left: 0;
        }
    }

    /* On screens that are less than 400px, display the bar vertically, instead of horizontally */
    @media screen and (max-width: 400px) {
        .sidebar a {
            text-align: center;
            float: none;
        }
    }
    </style>
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <nav class="navbar navbar-expand-lg navbar-light bg-light">
                    <div class="container-fluid me-5">
                        <a class="navbar-brand" href="#">STUDENT MANAGEMENT SYSTEM</a>
                        <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                            data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                            aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse" id="navbarSupportedContent">
                            <form class="d-flex ms-5">
                                <input class="form-control ms-5 me-2" type="search" placeholder="Search"
                                    aria-label="Search">
                                <button class="btn btn-outline-success" type="submit">Search</button>
                            </form>
                        </div>
                    </div>
                </nav>
            </div>
        </div>
        <div class="row">
            <!-- side Bar -->
            <div class="col-md-3">
                <!-- The sidebar -->
                <div class="sidebar">
                    <a class="active" href="{{ url('/home')}}">Home</a>
                    <a href="{{ url('/students')}}">Student</a>
                    <a href="{{ url('/teachers')}}">Teacher</a>
                    <a href="{{ url('/courses')}}">Courses</a>
                    <a href="{{ url('/enrollments')}}">Enrollment</a>
                    <a href="{{ url('/payments')}}">Payment</a>
                </div>
            </div>

            <!-- Page content -->
            <div class="col-md-9">

                <!-- <h1>text</h1> -->
                @yield('content')

            </div>
        </div>
    </div>
    </div>

    <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script> -->
</body>

</html>