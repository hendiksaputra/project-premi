<!doctype html>

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>@yield('title') - Premi</title>
  <meta name="description" content="Sufee Admin - HTML5 Admin Template">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="apple-touch-icon" href="apple-icon.png">
  <link rel="shortcut icon" href="favicon.ico">
  <link rel="stylesheet" href="{{ asset('style/assets/css/normalize.css') }}">
  <link rel="stylesheet" href="{{ asset('style/assets/css/bootstrap.min.css') }}">
  <link rel="stylesheet" href="{{ asset('style/assets/css/font-awesome.min.css') }}">
  <link rel="stylesheet" href="{{ asset('style/assets/css/themify-icons.css') }}">
  <link rel="stylesheet" href="{{ asset('style/assets/css/flag-icon.min.css') }}">
  <link rel="stylesheet" href="{{ asset('style/assets/css/cs-skin-elastic.css') }}">
  <link rel="stylesheet" href="{{ asset('style/assets/scss/style.css') }}">
  <link rel="stylesheet" href="{{ asset('style/assets/css/lib/datatable/dataTables.bootstrap.min.css') }}">
  <link rel="stylesheet" href="{{ asset('style/assets/css/lib/chosen/chosen.min.css') }}">
  <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800' rel='stylesheet' type='text/css'>
</head>

<body>

  <aside id="left-panel" class="left-panel">
    <nav class="navbar navbar-expand-sm navbar-default">

      <div class="navbar-header">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#main-menu"
          aria-controls="main-menu" aria-expanded="false" aria-label="Toggle navigation">
          <i class="fa fa-bars"></i>
        </button>
        <a class="navbar-brand" href="">Premi Operator</a>
        <a class="navbar-brand hidden" href="">P</a>
      </div>

      <div id="main-menu" class="main-menu collapse navbar-collapse">
        <ul class="nav navbar-nav">
          <li>
            <a href="{{ url('home') }}"> <i class="menu-icon fa fa-dashboard"></i>Dashboard </a>
          </li>
          <li>
            <a href="{{ url('warning') }}"> <i class="menu-icon fa fa-warning"></i>Warning (SP)</a>
          </li>

          <h3 class="menu-title">Master Data</h3><!-- /.menu-title -->
          <li>
            <a href="{{ url('projects') }}"> <i class="menu-icon fa fa-building"></i>Project</a>
          </li>

          <li class="menu-item-has-children dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i
                class="menu-icon fa fa-tasks"></i>Attendance</a>
            <ul class="sub-menu children dropdown-menu">
              <li><i class="menu-icon fa fa-tags"></i><a href="{{ url('att_categories') }}">Attendance
                  Category</a>
              </li>
              <li><i class="menu-icon fa fa-tags"></i><a href="{{ url('warning_categories') }}">Warning Category</a>
              </li>
            </ul>
          </li>
        </ul>
      </div>
    </nav>
  </aside>
  <div id="right-panel" class="right-panel">
    <header id="header" class="header">
      <div class="header-menu">
        <div class="col-sm-7">
          <a id="menuToggle" class="menutoggle pull-left"><i class="fa fa fa-tasks"></i></a>
          <div class="header-left">
            <button class="search-trigger"><i class="fa fa-search"></i></button>
            <div class="form-inline">
              <form class="search-form">
                <input class="form-control mr-sm-2" type="text" placeholder="Search ..." aria-label="Search">
                <button class="search-close" type="submit"><i class="fa fa-close"></i></button>
              </form>
            </div>

            <div class="dropdown for-notification">
              <button class="btn btn-secondary dropdown-toggle" type="button" id="notification" data-toggle="dropdown"
                aria-haspopup="true" aria-expanded="false">
                <i class="fa fa-bell"></i>
                <span class="count bg-danger">5</span>
              </button>
              <div class="dropdown-menu" aria-labelledby="notification">
                <p class="red">You have 3 Notification</p>
                <a class="dropdown-item media bg-flat-color-1" href="#">
                  <i class="fa fa-check"></i>
                  <p>Server #1 overloaded.</p>
                </a>
                <a class="dropdown-item media bg-flat-color-4" href="#">
                  <i class="fa fa-info"></i>
                  <p>Server #2 overloaded.</p>
                </a>
                <a class="dropdown-item media bg-flat-color-5" href="#">
                  <i class="fa fa-warning"></i>
                  <p>Server #3 overloaded.</p>
                </a>
              </div>
            </div>
          </div>
        </div>

        <div class="col-sm-5">
          <div class="user-area dropdown float-right">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              <img class="user-avatar rounded-circle" src="{{ asset('style/images/admin.jpg ') }}" alt="User Avatar">
            </a>
            <div class="user-menu dropdown-menu">
              <a class="nav-link" href="#"><i class="fa fa -cog"></i>Settings</a>
              <a class="nav-link" href="#"><i class="fa fa-power -off"></i>Logout</a>
            </div>
          </div>
          <div class="language-select dropdown" id="language-select">
            <a class="dropdown-toggle" href="#" data-toggle="dropdown" id="language" aria-haspopup="true"
              aria-expanded="true">
              <i class="flag-icon flag-icon-us"></i>
            </a>
            <div class="dropdown-menu" aria-labelledby="language">
              <div class="dropdown-item">
                <span class="flag-icon flag-icon-fr"></span>
              </div>
              <div class="dropdown-item">
                <i class="flag-icon flag-icon-es"></i>
              </div>
              <div class="dropdown-item">
                <i class="flag-icon flag-icon-us"></i>
              </div>
              <div class="dropdown-item">
                <i class="flag-icon flag-icon-it"></i>
              </div>
            </div>
          </div>

        </div>
      </div>

    </header>

    @yield('breadcrumbs')

    @yield('content')
  </div>
  <script src="{{ asset('style/assets/js/vendor/jquery-2.1.4.min.js') }}"></script>
  <script src="{{ asset('style/assets/js/popper.min.js') }}"></script>
  <script src="{{ asset('style/assets/js/plugins.js') }}"></script>
  <script src="{{ asset('style/assets/js/main.js') }}"></script>
  <script src="{{ asset('style/assets/js/lib/data-table/datatables.min.js') }}"></script>
  <script src="{{ asset('style/assets/js/lib/data-table/dataTables.bootstrap.min.js') }}"></script>
  <script src="{{ asset('style/assets/js/lib/data-table/dataTables.buttons.min.js') }}"></script>
  <script src="{{ asset('style/assets/js/lib/data-table/buttons.bootstrap.min.js') }}"></script>
  <script src="{{ asset('style/assets/js/lib/data-table/jszip.min.js') }}"></script>
  <script src="{{ asset('style/assets/js/lib/data-table/pdfmake.min.js') }}"></script>
  <script src="{{ asset('style/assets/js/lib/data-table/vfs_fonts.js') }}"></script>
  <script src="{{ asset('style/assets/js/lib/data-table/buttons.html5.min.js') }}"></script>
  <script src="{{ asset('style/assets/js/lib/data-table/buttons.print.min.js') }}"></script>
  <script src="{{ asset('style/assets/js/lib/data-table/buttons.colVis.min.js') }}"></script>
  <script src="{{ asset('style/assets/js/lib/data-table/datatables-init.js') }}"></script>
  <script src="{{ asset('style/assets/js/lib/chosen/chosen.jquery.min.js') }}"></script>

  <script type="text/javascript">
    $(document).ready(function() {
      $('#bootstrap-data-table-export').DataTable();
    });
  </script>
  <script>
    jQuery(document).ready(function() {
      jQuery(".standardSelect").chosen({
        // disable_search_threshold: 10,
        no_results_text: "Oops, nothing found!",
        width: "100%"
      });
    });
  </script>

</body>

</html>
