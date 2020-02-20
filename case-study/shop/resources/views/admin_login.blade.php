
<!DOCTYPE html>
<head>
<title>Trang Đăng Nhập Admin</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Visitors Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- bootstrap-css -->
<link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}" >
<!-- //bootstrap-css -->
<!-- Custom CSS -->
<link href="{{asset('css/style.css')}}" rel='stylesheet' type='text/css' />
<link href="{{asset('css/style-responsive.css')}}" rel="stylesheet"/>
<!-- font CSS -->
<link href='//fonts.googleapis.com/css?family=Roboto:400,100,100italic,300,300italic,400italic,500,500italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>
<!-- font-awesome icons -->
<link rel="stylesheet" href="{{asset('css/font.css')}}" type="text/css"/>
<link href="{{asset('css/font-awesome.css')}}" rel="stylesheet"> 
<!-- //font-awesome icons -->
<script src="{{asset('/js/jquery2.0.3.min.js')}}"></script>
</head>
<body>
<div class="log-w3">
<div class="w3layouts-main">
	<h2 style="color: green">Đăng Nhập</h2>
	@if (session('error'))
    <div class="alert alert-danger" role="alert">
            {{ session('error') }}
    </div>
	@endif
		<form action="{{URL::to('/admin-dashboard')}}" method="post">
             {{csrf_field()}}
			<input type="text" class="ggg" name="email" placeholder="nhap email" required="">
			<input type="password" class="ggg" name="password" placeholder=" nhap password" required="">
			<span><input type="checkbox" />Nhớ Lần Đăng Nhập Tiếp Theo</span>
			<h6><a href="#">Quên Mật Khẩu?</a></h6>
				<div class="clearfix"></div>
				<input type="submit" value="Đăng Nhập" name="login">
		</form>
		<!-- <p>Don't Have an Account ?<a href="registration.html">Create an account</a></p> -->
</div>
</div>
<script src="{{asset('/js/bootstrap.js')}}"></script>
<script src="{{asset('/js/jquery.dcjqaccordion.2.7.js')}}"></script>
<script src="{{asset('/js/scripts.js')}}"></script>
<script src="{{asset('/js/jquery.slimscroll.js')}}"></script>
<script src="{{asset('/js/jquery.nicescroll.js')}}"></script>
<!--[if lte IE 8]><script language="javascript" type="text/javascript" src="js/flot-chart/excanvas.min.js"></script><![endif]-->
<script src="js/jquery.scrollTo.js"></script>
</body>
</html>
