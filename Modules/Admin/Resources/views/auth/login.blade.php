{{-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="">
    <meta name="author" content="向军大叔">
    <link rel="shortcut icon" href="assets/img/logo-fav.png">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name', 'Laravel') }}</title>
    <link rel="stylesheet" type="text/css" href="{{asset('theme/beagle/lib/perfect-scrollbar/css/perfect-scrollbar.min.css')}}"/>
    <link rel="stylesheet" type="text/css" href="{{asset('theme/beagle/lib/material-design-icons/css/material-design-iconic-font.min.css')}}"/>
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <link rel="stylesheet" href="{{asset('theme/beagle/css/app.css')}}" type="text/css"/>
</head>
<body class="be-splash-screen">
<div class="be-wrapper be-login" id="app">
    <div class="be-content">
        <div class="main-content container-fluid">
            <div class="splash-container">
                <div class="card card-border-color card-border-color-primary">
                    <div class="card-header"><img src="{{asset('theme/beagle/img/logo-xx.png')}}" alt="logo" width="120" height="27" class="logo-img">
                        <span class="splash-description">登录系统</span></div>
                    <div class="card-body">
                        <form action="/admin/login" method="post">
                            @csrf
                            @include('layouts._error')
                            <div class="login-form">
                                <div class="form-group">
                                    <input id="email" type="text" name="name" placeholder="输入后台账号" autocomplete="off" class="form-control">
                                </div>
                                <div class="form-group">
                                    <input id="password" type="password" name="password" placeholder="登录密码" class="form-control">
                                </div>
                                <div class="form-group row login-tools">
                                    <div class="col-6 login-remember">
                                        <label class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input"><span class="custom-control-label">
                                                {{__('Remember Me')}}
                                            </span>
                                        </label>
                                    </div>
                                    <div class="col-6 login-forgot-password">
                                        <a href="{{route('password.request')}}">
                                            {{__('Forgot Your Password?')}}
                                        </a>
                                    </div>
                                </div>
                                <div class="form-group row login-submit">
                                    <div class="col-6">
                                        <button data-dismiss="modal" type="submit" class="btn btn-primary btn-xl">
                                            {{__('Login')}}
                                        </button>
                                    </div>
                                    <div class="col-6">
                                        <a href="{{route('register')}}" class="btn btn-secondary btn-xl">
                                            {{__('Register')}}
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="splash-footer">&copy; 2019 {{ config('app.name', 'Laravel') }} <a href="/">返回首页</a></div>
            </div>
        </div>
    </div>
</div>
<script src="{{mix('js/app.js')}}"></script>
<script src="{{asset('theme/beagle/lib/perfect-scrollbar/js/perfect-scrollbar.jquery.min.js')}}" type="text/javascript"></script>
<script src="{{asset('theme/beagle/js/app.js')}}" type="text/javascript"></script>
<script type="text/javascript">
    $(document).ready(function(){
        //initialize the javascript
        App.init();
    });
</script>
</body>
</html> --}}


<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
        <title>Ventura - Login</title>
		
		<!-- Favicon -->
        <link rel="shortcut icon" type="image/x-icon" href="/admin_pub/ventura/assets/img/favicon.png">

		<!-- Bootstrap CSS -->
        <link rel="stylesheet" href="http://cdn.bootstrapmb.com/bootstrap/4.3.1/css/bootstrap.min.css">
		
		<!-- Fontawesome CSS -->
        <link rel="stylesheet" href="/admin_pub/ventura/assets/css/font-awesome.min.css">
		
		<!-- Main CSS -->
        <link rel="stylesheet" href="/admin_pub/ventura/assets/css/style.css">
		
		<!--[if lt IE 9]>
			<script src="/admin_pub/ventura/assets/js/html5shiv.min.js"></script>
			<script src="/admin_pub/ventura/assets/js/respond.min.js"></script>
		<![endif]-->
    </head>
    <body>
	
		<!-- Main Wrapper -->
        <div class="main-wrapper login-body">
            <div class="login-wrapper">
            	<div class="container">
                	<div class="loginbox">
                    	<div class="login-left">
							<img class="img-fluid" src="/admin_pub/ventura/assets/img/logo.png" alt="Logo">
                        </div>
                        <div class="login-right">
							<div class="login-right-wrap">
								<h1>登录系统</h1>
                                <p class="account-subtitle">欢迎您的使用!</p>
								
								<!-- Form -->
                                <form action="/admin/login" method="POST">
                                    @csrf
                                    @include('layouts._error')
									<div class="form-group">
                                        <input id="email" type="text" name="name" placeholder="输入后台账号" autocomplete="off" class="form-control">
									</div>
									<div class="form-group">
                                        <input id="password" type="password" name="password" placeholder="登录密码" class="form-control">
									</div>
									<div class="form-group">
                                        <button data-dismiss="modal" class="btn btn-primary btn-block" type="submit" class="btn btn-primary btn-xl">
                                            {{__('Login')}}
                                        </button>
                                    </div>
                                    <div class="form-group row login-tools">
                                        <div class="col-6 login-remember">
                                            <label class="custom-control custom-checkbox">
                                                <input type="checkbox" class="custom-control-input"><span class="custom-control-label">
                                                    {{__('Remember Me')}}
                                                </span>
                                            </label>
                                        </div>
                                        <div class="col-6 login-forgot-password">
                                            <a href="{{route('password.request')}}">
                                                {{__('Forgot Your Password?')}}
                                            </a>
                                        </div>
                                    </div>

                                    
								</form>
								<!-- /Form -->
								
							</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
		<!-- /Main Wrapper -->
		
		<!-- jQuery -->
        <script src="/admin_pub/ventura/assets/js/jquery-3.2.1.min.js"></script>
		
		<!-- Bootstrap Core JS -->
        <script src="/admin_pub/ventura/assets/js/popper.min.js"></script>
        <script src="http://cdn.bootstrapmb.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
		
		<!-- Custom JS -->
		<script src="/admin_pub/ventura/assets/js/script.js"></script>
		
    </body>
</html>
