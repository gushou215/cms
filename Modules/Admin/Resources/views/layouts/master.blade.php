<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
		<meta name="csrf-token" content="{{ csrf_token() }}" />
		<title>laravel 管理后台</title>

		<link rel="stylesheet" href="{{asset('css/app.css')}}">

		<!--ventura-->
			<!-- Favicon -->
			<link rel="shortcut icon" type="image/x-icon" href="/admin_pub/ventura/assets/img/favicon.png">
			
			<!-- Bootstrap CSS -->
			<link rel="stylesheet" href="http://cdn.bootstrapmb.com/bootstrap/4.3.1/css/bootstrap.min.css">
			
			<!-- Fontawesome CSS -->
			<link rel="stylesheet" href="/admin_pub/ventura/assets/css/font-awesome.min.css">
			
			<!-- Feathericon CSS -->
			<link rel="stylesheet" href="/admin_pub/ventura/assets/css/feathericon.min.css">
			
			<link rel="stylesheet" href="/admin_pub/ventura/assets/plugins/morris/morris.css">

		
			<!-- Main CSS -->
			<link rel="stylesheet" href="/admin_pub/ventura/assets/css/style.css">

			<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css">
			<link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Varela+Round&amp;display=swap'>
		<!--ventura-->

        <!-- Beagle-->
			{{--  <link rel="stylesheet" type="text/css" href="/admin_pub/beagle/assets/lib/perfect-scrollbar/css/perfect-scrollbar.min.css"/>
			<link rel="stylesheet" type="text/css" href="/admin_pub/beagle/assets/lib/material-design-icons/css/material-design-iconic-font.min.css"/>
			<!--[if lt IE 9]>
				<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
				<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
			<![endif]-->    
			<link rel="stylesheet" type="text/css" href="/admin_pub/beagle/assets/lib/datetimepicker/css/bootstrap-datetimepicker.min.css"/>
			<link rel="stylesheet" type="text/css" href="/admin_pub/beagle/assets/lib/select2/css/select2.min.css"/>
			<link rel="stylesheet" type="text/css" href="/admin_pub/beagle/assets/lib/bootstrap-slider/css/bootstrap-slider.css"/>
			<link rel="stylesheet" href="/admin_pub/beagle/assets/css/style.css" type="text/css"/>  --}}
		<!-- Beagle-->
		
		
		
	

        
		
		
    </head>
    <body>
	
		<!-- Main Wrapper -->
        <div class="main-wrapper">
		
			<!-- Header -->
            <div class="header">
			
				<!-- Logo -->
                <div class="header-left">
                    <a href="/" class="logo" target="_blank">
						<img src="/admin_pub/ventura/assets/img/logo.png" alt="Logo">
					</a>
					<a href="/" class="logo logo-small" target="_blank">
						<img src="/admin_pub/ventura/assets/img/logo-small.png" alt="Logo" width="30" height="30">
					</a>
                </div>
				<!-- /Logo -->
				
				<a href="javascript:void(0);" id="toggle_btn">
					<i class="fe fe-text-align-left"></i>
				</a>
				
				{{--  <div class="top-nav-search">
					<form>
						@csrf
						<input type="text" class="form-control" placeholder="Search here">
						<button class="btn" type="submit"><i class="fa fa-search"></i></button>
					</form>
				</div>   --}}
				<div class="top-nav-search" id="toggle_top">
					@include('admin::layouts._menus_header')
				</div>	
				
				<!-- Mobile Menu Toggle -->
				<a class="mobile_btn" id="mobile_btn">
					<i class="fa fa-bars"></i>
				</a>
				<!-- /Mobile Menu Toggle -->
				
				<!-- Header Right Menu -->
				<ul class="nav user-menu">

					<!-- App Lists -->
					{{--  <li class="nav-item dropdown app-dropdown">
						<a class="nav-link dropdown-toggle" aria-expanded="false" role="button" data-toggle="dropdown" href="#"><i class="fe fe-app-menu"></i></a>
						<ul class="dropdown-menu app-dropdown-menu">
							<li>
								<div class="app-list">
									<div class="row">
										<div class="col"><a class="app-item" href="inbox.html"><i class="fa fa-envelope"></i><span>Email</span></a></div>
										<div class="col"><a class="app-item" href="calendar.html"><i class="fa fa-calendar"></i><span>Calendar</span></a></div>
										<div class="col"><a class="app-item" href="chat.html"><i class="fa fa-comments"></i><span>Chat</span></a></div>
									</div>
								</div>
							</li>
						</ul>
					</li>  --}}
					<!-- /App Lists -->
					
					<!-- Notifications -->
					{{--  <li class="nav-item dropdown noti-dropdown">
						<a href="#" class="dropdown-toggle nav-link" data-toggle="dropdown">
							<i class="fe fe-bell"></i> <span class="badge badge-pill">3</span>
						</a>
						<div class="dropdown-menu notifications">
							<div class="topnav-dropdown-header">
								<span class="notification-title">Notifications</span>
								<a href="javascript:void(0)" class="clear-noti"> Clear All </a>
							</div>
							<div class="noti-content">
								<ul class="notification-list">
									<li class="notification-message">
										<a href="#">
											<div class="media">
												<span class="avatar avatar-sm">
													<img class="avatar-img rounded-circle" alt="User Image" src="/admin_pub/ventura/assets/img/profiles/avatar-02.jpg">
												</span>
												<div class="media-body">
													<p class="noti-details"><span class="noti-title">Carlson Tech</span> has approved <span class="noti-title">your estimate</span></p>
													<p class="noti-time"><span class="notification-time">4 mins ago</span></p>
												</div>
											</div>
										</a>
									</li>
									<li class="notification-message">
										<a href="#">
											<div class="media">
												<span class="avatar avatar-sm">
													<img class="avatar-img rounded-circle" alt="User Image" src="/admin_pub/ventura/assets/img/profiles/avatar-11.jpg">
												</span>
												<div class="media-body">
													<p class="noti-details"><span class="noti-title">International Software Inc</span> has sent you a invoice in the amount of <span class="noti-title">$218</span></p>
													<p class="noti-time"><span class="notification-time">6 mins ago</span></p>
												</div>
											</div>
										</a>
									</li>
									<li class="notification-message">
										<a href="#">
											<div class="media">
												<span class="avatar avatar-sm">
													<img class="avatar-img rounded-circle" alt="User Image" src="/admin_pub/ventura/assets/img/profiles/avatar-17.jpg">
												</span>
												<div class="media-body">
												<p class="noti-details"><span class="noti-title">John Hendry</span> sent a cancellation request <span class="noti-title">Apple iPhone XR</span></p>
												<p class="noti-time"><span class="notification-time">8 mins ago</span></p>
												</div>
											</div>
										</a>
									</li>
									<li class="notification-message">
										<a href="#">
											<div class="media">
												<span class="avatar avatar-sm">
													<img class="avatar-img rounded-circle" alt="User Image" src="/admin_pub/ventura/assets/img/profiles/avatar-13.jpg">
												</span>
												<div class="media-body">
													<p class="noti-details"><span class="noti-title">Mercury Software Inc</span> added a new product <span class="noti-title">Apple MacBook Pro</span></p>
													<p class="noti-time"><span class="notification-time">12 mins ago</span></p>
												</div>
											</div>
										</a>
									</li>
								</ul>
							</div>
							<div class="topnav-dropdown-footer">
								<a href="#">View all Notifications</a>
							</div>
						</div>
					</li>  --}}
					<!-- /Notifications -->
					
					<!-- User Menu -->
					<li class="nav-item dropdown has-arrow">
						<a href="#" class="dropdown-toggle nav-link" data-toggle="dropdown">
							<span class="user-img"><img class="rounded-circle" src="/admin_pub/ventura/assets/img/profiles/avatar-01.jpg" width="31" alt="Ryan Taylor"></span>
                        </a>
                        
                        <div role="menu" class="dropdown-menu">
                            <div  class="user-header">
                                <div class="avatar avatar-sm">
									<img src="/admin_pub/ventura/assets/img/profiles/avatar-01.jpg" alt="User Image" class="avatar-img rounded-circle">
								</div>
								<div class="user-text">
									<h6>{{auth()->user()->nickname}}</h6>
									<p class="text-muted mb-0"></p>
								</div>
                                {{--  <div class="user-name">{{auth()->user()->nickname}}</div>  --}}
                                {{--  <div class="user-position online">
                                    {{auth()->user()->email}}
                                </div>  --}}
                            </div>
                            <a href="pages-profile.html" class="dropdown-item">
                                <span class="icon mdi mdi-face"></span> 修改密码
                            </a>
                            {{--  <a href="#" class="dropdown-item">
                                <span class="icon mdi mdi-settings"></span> 帐号设置
                            </a>  --}}
                            <a href="javascript:void(0);" class="dropdown-item" onclick="event.preventDefault();document.getElementById('logout').submit()">
                                <span class="icon mdi mdi-power"></span> 退出
                            </a>
                            <form action="/admin/logout" method="post" id="logout">
                                @csrf
                            </form>
                        </div
						{{--  <div class="dropdown-menu">
							<div class="user-header">
								<div class="avatar avatar-sm">
									<img src="/admin_pub/ventura/assets/img/profiles/avatar-01.jpg" alt="User Image" class="avatar-img rounded-circle">
								</div>
								<div class="user-text">
									<h6>Ryan Taylor</h6>
									<p class="text-muted mb-0">Administrator</p>
								</div>
							</div>
							<a class="dropdown-item" href="profile.html">My Profile</a>
							<a class="dropdown-item" href="profile.html">Account Settings</a>
                            <a class="dropdown-item" href="login.html">Logout</a>
                            
						</div>  --}}
					</li>
					<!-- /User Menu -->
					
				</ul>
				<!-- /Header Right Menu -->
				
            </div>
            <!-- /Header -->
            <!-- Sidebar -->
            <div class="sidebar" id="sidebar">
			    @include('admin::layouts._menus')			
            </div>
            <!-- /Sidebar -->

			<!-- Page Wrapper -->
            <div class="page-wrapper">
				

  
  
                    <div class="main-content container-fluid" id="pjax-container">
                        <!--pjax加载动画-->
                            <div id="wifi-loader" style="width: 100%;margin-top:0.5em;display:none;">
                                {{--  <svg class="circle-outer" viewBox="0 0 86 86">
                                <circle class="back" cx="43" cy="43" r="40"></circle>
                                <circle class="front" cx="43" cy="43" r="40"></circle>
                                <circle class="new" cx="43" cy="43" r="40"></circle>
                                </svg>
                                <svg class="circle-middle" viewBox="0 0 60 60">
                                <circle class="back" cx="30" cy="30" r="27"></circle>
                                <circle class="front" cx="30" cy="30" r="27"></circle>
                                </svg>
                                <svg class="circle-inner" viewBox="0 0 34 34">
                                <circle class="back" cx="17" cy="17" r="14"></circle>
                                <circle class="front" cx="17" cy="17" r="14"></circle>
                                </svg>
                                <div class="text" data-text="Searching"></div>  --}}
                            </div>
                        <!--pjax加载动画结束-->
                        <div id="app" style="margin-top:1em;">
							
                            @include('layouts._validate')	
                            @include('layouts._message')        
                            @yield('content')
                        </div>
                    </div>	
			</div>
			<!-- /Page Wrapper -->
		
        </div>
		<!-- /Main Wrapper -->

		<script  src="{{mix('js/app.js')}}"></script>
		
		<script  src="/admin_pub/plugin/menu.js"></script>		

		<!--pjax-->
        <script src="https://cdn.bootcss.com/jquery.pjax/2.0.1/jquery.pjax.min.js" type="text/javascript"></script>
        <script src="/admin_pub/plugin/pjax/pjax.js" type="text/javascript"></script>
        <link rel="stylesheet" href="/admin_pub/plugin/pjax/pjax.css">
        
		<!--pjax-->
		
		<!--Beagle-->
        {{--  <script src="/admin_pub/beagle/assets/lib/perfect-scrollbar/js/perfect-scrollbar.jquery.min.js" type="text/javascript"></script>
		
		<script src="/admin_pub/beagle/assets/js/main.js" type="text/javascript"></script>

        <script src="/admin_pub/beagle/assets/lib/jquery-ui/jquery-ui.min.js" type="text/javascript"></script>
        <script src="/admin_pub/beagle/assets/lib/jquery.nestable/jquery.nestable.js" type="text/javascript"></script>
        <script src="/admin_pub/beagle/assets/lib/moment.js/min/moment.min.js" type="text/javascript"></script>
        <script src="/admin_pub/beagle/assets/lib/datetimepicker/js/bootstrap-datetimepicker.min.js" type="text/javascript"></script>
		
		<script src="/admin_pub/beagle/assets/lib/select2/js/select2.min.js" type="text/javascript"></script>
		
		<script src="/admin_pub/beagle/assets/lib/bootstrap-slider/js/bootstrap-slider.js" type="text/javascript"></script>
        <script src="/admin_pub/beagle/assets/js/app-form-elements.js" type="text/javascript"></script>
        <script type="text/javascript">
        $(document).ready(function(){
            //initialize the javascript
            App.init();
            App.formElements();
		});  --}}
		
        </script>
        <!--Beagle-->
		
		<!-- jQuery -->
        {{--  <script src="/admin_pub/ventura/assets/js/jquery-3.2.1.min.js"></script>
		
		<!-- Bootstrap Core JS -->
        <script src="/admin_pub/ventura/assets/js/popper.min.js"></script>
        <script src="http://cdn.bootstrapmb.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>  --}}
		
		<!-- Slimscroll JS -->
        <script src="/admin_pub/ventura/assets/plugins/slimscroll/jquery.slimscroll.min.js"></script>
		
		<script src="/admin_pub/ventura/assets/plugins/raphael/raphael.min.js"></script>    
		<script src="/admin_pub/ventura/assets/plugins/morris/morris.min.js"></script>  
		<script src="/admin_pub/ventura/assets/js/chart.morris.js"></script>
		
		<!-- Custom JS -->
        <script  src="/admin_pub/ventura/assets/js/script.js"></script>
        

       

       
		
		@yield('scripts')
		
    </body>
</html>
