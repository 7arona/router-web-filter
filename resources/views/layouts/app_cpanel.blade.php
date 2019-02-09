<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <meta http-equiv="X-Frame-Options sameorigin">
    <link rel="icon" type="image/png" sizes="16x16" href="{{ URL::to('favicon.ico')}}">
    <title>Route Web Filter</title>
    <link href="{{ URL::to('vendor/morrisjs/morris.css')}}" rel="stylesheet">
    <link href="{{ URL::to('vendor/toast-master/css/jquery.toast.css')}}" rel="stylesheet">
    <link href="{{ URL::to('vendor/style/style.min.css')}}" rel="stylesheet">
    <link href="{{ URL::to('vendor/style/dashboard.css')}}" rel="stylesheet">
    <link href="{{ URL::to('vendor/font-awesome/css/font-awesome.css')}}" rel="stylesheet">
    <link href="{{ URL::to('vendor/dataTables/css/dataTables.bootstrap4.css')}}" rel="stylesheet">
    <style>
   
.modal.modal-fullscreen {
  /* Maximize the main wrappers on the screen */
  /* Make the parent wrapper of the modal box a full-width block */
  /* Remove borders and effects on the content */
  /**
	 * /!\ By using this feature, you force the header and footer to be placed
	 * in an absolute position. You must handle by yourself the margin of the
	 * content.
	 */
}
.modal.modal-fullscreen .modal-dialog,
.modal.modal-fullscreen .modal-content {
  bottom: 0;
  left: 0;
  position: absolute;
  right: 0;
  top: 0;
}
.modal.modal-fullscreen .modal-dialog {
  max-width: 70%;
  animation-duration:0.6s;
}
.modal.modal-fullscreen .modal-content {
  border: none;
  -moz-border-radius: 0;
  border-radius: 0;
  -webkit-box-shadow: inherit;
  -moz-box-shadow: inherit;
  -o-box-shadow: inherit;
  box-shadow: inherit;
  /* change bg color below */
 /* background:#1abc9c; */
}
.modal.modal-fullscreen.force-fullscreen {
  /* Remove the padding inside the body */
}
.modal.modal-fullscreen.force-fullscreen .modal-body {
  padding: 0;
}
.modal.modal-fullscreen.force-fullscreen .modal-header,
.modal.modal-fullscreen.force-fullscreen .modal-footer {
  left: 0;
  position: absolute;
  right: 0;
}
.modal.modal-fullscreen.force-fullscreen .modal-header {
  top: 0;
}
.modal.modal-fullscreen.force-fullscreen .modal-footer {
  bottom: 0;
}
    </style>
</head>

<body class="skin-megna fixed-layout">
    <!-- <div class="preloader">
        <div class="loader">
            <div class="loader__figure"></div>
            <p class="loader__label">Route Web Filter</p>
        </div>
    </div> -->
    <div id="main-wrapper">
        <header class="topbar">
            <nav class="navbar top-navbar navbar-expand-md navbar-dark">
                <div class="navbar-header">
                    <a class="navbar-brand" href="{{ URL::to('/')}}'">
                        <b>                           
                            <img src="{{ URL::to('favicon.ico')}}" alt="homepage" class="dark-logo" />
                            <img src="{{ URL::to('favicon.ico')}}" alt="homepage" class="light-logo" />
                        </b>
                        <span class="hidden-xs">ROUTER WEB FILTER</span>
                    </a>
                </div>
                <div class="navbar-collapse">
                    <ul class="navbar-nav mr-auto">
                        <li class="nav-item"> <a class="nav-link nav-toggler d-block d-md-none waves-effect waves-dark" href="javascript:void(0)"><i class="fa fa-bars"></i></a> </li>
                        <li class="nav-item"> 
                        <a class="nav-link sidebartoggler d-none d-lg-block d-md-block waves-effect waves-dark" href="javascript:void(0)"><i class="fa fa-bars"></i></a></li>
                        <li class="nav-item">
                            <form class="app-search d-none d-md-block d-lg-block">
                                <input type="text" class="form-control" placeholder="Search & enter">
                            </form>
                        </li>
                    </ul>
                    <ul class="navbar-nav my-lg-0">
                        <!-- ============================================================== -->
                        <!-- User Profile -->
                        <!-- ============================================================== -->
                        <li class="nav-item dropdown u-pro">
                            <a class="nav-link dropdown-toggle waves-effect waves-dark profile-pic" href="" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><img src="{{ URL::to('favicon.ico')}}" alt="user" class=""> <span class="hidden-md-down">Mark &nbsp;<i class="fa fa-angle-down"></i></span> </a>
                            <div class="dropdown-menu dropdown-menu-right animated flipInY">
                                <a href="javascript:void(0)" class="dropdown-item"><i class="ti-settings"></i> Account Setting</a>
                                <!-- text-->
                                <div class="dropdown-divider"></div>
                                <!-- text-->                                
                                <a href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();" class="dropdown-item"><i class="fa fa-power-off"></i> Logout</a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                <!-- text-->
                            </div>
                        </li>
                        <!-- ============================================================== -->
                        <!-- End User Profile -->
                        <!-- ============================================================== -->
                        <li class="nav-item right-side-toggle"> <a class="nav-link  waves-effect waves-light" href="javascript:void(0)"><i class="ti-settings"></i></a></li>
                    </ul>
                </div>
            </nav>
        </header>
        <!-- ============================================================== -->
        <!-- End Topbar header -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->
        <aside class="left-sidebar">
            <!-- Sidebar scroll-->
            <div class="scroll-sidebar">
                <!-- Sidebar navigation-->
                <nav class="sidebar-nav">
                    <ul id="sidebarnav"> 
                        <li> <a class="waves-effect waves-dark" href="{{ URL::to('/')}}"><i class="fa fa-dashboard"></i><span class="hide-menu">Dashboard</span></a>  
                        <li> <a class="waves-effect waves-dark" href="{{ URL::to('ipaddress')}}"><i class="fa fa-id-card-o"></i><span class="hide-menu">IPAddress</span></a>                                                       
                    </ul>
                </nav>
                <!-- End Sidebar navigation -->
            </div>
            <!-- End Sidebar scroll-->
        </aside>
        <div class="page-wrapper">
            <div class="container-fluid">
                <div class="row page-titles">                   
                    <div class="col-md-5 align-self-center">
                        <h4 class="text-themecolor">Dashboard</h4>
                    </div>
                    <div class="col-md-7 align-self-center text-right">
                        <div class="d-flex justify-content-end align-items-center">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                                <li class="breadcrumb-item active">Dashboard</li>
                            </ol>
                        </div>
                    </div>
                </div>

                <!-- ============================================================== -->
                <!-- Content -->
                <!-- ============================================================== -->
                    @yield('content')
                <!-- ============================================================== -->
                <!-- Content -->
                <!-- ============================================================== -->
                
            </div>
        </div>
        <!-- ============================================================== -->
        <!-- footer -->
        <!-- ============================================================== -->
        <footer class="footer footer-copyright">
            © 2019 Route Web Filter
        </footer>
        <!-- ============================================================== -->
        <!-- End footer -->
        <!-- ============================================================== -->
    </div>
    <script src="{{ URL::to('vendor/jquery/jquery-3.2.1.min.js')}}"></script>
    <!-- Bootstrap popper Core JavaScript -->
    <script src="{{ URL::to('vendor/popper/popper.min.js')}}"></script>
    <script src="{{ URL::to('vendor/bootstrap/dist/js/bootstrap.min.js')}}"></script>
    <!-- slimscrollbar scrollbar JavaScript -->
    <script src="{{ URL::to('vendor/js/perfect-scrollbar.jquery.min.js')}}"></script>
    <!--Wave Effects -->
    <script src="{{ URL::to('vendor/js/waves.js')}}"></script>
    <!--Menu sidebar -->
    <script src="{{ URL::to('vendor/js/sidebarmenu.js')}}"></script>
    <!--Custom JavaScript -->
    <script src="{{ URL::to('vendor/js/sidebarmenu.js')}}"></script>
    <script src="{{ URL::to('vendor/dataTables/js/datatables.min.js')}}"></script>
    <script src="{{ URL::to('vendor/dataTables/js/dataTables.buttons.min.js')}}"></script>
    <!--morris JavaScript -->
    <script src="{{ URL::to('vendor/raphael/raphael-min.js')}}"></script>
    <script src="{{ URL::to('vendor/jquery-sparkline/jquery.sparkline.min.js')}}"></script>
    <!-- Popup message jquery -->
    <script src="{{ URL::to('vendor/toast-master/js/jquery.toast.js')}}"></script>
    <!-- jQuery peity -->
    <script src="{{ URL::to('vendor/peity/jquery.peity.min.js')}}"></script>
    <script src="{{ URL::to('vendor/peity/jquery.peity.init.js')}}"></script>   
    
    <!-- start - This is for export functionality only -->
    <script src="{{ URL::to('vendor/dataTables/js/dataTables.buttons.min.js')}}"></script>
    <script src="{{ URL::to('vendor/buttons/1.5.1/js/buttons.flash.min.js')}}"></script>
    <script src="{{ URL::to('vendor/ajax/libs/jszip/3.1.3/jszip.min.js')}}"></script>
    <script src="{{ URL::to('vendor/ajax/libs/pdfmake/0.1.32/pdfmake.min.js')}}"></script>
    <script src="{{ URL::to('vendor/ajax/libs/pdfmake/0.1.32/vfs_fonts.js')}}"></script>
    <script src="{{ URL::to('vendor/buttons/1.5.1/js/buttons.html5.min.js')}}"></script>
    <script src="{{ URL::to('vendor/buttons/1.5.1/js/buttons.print.min.js')}}"></script>
    <!-- end - This is for export functionality only -->
    <script>
    $(document).ready(function () {
        setTimeout(function() {
            $('#successMessage').fadeOut('fast');
        }, 3000);
        
        $('#myTable').DataTable();
        $(function() {
            var table = $('#example').DataTable({
                "columnDefs": [{
                    "visible": false,
                    "targets": 2
                }],
                "order": [
                    [2, 'asc']
                ],
                "displayLength": 25,
                "drawCallback": function(settings) {
                    var api = this.api();
                    var rows = api.rows({
                        page: 'current'
                    }).nodes();
                    var last = null;
                    api.column(2, {
                        page: 'current'
                    }).data().each(function(group, i) {
                        if (last !== group) {
                            $(rows).eq(i).before('<tr class="group"><td colspan="5">' + group + '</td></tr>');
                            last = group;
                        }
                    });
                }
            });
            // Order by the grouping
            $('#example tbody').on('click', 'tr.group', function() {
                var currentOrder = table.order()[0];
                if (currentOrder[0] === 2 && currentOrder[1] === 'asc') {
                    table.order([2, 'desc']).draw();
                } else {
                    table.order([2, 'asc']).draw();
                }
            });
        });        
    });
    $('#example23').DataTable({
        dom: 'Bfrtip',
        buttons: [
            'copy', 'csv', 'excel', 'pdf', 'print'
        ]
    });
    $('.buttons-copy, .buttons-csv, .buttons-print, .buttons-pdf, .buttons-excel').addClass('btn btn-primary mr-1');
    
    $('head').append('<link rel="stylesheet" type="text/css" href="vendor/ajax/libs/animate.css/3.5.2/animate.min.css">');
    $(".btn").click(function() {
        var $row = $(this).closest("tr");    // Find the row
        var $text = $row.find("#url").text(); // Find the text
        $('#iframe').attr('src', $text);
    });
</script>
</body>
</html>