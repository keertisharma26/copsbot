<!doctype html>
<html lang="en">

<head>
    <title>Command Center</title>
    <link rel="shortcut icon" type="image/png" href="new_up.jpeg">
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" name="viewport" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <!--     Fonts and icons     -->
    <link rel="stylesheet" type="text/css"
        href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css">
    <!-- Material Kit CSS -->
    <link href="./assets/css/material-dashboard.css" rel="stylesheet" />
    <link href="./assets/demo/demo.css" rel="stylesheet" />
    <!--      <link href="{{ url_for('static', filename='material-dashboard.css')}}" rel="stylesheet" />-->

    <!--  <link href="./assets/css/material-dashboard.css?v=2.1.0" rel="stylesheet" />-->
    <!--    <link href="./assets2/css/fresh-bootstrap-table.css" rel="stylesheet" />-->
    <!--  <link href="./assets2/css/demo.css" rel="stylesheet" />-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/izitoast/1.4.0/css/iziToast.min.css">

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css"
        integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
    <link href="http://fonts.googleapis.com/css?family=Roboto:400,700,300" rel="stylesheet" type="text/css">

    <script src="https://code.jquery.com/jquery-3.3.1.min.js"
        integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
    <script src="https://unpkg.com/bootstrap-table/dist/bootstrap-table.min.js"></script>
</head>

<body class="dark-edition">
    <div class="wrapper ">
        <div class="sidebar" data-color="purple" data-background-color="black" data-image="./assets/img/sidebar-2.jpg">
            <!--
      Tip 1: You can change the color of the sidebar using: data-color="purple | azure | green | orange | danger"

      Tip 2: you can also add an image using data-image tag
  -->
            <div class="logo">
                <a href="#" class="simple-text logo-normal">
                    CopsBot
                </a>
            </div>
            <div class="sidebar-wrapper">
                <ul class="nav">
                    <li class="nav-item ">
                        <a class="nav-link" href="./chart.html">
                            <i class="material-icons">dashboard</i>
                            <p>Insight</p>
                        </a>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link " href="superadmin.html">
                            <i class="material-icons">dashboard</i>
                            <p>Command Center</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="admins.html">
                            <i class="material-icons">person</i>
                            <p>Admins</p>
                        </a>
                    </li>
                    
                    
                    <li class="nav-item">
                        <a class="nav-link" href="completed_complaints.html">
                            <i class="material-icons"><i class="fas fa-check-circle"></i></i>
                            <p>Completed Complaints</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="trash.html">
                            <i class="material-icons"><i class="fas fa-trash"></i></i></i>
                            <p>Deleted Fake Complaints</p>
                        </a>
                    </li>
                    
                    <!-- your sidebar here -->
                </ul>
            </div>
        </div>
        <div class="main-panel">
            <!-- Navbar -->
            <nav class="navbar navbar-expand-lg navbar-transparent navbar-absolute fixed-top ">
                <div class="container-fluid">
                    <div class="navbar-wrapper">
                        <a class="navbar-brand" href="javascript:void(0)">ALL COMPLAINTS</a>
                    </div>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" aria-controls="navigation-index"
                        aria-expanded="false" aria-label="Toggle navigation">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="navbar-toggler-icon icon-bar"></span>
                        <span class="navbar-toggler-icon icon-bar"></span>
                        <span class="navbar-toggler-icon icon-bar"></span>
                    </button>
                    <div class="collapse navbar-collapse justify-content-end">
                        <div class="collapse navbar-collapse justify-content-end">
                            <div>
                                <div class="collapse navbar-collapse justify-content-end">

                                    <div class="input-group no-border">
                                        <input type="text" value="" id="search-input" onkeyup="search()"
                                            class="form-control" placeholder="Search...">

                                    </div>

                                    <ul class="navbar-nav">
                                        <li class="nav-item">
                                            <a class="nav-link" href="#!" onclick="logout()">
                                                <i class="material-icons">power_settings_new</i>
                                                <p class="d-lg-none d-md-block">
                                                    Logout
                                                </p>
                                            </a>
                                        </li>
                                        <!-- your navbar here -->
                                    </ul>
                                </div>
                            </div>
                        </div>
            </nav>
            <!-- End Navbar -->
            <div class="content">
                <div class="container-fluid">
                    <div class="card mb-4">
                        <div class="card-body">
                            <!--Table-->
                            <table class="table table-hover">
                                <!--Table head-->

                                <!--Table-->
                                <table class="table table-hover">
                                    <!--Table head-->
                                    <thead class="mdb-color darken-3">
                                        <tr class="text-white">
                                            <th>Sr. No.</th>
                                            <th>Full Name</th>
                                            <th>Complaints</th>
                                            <th>Status</th>
                                            <th>Location</th>
                                            <th>Data</th>
                                            <th>Share</th>
                                            <th>Region</th>

                                        </tr>
                                    </thead>
                                    <!--Table head-->
                                    <!--Table body-->

                                    <tbody class="complaints">


                                    </tbody>
                                    <!--Table body-->
                                </table>
                                <!--Table-->
                        </div>
                    </div>


                </div>
                <div class="modal" id="myModal">
                    <div class="modal-dialog">
                        <div class="modal-content" style="background-color:#212529; color:#eee;">

                            <!-- Modal Header -->
                            <div class="modal-header">
                                <h4 class="modal-title">Info</h4>
                                <button type="button" class="close" data-dismiss="modal"
                                    style="color:#FFFFFF;">&times;</button>
                            </div>

                            <!-- Modal body -->
                            <div class="modal-body" style="margin: 15px;background-color:#3C4858">
                                <div class="tital">Full Name :&emsp;&emsp;&emsp;<span id="fullName"
                                        style="color:#FFFFFF;width:100%;"> </span></div>
                                <div class="tital">Complaint :&emsp;&emsp;&emsp;<span id="complaints"
                                        style="color:#FFFFFF;">
                                    </span></div>
                                <div class="tital">Crime Category :&emsp;&emsp;&emsp;<span id="crime" style="color:#FFFFFF;">
                                    </span></div>
                                <div class="tital">Age :&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;<span id="age"
                                        style="color:#FFFFFF;"> </span></div>
                                <div class="tital">Gender :&emsp;&emsp;&emsp;&emsp;&emsp;<span id="gender"
                                        style="color:#FFFFFF;"> </span></div>
                                <div class="tital">Phone Number :&emsp;<span id="phno" style="color:#FFFFFF"></span>
                                </div>
                                <div class="tital">IMEI :&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;<i id="imei"
                                        style="color:#FFFFFF;"> </i></div>
                                <div class="tital">Date of Incident :&emsp;<span id="date" style="color:#FFFFFF;">
                                    </span></div>
                                <div class="tital">Time of Incident :&emsp;<span id="time" style="color:#FFFFFF;">
                                    </span></div>
                                <div class="tital">Place of Incident :&emsp;<span id="place" style="color:#FFFFFF;">
                                    </span></div>
                                <div class="tital">Status :&emsp;&emsp;&emsp;&emsp;&emsp;<span id="status"
                                        style="color:#FFFFFF;"> </span></div>
                            </div>

                            <!-- Modal footer -->
                            <div class="modal-footer">

                                <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                            </div>

                        </div>
                    </div>
                </div>

                <div class="modal" id="my_Modal">
                    <div class="modal-dialog">
                        <div class="modal-content" style="background-color:#212529; color:#FFFFFF; ">

                            <!-- Modal Header -->
                            <div class="modal-header">
                                <h4 class="modal-title">Send to Whatsapp</h4>
                                <button type="button" class="close" data-dismiss="modal"
                                    style="color:#FFFFFF;">&times;</button>
                            </div>

                            <!-- Modal body -->
                            <div class="modal-body" style="background-color:#3C4858;">
                                <!--                                <form>-->
                                <!--                                    <div class="form-group">-->
                                <!--                                        <label for="phn"><b>Phone Number</b></label>-->
                                <!--                                        <input type="text" class="form-control" id="phn"-->
                                <!--                                            placeholder="Enter Mobile number" style="color:black">-->
                                <input type="text" hidden="true" id="u_id">
                                <!--                                    </div>-->
                                <!--                                </form>-->
                            </div>

                            <!-- Modal footer -->
                            <div class="modal-footer">
                                <a id="" onclick="notify()" class="btn btn-default">Submit</a>
                                <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                            </div>

                        </div>
                    </div>
                </div>
                <footer class="footer">
                    <div class="container-fluid">
                        <nav class="float-left">
                            <ul>
                                <li>
                                    <a href="#">
                                        CopsBot
                                    </a>
                                </li>
                            </ul>
                        </nav>
                        <div class="copyright float-right">
                            &copy;
                            <script>
                                document.write(new Date().getFullYear())
                            </script>, made with <i class="material-icons">favorite</i> by
                            <a href="#" target="_blank">CopsBot</a> for a better web.
                        </div>
                        <!-- your footer here -->
                    </div>
                </footer>
            </div>
        </div>
        <!--   Core JS Files   -->

        <script src="./static/core/jquery.min.js"></script>
        <script src="./static/core/popper.min.js"></script>
        <script src="./static/core/bootstrap-material-design.min.js"></script>
        <script src="https://unpkg.com/default-passive-events"></script>
        <script src="./assets/js/plugins/perfect-scrollbar.jquery.min.js"></script>
        <!-- Place this tag in your head or just before your close body tag. -->
        <script async defer src="https://buttons.github.io/buttons.js"></script>
        <!-- Chartist JS -->
        <script src="./static/plugins/chartist.min.js"></script>
        <!--  Notifications Plugin    -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/izitoast/1.4.0/js/iziToast.min.js"></script>
        <script src="./static/plugins/bootstrap-notify.js"></script>
        <!-- Control Center for Material Dashboard: parallax effects, scripts for the example pages etc -->
        <script src="./static/material-dashboard.js?v=2.1.0"></script>
        <!-- Material Dashboard DEMO methods, don't include it in your project! -->
        <script src="./javascript/script.js"></script>
        <script src="./javascript/superadmin.js"></script>
        
        

        </script>
</body>

</html>