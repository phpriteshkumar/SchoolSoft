<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8" />
  <title>School Soft</title>
  <meta name="description" content="Angularjs, Html5, Music, Landing, 4 in 1 ui kits package" />
  <meta name="keywords" content="AngularJS, angular, bootstrap, admin, dashboard, panel, app, charts, components,flat, responsive, layout, kit, ui, route, web, app, widgets" />
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />

  <link rel="stylesheet" href="bower_components/bootstrap/dist/css/bootstrap.css" type="text/css" />
  <link rel="stylesheet" href="bower_components/animate.css/animate.css" type="text/css" />
  <link rel="stylesheet" href="bower_components/font-awesome/css/font-awesome.min.css" type="text/css" />
  <link rel="stylesheet" href="bower_components/simple-line-icons/css/simple-line-icons.css" type="text/css" />
  <link rel="stylesheet" href="css/font.css" type="text/css" />
  <link rel="stylesheet" href="css/app.css" type="text/css" />

</head>
<body>
<div class="app app-header-fixed  ">
  
  <!-- header -->
  <header id="header" class="app-header navbar" role="menu">
          <!-- navbar header -->
      <div class="navbar-header bg-dark">
        <button class="pull-right visible-xs dk" ui-toggle="show" target=".navbar-collapse">
          <i class="glyphicon glyphicon-cog"></i>
        </button>
        <button class="pull-right visible-xs" ui-toggle="off-screen" target=".app-aside" ui-scroll="app">
          <i class="glyphicon glyphicon-align-justify"></i>
        </button>
        <!-- brand -->
        <a href="#/" class="navbar-brand text-lt">
          <i class="fa fa-btc"></i>
          <img src="img/logo.png" alt="." class="hide">
          <span class="hidden-folded m-l-xs">Angulr</span>
        </a>
        <!-- / brand -->
      </div>
      <!-- / navbar header -->

      <!-- navbar collapse -->
      <div class="collapse pos-rlt navbar-collapse box-shadow bg-white-only">
        <!-- buttons -->
        <div class="nav navbar-nav hidden-xs">
          <a href="#" class="btn no-shadow navbar-btn" ui-toggle="app-aside-folded" target=".app">
            <i class="fa fa-dedent fa-fw text"></i>
            <i class="fa fa-indent fa-fw text-active"></i>
          </a>
          <a href="#" class="btn no-shadow navbar-btn" ui-toggle="show" target="#aside-user">
            <i class="icon-user fa-fw"></i>
          </a>
        </div>
        <!-- / buttons -->

        <!-- link and dropdown -->
        <ul class="nav navbar-nav hidden-sm">
          <li class="dropdown pos-stc">
            <a href="#" data-toggle="dropdown" class="dropdown-toggle">
              <span>Mega</span> 
              <span class="caret"></span>
            </a>
            <div class="dropdown-menu wrapper w-full bg-white">
              <div class="row">
                <div class="col-sm-4">
                  <div class="m-l-xs m-t-xs m-b-xs font-bold">Pages <span class="badge badge-sm bg-success">10</span></div>
                  <div class="row">
                    <div class="col-xs-6">
                      <ul class="list-unstyled l-h-2x">
                        <li>
                          <a href><i class="fa fa-fw fa-angle-right text-muted m-r-xs"></i>Profile</a>
                        </li>
                        <li>
                          <a href><i class="fa fa-fw fa-angle-right text-muted m-r-xs"></i>Post</a>
                        </li>
                        <li>
                          <a href><i class="fa fa-fw fa-angle-right text-muted m-r-xs"></i>Search</a>
                        </li>
                        <li>
                          <a href><i class="fa fa-fw fa-angle-right text-muted m-r-xs"></i>Invoice</a>
                        </li>
                      </ul>
                    </div>
                    <div class="col-xs-6">
                      <ul class="list-unstyled l-h-2x">
                        <li>
                          <a href><i class="fa fa-fw fa-angle-right text-muted m-r-xs"></i>Price</a>
                        </li>
                        <li>
                          <a href><i class="fa fa-fw fa-angle-right text-muted m-r-xs"></i>Lock screen</a>
                        </li>
                        <li>
                          <a href><i class="fa fa-fw fa-angle-right text-muted m-r-xs"></i>Sign in</a>
                        </li>
                        <li>
                          <a href><i class="fa fa-fw fa-angle-right text-muted m-r-xs"></i>Sign up</a>
                        </li>
                      </ul>
                    </div>
                  </div>
                </div>
                <div class="col-sm-4 b-l b-light">
                  <div class="m-l-xs m-t-xs m-b-xs font-bold">UI Kits <span class="label label-sm bg-primary">12</span></div>
                  <div class="row">
                    <div class="col-xs-6">
                      <ul class="list-unstyled l-h-2x">
                        <li>
                          <a href><i class="fa fa-fw fa-angle-right text-muted m-r-xs"></i>Buttons</a>
                        </li>
                        <li>
                          <a href><i class="fa fa-fw fa-angle-right text-muted m-r-xs"></i>Icons <span class="badge badge-sm bg-warning">1000+</span></a>
                        </li>
                        <li>
                          <a href><i class="fa fa-fw fa-angle-right text-muted m-r-xs"></i>Grid</a>
                        </li>
                        <li>
                          <a href><i class="fa fa-fw fa-angle-right text-muted m-r-xs"></i>Widgets</a>
                        </li>
                      </ul>
                    </div>
                    <div class="col-xs-6">
                      <ul class="list-unstyled l-h-2x">
                        <li>
                          <a href><i class="fa fa-fw fa-angle-right text-muted m-r-xs"></i>Bootstap</a>
                        </li>
                        <li>
                          <a href><i class="fa fa-fw fa-angle-right text-muted m-r-xs"></i>Sortable</a>
                        </li>
                        <li>
                          <a href><i class="fa fa-fw fa-angle-right text-muted m-r-xs"></i>Portlet</a>
                        </li>
                        <li>
                          <a href><i class="fa fa-fw fa-angle-right text-muted m-r-xs"></i>Timeline</a>
                        </li>
                      </ul>
                    </div>
                  </div>
                </div>
                <div class="col-sm-4 b-l b-light">
                  <div class="m-l-xs m-t-xs m-b-sm font-bold">Analysis</div>
                  <div class="text-center">
                    <div class="inline">
                      <div ui-jq="easyPieChart" ui-options="{
                          percent: 65,
                          lineWidth: 50,
                          trackColor: '#e8eff0',
                          barColor: '#23b7e5',
                          scaleColor: false,
                          size: 100,
                          rotate: 90,
                          lineCap: 'butt',
                          animate: 2000
                        }">
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </li>
          <li class="dropdown">
            <a href="#" data-toggle="dropdown" class="dropdown-toggle">
              <i class="fa fa-fw fa-plus visible-xs-inline-block"></i>
              <span translate="header.navbar.new.NEW">New</span> <span class="caret"></span>
            </a>
            <ul class="dropdown-menu" role="menu">
              <li><a href="#" translate="header.navbar.new.PROJECT">Projects</a></li>
              <li>
                <a href>
                  <span class="badge bg-info pull-right">5</span>
                  <span translate="header.navbar.new.TASK">Task</span>
                </a>
              </li>
              <li><a href translate="header.navbar.new.USER">User</a></li>
              <li class="divider"></li>
              <li>
                <a href>
                  <span class="badge bg-danger pull-right">4</span>
                  <span translate="header.navbar.new.EMAIL">Email</span>
                </a>
              </li>
            </ul>
          </li>
        </ul>
        <!-- / link and dropdown -->

        <!-- search form -->
        <form class="navbar-form navbar-form-sm navbar-left shift" ui-shift="prependTo" data-target=".navbar-collapse" role="search" ng-controller="TypeaheadDemoCtrl">
          <div class="form-group">
            <div class="input-group">
              <input type="text" ng-model="selected" typeahead="state for state in states | filter:$viewValue | limitTo:8" class="form-control input-sm bg-light no-border rounded padder" placeholder="Search projects...">
              <span class="input-group-btn">
                <button type="submit" class="btn btn-sm bg-light rounded"><i class="fa fa-search"></i></button>
              </span>
            </div>
          </div>
        </form>
        <!-- / search form -->

        <!-- nabar right -->
        <ul class="nav navbar-nav navbar-right">
          <li class="dropdown">
            <a href="#" data-toggle="dropdown" class="dropdown-toggle">
              <i class="icon-bell fa-fw"></i>
              <span class="visible-xs-inline">Notifications</span>
              <span class="badge badge-sm up bg-danger pull-right-xs">2</span>
            </a>
            <!-- dropdown -->
            <div class="dropdown-menu w-xl animated fadeInUp">
              <div class="panel bg-white">
                <div class="panel-heading b-light bg-light">
                  <strong>You have <span>2</span> notifications</strong>
                </div>
                <div class="list-group">
                  <a href class="media list-group-item">
                    <span class="pull-left thumb-sm">
                      <img src="img/a0.jpg" alt="..." class="img-circle">
                    </span>
                    <span class="media-body block m-b-none">
                      Use awesome animate.css<br>
                      <small class="text-muted">10 minutes ago</small>
                    </span>
                  </a>
                  <a href class="media list-group-item">
                    <span class="media-body block m-b-none">
                      1.0 initial released<br>
                      <small class="text-muted">1 hour ago</small>
                    </span>
                  </a>
                </div>
                <div class="panel-footer text-sm">
                  <a href class="pull-right"><i class="fa fa-cog"></i></a>
                  <a href="#notes" data-toggle="class:show animated fadeInRight">See all the notifications</a>
                </div>
              </div>
            </div>
            <!-- / dropdown -->
          </li>
          <li class="dropdown">
            <a href="#" data-toggle="dropdown" class="dropdown-toggle clear" data-toggle="dropdown">
              <span class="thumb-sm avatar pull-right m-t-n-sm m-b-n-sm m-l-sm">
                <img src="img/a0.jpg" alt="...">
                <i class="on md b-white bottom"></i>
              </span>
              <span class="hidden-sm hidden-md">John.Smith</span> <b class="caret"></b>
            </a>
            <!-- dropdown -->
            <ul class="dropdown-menu animated fadeInRight w">
              <li class="wrapper b-b m-b-sm bg-light m-t-n-xs">
                <div>
                  <p>300mb of 500mb used</p>
                </div>
                <div class="progress progress-xs m-b-none dker">
                  <div class="progress-bar progress-bar-info" data-toggle="tooltip" data-original-title="50%" style="width: 50%"></div>
                </div>
              </li>
              <li>
                <a href>
                  <span class="badge bg-danger pull-right">30%</span>
                  <span>Settings</span>
                </a>
              </li>
              <li>
                <a ui-sref="app.page.profile">Profile</a>
              </li>
              <li>
                <a ui-sref="app.docs">
                  <span class="label bg-info pull-right">new</span>
                  Help
                </a>
              </li>
              <li class="divider"></li>
              <li>
                <a ui-sref="access.signin">Logout</a>
              </li>
            </ul>
            <!-- / dropdown -->
          </li>
        </ul>
        <!-- / navbar right -->
      </div>
      <!-- / navbar collapse -->
  </header>
  <!-- / header -->

  <!-- aside -->
  <aside id="aside" class="app-aside hidden-xs bg-dark">
          <div class="aside-wrap">
        <div class="navi-wrap">
          <!-- user -->
          <div class="clearfix hidden-xs text-center hide" id="aside-user">
            <div class="dropdown wrapper">
              <a href="app.page.profile">
                <span class="thumb-lg w-auto-folded avatar m-t-sm">
                  <img src="img/a0.jpg" class="img-full" alt="...">
                </span>
              </a>
              <a href="#" data-toggle="dropdown" class="dropdown-toggle hidden-folded">
                <span class="clear">
                  <span class="block m-t-sm">
                    <strong class="font-bold text-lt">John.Smith</strong> 
                    <b class="caret"></b>
                  </span>
                  <span class="text-muted text-xs block">Art Director</span>
                </span>
              </a>
              <!-- dropdown -->
              <ul class="dropdown-menu animated fadeInRight w hidden-folded">
                <li class="wrapper b-b m-b-sm bg-info m-t-n-xs">
                  <span class="arrow top hidden-folded arrow-info"></span>
                  <div>
                    <p>300mb of 500mb used</p>
                  </div>
                  <div class="progress progress-xs m-b-none dker">
                    <div class="progress-bar bg-white" data-toggle="tooltip" data-original-title="50%" style="width: 50%"></div>
                  </div>
                </li>
                <li>
                  <a href>Settings</a>
                </li>
                <li>
                  <a href="page_profile.html">Profile</a>
                </li>
                <li>
                  <a href>
                    <span class="badge bg-danger pull-right">3</span>
                    Notifications
                  </a>
                </li>
                <li class="divider"></li>
                <li>
                  <a href="page_signin.html">Logout</a>
                </li>
              </ul>
              <!-- / dropdown -->
            </div>
            <div class="line dk hidden-folded"></div>
          </div>
          <!-- / user -->

          <!-- nav -->
          <nav ui-nav class="navi clearfix">
            <ul class="nav">
              <li class="hidden-folded padder m-t m-b-sm text-muted text-xs">
                <span>Navigation</span>
              </li>
              <li>
                <a href="index.php" class="auto"> 
                  <i class="glyphicon glyphicon-stats icon text-primary-dker"></i>
                  <span class="font-bold">Dashboard</span>
                </a>
              </li>
               <li>
                   <a href="student.php">      
                  <span class="pull-right text-muted">
                    <i class="fa fa-fw fa-angle-right text"></i>
                    <i class="fa fa-fw fa-angle-down text-active"></i>
                  </span>
                  <i class="icon-users icon text-success-lter"></i>
                  <span class="font-bold">Student</span>
                </a>
                <ul class="nav nav-sub dk">
                    
                    <li>
                        <a href="student.php">
                      <span>Student</span>
                    </a>
                  </li>
                    
                  <li>
                      <a href="admission.php">
                      <span>Admission</span>
                    </a>
                  </li>
                  <li>
                      
                      <b class="label bg-info pull-right">N</b>
                      <a href="student_search.php">
                      <span>Student Search</span>
                    </a>
                  </li>
                </ul>
              </li>
              
              <li>
                <a href class="auto">      
                  <span class="pull-right text-muted">
                    <i class="fa fa-fw fa-angle-right text"></i>
                    <i class="fa fa-fw fa-angle-down text-active"></i>
                  </span>
                  <i class="icon-users icon text-success-lter"></i>
                  <span class="font-bold">Transport</span>
                </a>
                <ul class="nav nav-sub dk">
                  
                  <li>
                      <a href="Allocate_new_student.php">
                      <b class="label bg-info pull-right">N</b>
                      <span>Allocate new student</span>
                    </a>
                  </li>
                  
                  <li>
                      <a href="student_allocate_list.php">
                      <b class="label bg-info pull-right">N</b>
                      <span>Allocate student list</span>
                    </a>
                  </li>
                  
                  <li>
                      <a href="Route detail.php">
                      <b class="label bg-info pull-right">N</b>
                      <span>Route detail</span>
                    </a>
                  </li>
                  
                  <li>
                      <a href="View Vehicle Details.php">
                      <b class="label bg-info pull-right">N</b>
                      <span>Vehicle detail</span>
                    </a>
                  </li>
                  <li>
                      <a href="Transport_setting.php">
                      <b class="label bg-info pull-right">N</b>
                      <span>Transport setting</span>
                    </a>
                  </li>
                  
                </ul>
              </li>
              
              <li>
                <a href class="auto">      
                  <span class="pull-right text-muted">
                    <i class="fa fa-fw fa-angle-right text"></i>
                    <i class="fa fa-fw fa-angle-down text-active"></i>
                  </span>
                  <i class=" icon-clock icon text-success-lter"></i>
                  <span class="font-bold">Timetable</span>
                </a>
                <ul class="nav nav-sub dk">
                  
                  <li>
                      <a href="Add_time_table.php">
                      <b class="label bg-info pull-right">N</b>
                      <span>Timetable</span>
                    </a>
                  </li>
                </ul>
              </li>
              
              
              <li>
                <a href class="auto">      
                  <span class="pull-right text-muted">
                    <i class="fa fa-fw fa-angle-right text"></i>
                    <i class="fa fa-fw fa-angle-down text-active"></i>
                  </span>
                  <i class=" icon-book-open icon text-success-lter"></i>
                  <span class="font-bold">Attendance</span>
                </a>
                <ul class="nav nav-sub dk">
                  
                  <li>
                      <a href="Attendance.php">
                      <b class="label bg-info pull-right">N</b>
                      <span>Attendance</span>
                    </a>
                  </li>
                  <li>
                      <a href="Add_Mark_Attendance.php">
                      <b class="label bg-info pull-right">N</b>
                      <span>Mark attendance</span>
                    </a>
                  </li>
                  <li>
                      <a href="Attendance.php">
                      <b class="label bg-info pull-right">N</b>
                      <span>Attendance repport</span>
                    </a>
                  </li>
                  <li>
                      <a href="Attendance.php">
                      <b class="label bg-info pull-right">N</b>
                      <span>Attendance setting</span>
                    </a>
                  </li>
                </ul>
              </li>
              
              
              
              <li>
                <a href class="auto">      
                  <span class="pull-right text-muted">
                    <i class="fa fa-fw fa-angle-right text"></i>
                    <i class="fa fa-fw fa-angle-down text-active"></i>
                  </span>
                  <i class="  icon-ghost icon text-success-lter"></i>
                  <span class="font-bold">Account</span>
                </a>
                <ul class="nav nav-sub dk">
                  <!--
                  <li>
                    <a href="javascript:;">
                      <b class="label bg-info pull-right">N</b>
                      <span>Student Search</span>
                    </a>
                  </li-->
                </ul>
              </li>
              
               <li>
                <a href class="auto">      
                  <span class="pull-right text-muted">
                    <i class="fa fa-fw fa-angle-right text"></i>
                    <i class="fa fa-fw fa-angle-down text-active"></i>
                  </span>
                  <i class="  icon-user-follow icon text-success-lter"></i>
                  <span class="font-bold">Human resource</span>
                </a>
                <ul class="nav nav-sub dk">
                  <!--
                  <li>
                    <a href="javascript:;">
                      <b class="label bg-info pull-right">N</b>
                      <span>Student Search</span>
                    </a>
                  </li-->
                </ul>
              </li>
              
              <li>
                <a href class="auto">      
                  <span class="pull-right text-muted">
                    <i class="fa fa-fw fa-angle-right text"></i>
                    <i class="fa fa-fw fa-angle-down text-active"></i>
                  </span>
                  <i class="   icon-note icon text-success-lter"></i>
                  <span class="font-bold">Examination</span>
                </a>
                <ul class="nav nav-sub dk">
                  <!--
                  <li>
                    <a href="javascript:;">
                      <b class="label bg-info pull-right">N</b>
                      <span>Student Search</span>
                    </a>
                  </li-->
                </ul>
              </li>
              
              
              
              <li>
                <a href class="auto">      
                  <span class="pull-right text-muted">
                    <i class="fa fa-fw fa-angle-right text"></i>
                    <i class="fa fa-fw fa-angle-down text-active"></i>
                  </span>
                  <i class=" icon-graduation icon text-success-lter"></i>
                  <span class="font-bold">Hostel</span>
                </a>
                <ul class="nav nav-sub dk">
                  <!--
                  <li>
                    <a href="javascript:;">
                      <b class="label bg-info pull-right">N</b>
                      <span>Student Search</span>
                    </a>
                  </li-->
                </ul>
              </li>
              
              
              
              <li>
                <a href class="auto">      
                  <span class="pull-right text-muted">
                    <i class="fa fa-fw fa-angle-right text"></i>
                    <i class="fa fa-fw fa-angle-down text-active"></i>
                  </span>
                  <i class="  icon-folder-alt icon text-success-lter"></i>
                  <span class="font-bold">Library</span>
                </a>
                <ul class="nav nav-sub dk">
                  <!--
                  <li>
                    <a href="javascript:;">
                      <b class="label bg-info pull-right">N</b>
                      <span>Student Search</span>
                    </a>
                  </li-->
                </ul>
              </li>
              
              
              <li>
                <a href class="auto">      
                  <span class="pull-right text-muted">
                    <i class="fa fa-fw fa-angle-right text"></i>
                    <i class="fa fa-fw fa-angle-down text-active"></i>
                  </span>
                  <i class="  icon-calendar icon text-success-lter"></i>
                  <span class="font-bold">Calender</span>
                </a>
                <ul class="nav nav-sub dk">
                  <!--
                  <li>
                    <a href="javascript:;">
                      <b class="label bg-info pull-right">N</b>
                      <span>Student Search</span>
                    </a>
                  </li-->
                </ul>
              </li>
              
              <li>
                <a href class="auto">      
                  <span class="pull-right text-muted">
                    <i class="fa fa-fw fa-angle-right text"></i>
                    <i class="fa fa-fw fa-angle-down text-active"></i>
                  </span>
                  <i class=" icon-umbrella icon text-success-lter"></i>
                  <span class="font-bold">Visitor management</span>
                </a>
                <ul class="nav nav-sub dk">
                  <!--
                  <li>
                    <a href="javascript:;">
                      <b class="label bg-info pull-right">N</b>
                      <span>Student Search</span>
                    </a>
                  </li-->
                </ul>
              </li>
              
              <li>
                <a href class="auto">      
                  <span class="pull-right text-muted">
                    <i class="fa fa-fw fa-angle-right text"></i>
                    <i class="fa fa-fw fa-angle-down text-active"></i>
                  </span>
                  <i class=" icon-screen-desktop icon text-success-lter"></i>
                  <span class="font-bold">Customize Dasbord</span>
                </a>
                <ul class="nav nav-sub dk">
                  <!--
                  <li>
                    <a href="javascript:;">
                      <b class="label bg-info pull-right">N</b>
                      <span>Student Search</span>
                    </a>
                  </li-->
                </ul>
              </li>
              
              <li>
                <a href class="auto">      
                  <span class="pull-right text-muted">
                    <i class="fa fa-fw fa-angle-right text"></i>
                    <i class="fa fa-fw fa-angle-down text-active"></i>
                  </span>
                  <i class=" icon-directions icon text-success-lter"></i>
                  <span class="font-bold">Report center</span>
                </a>
                <ul class="nav nav-sub dk">
                  <!--
                  <li>
                    <a href="javascript:;">
                      <b class="label bg-info pull-right">N</b>
                      <span>Student Search</span>
                    </a>
                  </li-->
                </ul>
              </li>
              
              <li>
                <a href class="auto">      
                  <span class="pull-right text-muted">
                    <i class="fa fa-fw fa-angle-right text"></i>
                    <i class="fa fa-fw fa-angle-down text-active"></i>
                  </span>
                  <i class=" icon-film icon text-success-lter"></i>
                  <span class="font-bold">Telephone Diary</span>
                </a>
                <ul class="nav nav-sub dk">
                  <!--
                  <li>
                    <a href="javascript:;">
                      <b class="label bg-info pull-right">N</b>
                      <span>Student Search</span>
                    </a>
                  </li-->
                </ul>
              </li>
              
              <li>
                <a href class="auto">      
                  <span class="pull-right text-muted">
                    <i class="fa fa-fw fa-angle-right text"></i>
                    <i class="fa fa-fw fa-angle-down text-active"></i>
                  </span>
                  <i class=" icon-envelope icon text-success-lter"></i>
                  <span class="font-bold">Disission form</span>
                </a>
                <ul class="nav nav-sub dk">
                  <!--
                  <li>
                    <a href="javascript:;">
                      <b class="label bg-info pull-right">N</b>
                      <span>Student Search</span>
                    </a>
                  </li-->
                </ul>
              </li>
              
              <li>
                <a href class="auto">      
                  <span class="pull-right text-muted">
                    <i class="fa fa-fw fa-angle-right text"></i>
                    <i class="fa fa-fw fa-angle-down text-active"></i>
                  </span>
                  <i class=" icon-cloud-upload icon text-success-lter"></i>
                  <span class="font-bold">Reception module</span>
                </a>
                <ul class="nav nav-sub dk">
                  <!--
                  <li>
                    <a href="javascript:;">
                      <b class="label bg-info pull-right">N</b>
                      <span>Student Search</span>
                    </a>
                  </li-->
                </ul>
              </li>
              
              <li>
                <a href class="auto">      
                  <span class="pull-right text-muted">
                    <i class="fa fa-fw fa-angle-right text"></i>
                    <i class="fa fa-fw fa-angle-down text-active"></i>
                  </span>
                  <i class=" icon-envelope icon text-success-lter"></i>
                  <span class="font-bold">Messaging system</span>
                </a>
                <ul class="nav nav-sub dk">
                  <!--
                  <li>
                    <a href="javascript:;">
                      <b class="label bg-info pull-right">N</b>
                      <span>Student Search</span>
                    </a>
                  </li-->
                </ul>
              </li>
              
              <li>
                <a href class="auto">      
                  <span class="pull-right text-muted">
                    <i class="fa fa-fw fa-angle-right text"></i>
                    <i class="fa fa-fw fa-angle-down text-active"></i>
                  </span>
                  <i class=" icon-user-follow icon text-success-lter"></i>
                  <span class="font-bold">Manage admin</span>
                </a>
                <ul class="nav nav-sub dk">
                  <!--
                  <li>
                    <a href="javascript:;">
                      <b class="label bg-info pull-right">N</b>
                      <span>Student Search</span>
                    </a>
                  </li-->
                </ul>
              </li>
              
              <li>
                <a href class="auto">      
                  <span class="pull-right text-muted">
                    <i class="fa fa-fw fa-angle-right text"></i>
                    <i class="fa fa-fw fa-angle-down text-active"></i>
                  </span>
                  <i class=" icon-envelope icon text-success-lter"></i>
                  <span class="font-bold">Messaging system</span>
                </a>
                <ul class="nav nav-sub dk">
                  <!--
                  <li>
                    <a href="javascript:;">
                      <b class="label bg-info pull-right">N</b>
                      <span>Student Search</span>
                    </a>
                  </li-->
                </ul>
              </li>
              
              
              
              
              
              <li class="line dk"></li>

            </ul>
          </nav>
          <!-- nav -->

        </div>
      </div>
  </aside>
  <!-- / aside -->
  
  <!-- content -->
  <div id="content" class="app-content" role="main">
    <div class="app-content-body ">
      

<div class="hbox hbox-auto-xs hbox-auto-sm" ng-init="
    app.settings.asideFolded = false; 
    app.settings.asideDock = false;
  ">
  <!-- main -->
  <div class="col">
    <!-- main header -->
    <div class="bg-light lter b-b wrapper-md">
      <div class="row">
        <div class="col-sm-6 col-xs-12">
          <h1 class="m-n font-thin h3 text-black">Dashboard</h1>
          <small class="text-muted">Welcome to angulr application</small>
        </div>
        <div class="col-sm-6 text-right hidden-xs">
          <div class="inline m-r text-left">
            <div class="m-b-xs">1290 <span class="text-muted">items</span></div>
            <div
              ui-jq="sparkline" 
              ui-options="[ 106,108,110,105,110,109,105,104,107,109,105,100,105,102,101,99,98 ], {type:'bar', height:20, barWidth:5, barSpacing:1, barColor:'#dce5ec'}" 
              class="sparkline inline">loading...
            </div>
          </div>
          <div class="inline text-left">
            <div class="m-b-xs">$30,000 <span class="text-muted">revenue</span></div>
            <div
              ui-jq="sparkline" 
              ui-options="[ 105,102,106,107,105,104,101,99,98,109,105,100,108,110,105,110,109 ], {type:'bar', height:20, barWidth:5, barSpacing:1, barColor:'#dce5ec'}" 
              class="sparkline inline">loading...
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- / main header -->
    
    <div class="wrapper-md" ng-controller="FlotChartDemoCtrl">
      <!-- stats -->
      <div class="panel padder-v item">
          
          
          
                  