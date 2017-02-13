﻿<!DOCTYPE html>
<html lang="en" class="app">
<head>
<meta charset="utf-8" />
<title>Musik | Web Application</title>
<meta name="description" content="app, web app, responsive, admin dashboard, admin, flat, flat ui, ui kit, off screen nav" />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
<link rel="stylesheet" href="static/js/jPlayer/jplayer.flat.css" type="text/css" />
<link rel="stylesheet" href="static/css/app.v1.css" type="text/css" />
<!--[if lt IE 9]> 
<script src="static/js/ie/html5shiv.js"></script> 
<script src="static/ie/respond.min.js"></script> 
<script src="static/ie/excanvas.js"></script> 
<![endif]-->
</head>
<body class="">
<section class="vbox">
  <header class="bg-white-only header header-md navbar navbar-fixed-top-xs">
    <div class="navbar-header aside bg-info nav-xs">
   		<a href="index.html" class="navbar-brand text-lt"> 
    		<i class="icon-earphones"></i> <img src="static/images/logo.png" alt="." class="hide"> 
    		<span class="hidden-nav-xs m-l-sm">Musik</span> 
    	</a> 
    	<a class="btn btn-link visible-xs" data-toggle="dropdown" data-target=".user"> <i class="icon-settings"></i> </a> 
    </div>
    <ul class="nav navbar-nav hidden-xs">
      <li> <a href="#nav,.navbar-header" data-toggle="class:nav-xs,nav-xs" class="text-muted"> <i class="fa fa-indent text"></i> <i class="fa fa-dedent text-active"></i> </a> </li>
    </ul>
    <form class="navbar-form navbar-left input-s-lg m-t m-l-n-xs hidden-xs" role="search">
      <div class="form-group">
        <div class="input-group"> <span class="input-group-btn">
          <button type="submit" class="btn btn-sm bg-white btn-icon rounded"><i class="fa fa-search"></i></button>
          </span>
          <input type="text" class="form-control input-sm no-border rounded" placeholder="Search songs, albums...">
        </div>
      </div>
    </form>
    <div class="navbar-right ">
      <ul class="nav navbar-nav m-n hidden-xs nav-user user">
        <li class="hidden-xs"> <a href="#" class="dropdown-toggle lt" data-toggle="dropdown"> <i class="icon-bell"></i> <span class="badge badge-sm up bg-danger count">2</span> </a>
          <section class="dropdown-menu aside-xl animated fadeInUp">
            <section class="panel bg-white">
              <div class="panel-heading b-light bg-light"> <strong>You have <span class="count">2</span> notifications</strong> </div>
              <div class="list-group list-group-alt"> <a href="#" class="media list-group-item"> <span class="pull-left thumb-sm"> <img src="static/images/a0.png" alt="..." class="img-circle"> </span> <span class="media-body block m-b-none"> Use awesome animate.css<br>
                <small class="text-muted">10 minutes ago</small> </span> </a> <a href="#" class="media list-group-item"> <span class="media-body block m-b-none"> 1.0 initial released<br>
                <small class="text-muted">1 hour ago</small> </span> </a> </div>
              <div class="panel-footer text-sm"> <a href="#" class="pull-right"><i class="fa fa-cog"></i></a> <a href="#notes" data-toggle="class:show animated fadeInRight">See all the notifications</a> </div>
            </section>
          </section>
        </li>
        <li class="dropdown"> <a href="#" class="dropdown-toggle bg clear" data-toggle="dropdown"> <span class="thumb-sm avatar pull-right m-t-n-sm m-b-n-sm m-l-sm"> <img src="static/images/a0.png" alt="..."> </span> John.Smith <b class="caret"></b> </a>
          <ul class="dropdown-menu animated fadeInRight">
            <li> <span class="arrow top"></span> <a href="#">Settings</a> </li>
            <li> <a href="profile.html">Profile</a> </li>
            <li> <a href="#"> <span class="badge bg-danger pull-right">3</span> Notifications </a> </li>
            <li> <a href="docs.html">Help</a> </li>
            <li class="divider"></li>
            <li> <a href="modal.lockme.html" data-toggle="ajaxModal" >Logout</a> </li>
          </ul>
        </li>
      </ul>
    </div>
  </header>
  <section>
    <section class="hbox stretch"> <!-- .aside -->
      <aside class="bg-black dk nav-xs aside hidden-print" id="nav">
        <section class="vbox">
          <section class="w-f-md scrollable">
            <div class="slim-scroll" data-height="auto" data-disable-fade-out="true" data-distance="0" data-size="10px" data-railOpacity="0.2"> <!-- nav -->
              <nav class="nav-primary hidden-xs">
                <ul class="nav bg clearfix">
                  <li class="hidden-nav-xs padder m-t m-b-sm text-xs text-muted"> Discover </li>
                  <li> <a href="index.html"> <i class="icon-disc icon text-success"></i> <span class="font-bold">What's new</span> </a> </li>
                  <li> <a href="genres.html"> <i class="icon-music-tone-alt icon text-info"></i> <span class="font-bold">Genres</span> </a> </li>
                  <li> <a href="events.html"> <i class="icon-drawer icon text-primary-lter"></i> <b class="badge bg-primary pull-right">6</b> <span class="font-bold">Events</span> </a> </li>
                  <li> <a href="listen.html"> <i class="icon-list icon text-info-dker"></i> <span class="font-bold">Listen</span> </a> </li>
                  <li> <a href="video.html" data-target="#content" data-el="#bjax-el" data-replace="true"> <i class="icon-social-youtube icon text-primary"></i> <span class="font-bold">Video</span> </a> </li>
                  <li class="m-b hidden-nav-xs"></li>
                </ul>
                <ul class="nav" data-ride="collapse">
                  <li class="hidden-nav-xs padder m-t m-b-sm text-xs text-muted"> Interface </li>
                  <li > <a href="#" class="auto"> <span class="pull-right text-muted"> <i class="fa fa-angle-left text"></i> <i class="fa fa-angle-down text-active"></i> </span> <i class="icon-screen-desktop icon"> </i> <span>Layouts</span> </a>
                    <ul class="nav dk text-sm">
                      <li > <a href="layout-color.html" class="auto"> <i class="fa fa-angle-right text-xs"></i> <span>Color option</span> </a> </li>
                      <li > <a href="layout-boxed.html" class="auto"> <i class="fa fa-angle-right text-xs"></i> <span>Boxed layout</span> </a> </li>
                      <li > <a href="layout-fluid.html" class="auto"> <i class="fa fa-angle-right text-xs"></i> <span>Fluid layout</span> </a> </li>
                    </ul>
                  </li>
                  <li > <a href="#" class="auto"> <span class="pull-right text-muted"> <i class="fa fa-angle-left text"></i> <i class="fa fa-angle-down text-active"></i> </span> <i class="icon-chemistry icon"> </i> <span>UI Kit</span> </a>
                    <ul class="nav dk text-sm">
                      <li > <a href="buttons.html" class="auto"> <i class="fa fa-angle-right text-xs"></i> <span>Buttons</span> </a> </li>
                      <li > <a href="icons.html" class="auto"> <b class="badge bg-info pull-right">369</b> <i class="fa fa-angle-right text-xs"></i> <span>Icons</span> </a> </li>
                      <li > <a href="grid.html" class="auto"> <i class="fa fa-angle-right text-xs"></i> <span>Grid</span> </a> </li>
                      <li > <a href="widgets.html" class="auto"> <b class="badge bg-dark pull-right">8</b> <i class="fa fa-angle-right text-xs"></i> <span>Widgets</span> </a> </li>
                      <li > <a href="components.html" class="auto"> <i class="fa fa-angle-right text-xs"></i> <span>Components</span> </a> </li>
                      <li > <a href="list.html" class="auto"> <i class="fa fa-angle-right text-xs"></i> <span>List group</span> </a> </li>
                      <li > <a href="#table" class="auto"> <span class="pull-right text-muted"> <i class="fa fa-angle-left text"></i> <i class="fa fa-angle-down text-active"></i> </span> <i class="fa fa-angle-right text-xs"></i> <span>Table</span> </a>
                        <ul class="nav dker">
                          <li > <a href="table-static.html"> <i class="fa fa-angle-right"></i> <span>Table static</span> </a> </li>
                          <li > <a href="table-datatable.html"> <i class="fa fa-angle-right"></i> <span>Datatable</span> </a> </li>
                        </ul>
                      </li>
                      <li > <a href="#form" class="auto"> <span class="pull-right text-muted"> <i class="fa fa-angle-left text"></i> <i class="fa fa-angle-down text-active"></i> </span> <i class="fa fa-angle-right text-xs"></i> <span>Form</span> </a>
                        <ul class="nav dker">
                          <li > <a href="form-elements.html"> <i class="fa fa-angle-right"></i> <span>Form elements</span> </a> </li>
                          <li > <a href="form-validation.html"> <i class="fa fa-angle-right"></i> <span>Form validation</span> </a> </li>
                          <li > <a href="form-wizard.html"> <i class="fa fa-angle-right"></i> <span>Form wizard</span> </a> </li>
                        </ul>
                      </li>
                      <li > <a href="chart.html" class="auto"> <i class="fa fa-angle-right text-xs"></i> <span>Chart</span> </a> </li>
                      <li > <a href="portlet.html" class="auto"> <i class="fa fa-angle-right text-xs"></i> <span>Portlet</span> </a> </li>
                      <li > <a href="timeline.html" class="auto"> <i class="fa fa-angle-right text-xs"></i> <span>Timeline</span> </a> </li>
                    </ul>
                  </li>
                  <li > <a href="#" class="auto"> <span class="pull-right text-muted"> <i class="fa fa-angle-left text"></i> <i class="fa fa-angle-down text-active"></i> </span> <i class="icon-grid icon"> </i> <span>Pages</span> </a>
                    <ul class="nav dk text-sm">
                      <li > <a href="profile.html" class="auto"> <i class="fa fa-angle-right text-xs"></i> <span>Profile</span> </a> </li>
                      <li > <a href="blog.html" class="auto"> <i class="fa fa-angle-right text-xs"></i> <span>Blog</span> </a> </li>
                      <li > <a href="invoice.html" class="auto"> <i class="fa fa-angle-right text-xs"></i> <span>Invoice</span> </a> </li>
                      <li > <a href="gmap.html" class="auto"> <i class="fa fa-angle-right text-xs"></i> <span>Google Map</span> </a> </li>
                      <li > <a href="jvectormap.html" class="auto"> <i class="fa fa-angle-right text-xs"></i> <span>Vector Map</span> </a> </li>
                      <li > <a href="signin.html" class="auto"> <i class="fa fa-angle-right text-xs"></i> <span>Signin</span> </a> </li>
                      <li > <a href="signup.html" class="auto"> <i class="fa fa-angle-right text-xs"></i> <span>Signup</span> </a> </li>
                      <li > <a href="404.html" class="auto"> <i class="fa fa-angle-right text-xs"></i> <span>404</span> </a> </li>
                    </ul>
                  </li>
                </ul>
                <ul class="nav text-sm">
                  <li class="hidden-nav-xs padder m-t m-b-sm text-xs text-muted"> <span class="pull-right"><a href="#"><i class="icon-plus i-lg"></i></a></span> Playlist </li>
                  <li> <a href="#"> <i class="icon-music-tone icon"></i> <span>Hip-Pop</span> </a> </li>
                  <li> <a href="#"> <i class="icon-playlist icon text-success-lter"></i> <b class="badge bg-success dker pull-right">9</b> <span>Jazz</span> </a> </li>
                </ul>
              </nav>
              <!-- / nav --> </div>
          </section>
          <footer class="footer hidden-xs no-padder text-center-nav-xs">
            <div class="bg hidden-xs ">
              <div class="dropdown dropup wrapper-sm clearfix"> <a href="#" class="dropdown-toggle" data-toggle="dropdown"> <span class="thumb-sm avatar pull-left m-l-xs"> <img src="static/images/a3.png" class="dker" alt="..."> <i class="on b-black"></i> </span> <span class="hidden-nav-xs clear"> <span class="block m-l"> <strong class="font-bold text-lt">John.Smith</strong> <b class="caret"></b> </span> <span class="text-muted text-xs block m-l">Art Director</span> </span> </a>
                <ul class="dropdown-menu animated fadeInRight aside text-left">
                  <li> <span class="arrow bottom hidden-nav-xs"></span> <a href="#">Settings</a> </li>
                  <li> <a href="profile.html">Profile</a> </li>
                  <li> <a href="#"> <span class="badge bg-danger pull-right">3</span> Notifications </a> </li>
                  <li> <a href="docs.html">Help</a> </li>
                  <li class="divider"></li>
                  <li> <a href="modal.lockme.html" data-toggle="ajaxModal" >Logout</a> </li>
                </ul>
              </div>
            </div>
          </footer>
        </section>
      </aside>
      <!-- /.aside -->
      <?php echo $content;?>
     </section>
  </section>
</section>
<!-- Bootstrap --> 
<!-- App --> 
<script src="static/js/app.v1.js"></script> 
<script src="static/js/app.plugin.js"></script> 
<script type="text/javascript" src="static/js/jPlayer/jquery.jplayer.min.js"></script> 
<script type="text/javascript" src="static/js/jPlayer/add-on/jplayer.playlist.min.js"></script> 
<script type="text/javascript" src="static/js/jPlayer/demo.js"></script>
</body>
</html>
