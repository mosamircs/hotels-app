<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Create Room</title>
    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{ asset('plugins/fontawesome-free/css/all.min.css') }}">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- Tempusdominus Bootstrap 4 -->
    <link rel="stylesheet" href="{{ asset('plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css') }}">
    <!-- iCheck -->
    <link rel="stylesheet" href="{{ asset('plugins/icheck-bootstrap/icheck-bootstrap.min.css') }}">
    <!-- JQVMap -->
    <link rel="stylesheet" href="{{ asset('plugins/jqvmap/jqvmap.min.css') }}">
    <!-- Theme style -->
    <link rel="stylesheet" href="{{ asset('dist/css/adminlte.min.css') }}">
    <!-- overlayScrollbars -->
    <link rel="stylesheet" href="{{ asset('plugins/overlayScrollbars/css/OverlayScrollbars.min.css') }}">
    <!-- Daterange picker -->
    <link rel="stylesheet" href="{{ asset('plugins/daterangepicker/daterangepicker.css') }}">
    <!-- summernote -->
    <link rel="stylesheet" href="{{ asset('plugins/summernote/summernote-bs4.min.css') }}">
</head>

<body class="hold-transition sidebar-mini layout-fixed">
    <div class="py-12" id="deletesuccess">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-green border-b border-gray-200">
                    You're logged in!
                </div>
            </div>
        </div>
    </div>
    <aside class="main-sidebar sidebar-dark-primary elevation-4">
        <!-- Brand Logo -->
        <a href="index3.html" class="brand-link">
          <img src="dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
          <a href="{{ route('index') }}"  class="brand-text font-weight-bold" style= "color:white">TOURISM</a>
        </a>

    <!-- Sidebar Menu -->
    <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
            <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
            <li class="nav-item menu-open">
                <a href="#" class="nav-link active">
                    <i class="nav-icon fas fa-tachometer-alt"></i>
                    <p>
                        Dashboard
                        <i class="right fas fa-angle-left"></i>
                    </p>
                </a>
                <ul class="nav nav-treeview">
                    <li class="nav-item">
                        <a href="" class="nav-link active">
                            <i class="far fa-circle nav-icon"></i>
                            <p>Flight</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="" class="nav-link">
                            <i class="far fa-circle nav-icon"></i>
                            <p>Car</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('hotels') }}" class="nav-link">
                            <i class="far fa-circle nav-icon"></i>
                            <p>Hotel</p>
                        </a>
                    </li>
                </ul>
            </li>
            <li class="nav-item">
                <a href="#" class="nav-link">
                    <i class="nav-icon fas fa-table"></i>
                    <p>
                        Create Reservation
                        <i class="fas fa-angle-left right"></i>
                    </p>
                </a>
                <ul class="nav nav-treeview">
                    <li class="nav-item">
                        <a href="" class="nav-link">
                            <i class="far fa-circle nav-icon"></i>
                            <p>Create Ticket</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="pages/tables/data.html" class="nav-link">
                            <i class="far fa-circle nav-icon"></i>
                            <p>Reserve Car</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('reserveroom') }}" class="nav-link">
                            <i class="far fa-circle nav-icon"></i>
                            <p>Reserve Room</p>
                        </a>
                    </li>
                </ul>
            </li>
            <!-- /.sidebar-menu -->
            </div>
            <!-- /.sidebar -->
            </aside>
            <!-- Control Sidebar -->
            <div class="wrapper">
                <!-- Preloader -->
                <div class="preloader flex-column justify-content-center align-items-center">
                    <img class="animation__shake" src="dist/img/AdminLTELogo.png" alt="AdminLTELogo" height="60" width="60">
                </div>

                <!-- Navbar -->
                <nav class="main-header navbar navbar-expand navbar-white navbar-light">
                    <!-- Left navbar links -->
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
                        </li>
                        <li class="nav-item d-none d-sm-inline-block">
                            <a href="{{ route('index') }}" class="nav-link">Home</a>
                        </li>
                    </ul>
                    <!-- Authentication -->
                    <form method="POST" action="{{ route('logout') }}">
                        @csrf

                        <x-responsive-nav-link :href="route('logout')" onclick="event.preventDefault();
                            this.closest('form').submit();">
                            {{ __('Log Out') }}
                        </x-responsive-nav-link>
                    </form>
                </nav>
                <div class="content-wrapper">
                <!-- reserve room form -->
                <form method="POST" action="{{ route('index') }}">
                    @csrf
                    <!-- general form elements -->
                    <div class="card card-primary">
                        <div class="card-header">
                            <h3 class="card-title">Reserve Hotel Room</h3>
                        </div>
                        <!-- /.card-header -->
                        <!-- form start -->
                        <form action="{{ route('index') }}" method="POST">
                            <div class="card-body">
                                <div class="form-group">
                                    <label for="name">Name</label>
                                    <input type="name" class="form-control" id="name" placeholder="Enter name">
                                </div>
                                <div class="form-group">
                                    <label for="phone">Phone Number</label>
                                    <input type="text" class="form-control" id="phone" placeholder="Enter Phone Number">
                                </div>
                                <div class="form-group">
                                    <label for="email">Email address</label>
                                    <input type="email" class="form-control" id="email" placeholder="Enter email">
                                </div>
                                <div class="form-group">
                                    <label for="adults">Number of Adults</label>
                                    <input type="number" class="form-control" id="adults" placeholder="Number of Adults">
                                </div>
                                <div class="form-group">
                                    <label for="number_of_children">Number of Children</label>
                                    <input type="number" class="form-control" id="number_of_children" placeholder="Enter Number of Children">
                                </div>
                                <div class="form-group">
                                    <label for="adults">Location</label>
                                    <input type="string" class="form-control" id="location" placeholder="Location">
                                </div>
                                <div class="form-group">
                                    <label for="duration">Duration</label>
                                    <input type="number" class="form-control" id="duration" placeholder="Number of Adults">
                                </div>
                                <div class="form-group">
                                    <label for="room_type">Room Type</label>
                                    <select name="room_type" class="form-control"id="room_type">
                                        <option value="one">one</option>
                                        <option value="two">two</option>
                                        <option value="three">three</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="from_time">Start Time</label>
                                    <input type="datetime-local" class="form-control" id="from_time" placeholder="Enter Start Time">
                                </div>
                                <div class="form-group">
                                    <label for="to_time">End Time</label>
                                    <input type="datetime-local" class="form-control" id="to_time" placeholder="Enter End Time">
                                </div>

                            <div class="form-group">
                                <label for="price">Price</label>
                                <input type="number" class="form-control" id="price" placeholder="Price">
                            </div>
                            <div class="form-group">
                                <label for="total">total</label>
                                <input type="number" class="form-control" id="total" placeholder="Total">
                            </div>
                        </div>
                            <button type="submit" class="btn btn-primary">Reserve Room</button>
                        </form>
                        <!-- /.sidebar -->
                        </aside>
                        <!-- Control Sidebar -->
                        <aside class="control-sidebar control-sidebar-dark">
                            <!-- Control sidebar content goes here -->
                        </aside>
                        <!-- /.control-sidebar -->
                    </div>
                    <!-- ./wrapper -->

                    <!-- jQuery -->
                    <script src="plugins/jquery/jquery.min.js"></script>
                    <!-- jQuery UI 1.11.4 -->
                    <script src="plugins/jquery-ui/jquery-ui.min.js"></script>
                    <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
                    <script>
                        $.widget.bridge('uibutton', $.ui.button)

                    </script>
                    <!-- Bootstrap 4 -->
                    <script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
                    <!-- ChartJS -->
                    <script src="plugins/chart.js/Chart.min.js"></script>
                    <!-- Sparkline -->
                    <script src="plugins/sparklines/sparkline.js"></script>
                    <!-- JQVMap -->
                    <script src="plugins/jqvmap/jquery.vmap.min.js"></script>
                    <script src="plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
                    <!-- jQuery Knob Chart -->
                    <script src="plugins/jquery-knob/jquery.knob.min.js"></script>
                    <!-- daterangepicker -->
                    <script src="plugins/moment/moment.min.js"></script>
                    <script src="plugins/daterangepicker/daterangepicker.js"></script>
                    <!-- Tempusdominus Bootstrap 4 -->
                    <script src="plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
                    <!-- Summernote -->
                    <script src="plugins/summernote/summernote-bs4.min.js"></script>
                    <!-- overlayScrollbars -->
                    <script src="plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
                    <!-- AdminLTE App -->
                    <script src="dist/js/adminlte.js"></script>
                    <!-- AdminLTE for demo purposes -->
                    <script src="dist/js/demo.js"></script>
                    <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
                    <script src="dist/js/pages/dashboard.js"></script>
</body>

</html>
