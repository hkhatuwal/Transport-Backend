<!DOCTYPE html>
<html lang="en">


<!-- index.html  21 Nov 2019 03:44:50 GMT -->

<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
    <title> Transport</title>
    <!-- General CSS Files -->
    <link rel="stylesheet" type="text/css" href="{{ URL::to('resources/css/app.min.css') }}">
    <!-- Template CSS -->
    <link rel="stylesheet" type="text/css" href="{{ URL::to('resources/css/style.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ URL::to('resources/css/components.css') }}">
    <!-- Custom style CSS -->
    <!-- <link rel="stylesheet" href="assets/css/custom.css"> -->
    <link rel='shortcut icon' type='image/x-icon' href="{{ URL::to('resources/img/truck.jpg') }}" />
    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.5/jquery.min.js"></script>

</head>

<body>
<div class="loader"></div>
  <div id="app">
    <div class="main-wrapper main-wrapper-1">
      <div class="navbar-bg"></div>
      <nav class="navbar navbar-expand-lg main-navbar sticky">
        <div class="form-inline mr-auto">
          
          <ul class="navbar-nav mr-3">
          <li><a href="#" data-toggle="sidebar" class="nav-link nav-link-lg
									collapse-btn"> <i data-feather="align-justify"></i></a></li>
            <li><a href="#" class="nav-link nav-link-lg fullscreen-btn">
                <i data-feather="maximize"></i>
              </a></li>
            
          </ul>
        </div>
        <ul class="navbar-nav navbar-right">
         
       
          <li class="dropdown"><a href="#" data-toggle="dropdown" class="nav-link dropdown-toggle nav-link-lg nav-link-user" aria-expanded="false"> <img alt="image" src="data:image/png;base64,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" class="user-img-radious-style"> <span class="d-sm-none d-lg-inline-block"></span></a>
            <div class="dropdown-menu dropdown-menu-right pullDown">
              <div class="dropdown-title">Hello Admin</div>
            
              <div class="dropdown-divider"></div>
              <a href="logout" class="dropdown-item has-icon text-danger"> <i class="fas fa-sign-out-alt"></i>
                Logout
              </a>
            </div>
          </li>
        </ul>
      </nav>
      <div class="main-sidebar sidebar-style-2">
        <aside id="sidebar-wrapper">
          <div class="sidebar-brand">
            <a href="{{URL::to('/')}}"> <img alt="image" src="https://us.123rf.com/450wm/putracetol/putracetol1805/putracetol180502430/101057512-delivery-logo-icon-design.jpg?ver=6" class="header-logo" /> <span
                class="logo-name">Transport</span>
            </a>
          </div>
          <ul class="sidebar-menu">
            <li class="menu-header">Main</li>
            <li class="dropdown">
              <a href="{{URL::to('/')}}" class="nav-link"><i class="fas fa-truck"></i><span>Drivers</span></a>
            </li>
            
              </ul>
            </li>
          </ul>

        </aside>
      </div>
      <!-- Main Content -->
      <div class="main-content">
        <section class="section">
          <div class="section-body">
           @yield("main-content")
          </div>
        </section>
        <div class="settingSidebar">
          <a href="javascript:void(0)" class="settingPanelToggle"> <i class="fa fa-spin fa-cog"></i>
          </a>
          <div class="settingSidebar-body ps-container ps-theme-default">
            <div class=" fade show active">
              <div class="setting-panel-header">Setting Panel
              </div>
              <div class="p-15 border-bottom">
                <h6 class="font-medium m-b-10">Select Layout</h6>
                <div class="selectgroup layout-color w-50">
                  <label class="selectgroup-item">
                    <input type="radio" name="value" value="1" class="selectgroup-input-radio select-layout" checked>
                    <span class="selectgroup-button">Light</span>
                  </label>
                  <label class="selectgroup-item">
                    <input type="radio" name="value" value="2" class="selectgroup-input-radio select-layout">
                    <span class="selectgroup-button">Dark</span>
                  </label>
                </div>
              </div>
              <div class="p-15 border-bottom">
                <h6 class="font-medium m-b-10">Sidebar Color</h6>
                <div class="selectgroup selectgroup-pills sidebar-color">
                  <label class="selectgroup-item">
                    <input type="radio" name="icon-input" value="1" class="selectgroup-input select-sidebar">
                    <span class="selectgroup-button selectgroup-button-icon" data-toggle="tooltip"
                      data-original-title="Light Sidebar"><i class="fas fa-sun"></i></span>
                  </label>
                  <label class="selectgroup-item">
                    <input type="radio" name="icon-input" value="2" class="selectgroup-input select-sidebar" checked>
                    <span class="selectgroup-button selectgroup-button-icon" data-toggle="tooltip"
                      data-original-title="Dark Sidebar"><i class="fas fa-moon"></i></span>
                  </label>
                </div>
              </div>
              <div class="p-15 border-bottom">
                <h6 class="font-medium m-b-10">Color Theme</h6>
                <div class="theme-setting-options">
                  <ul class="choose-theme list-unstyled mb-0">
                    <li title="white" class="active">
                      <div class="white"></div>
                    </li>
                    <li title="cyan">
                      <div class="cyan"></div>
                    </li>
                    <li title="black">
                      <div class="black"></div>
                    </li>
                    <li title="purple">
                      <div class="purple"></div>
                    </li>
                    <li title="orange">
                      <div class="orange"></div>
                    </li>
                    <li title="green">
                      <div class="green"></div>
                    </li>
                    <li title="red">
                      <div class="red"></div>
                    </li>
                  </ul>
                </div>
              </div>
              <div class="p-15 border-bottom">
                <div class="theme-setting-options">
                  <label class="m-b-0">
                    <input type="checkbox" name="custom-switch-checkbox" class="custom-switch-input"
                      id="mini_sidebar_setting">
                    <span class="custom-switch-indicator"></span>
                    <span class="control-label p-l-10">Mini Sidebar</span>
                  </label>
                </div>
              </div>
              <div class="p-15 border-bottom">
                <div class="theme-setting-options">
                  <label class="m-b-0">
                    <input type="checkbox" name="custom-switch-checkbox" class="custom-switch-input"
                      id="sticky_header_setting">
                    <span class="custom-switch-indicator"></span>
                    <span class="control-label p-l-10">Sticky Header</span>
                  </label>
                </div>
              </div>
              <div class="mt-4 mb-4 p-3 align-center rt-sidebar-last-ele">
                <a href="#" class="btn btn-icon icon-left btn-primary btn-restore-theme">
                  <i class="fas fa-undo"></i> Restore Default
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>
      <footer class="main-footer">
        <div class="footer-left">
        </div>
        <div class="footer-right">
        </div>
      </footer>
    </div>
  </div>

    <!-- General JS Scripts -->
    <script src="{{ URL::to('resources/js/app.min.js') }}"></script>
    <script src="{{ URL::to('resources/js/moment.js') }}"></script>
    <!-- JS Libraies -->
    <script src="{{ URL::to('resources/bundles/apexcharts/apexcharts.min.js') }}"></script>
    <!-- Page Specific JS File -->
    <script src="{{ URL::to('resources/js/page/index.js') }}"></script>
    <!-- Template JS File -->
    <script src="{{ URL::to('resources/js/scripts.js') }}"></script>
    <!-- Custom JS File -->
    <script src="{{ URL::to('resources/js/custom.js') }}"></script>
    <!-- Jquery -->
</body>


<!-- index.html  21 Nov 2019 03:47:04 GMT -->

</html>