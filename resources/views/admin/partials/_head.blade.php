<head>
	<meta charset="utf-8" />
	<meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
	{{-- Favicon and apple touch icon --}}
	<link rel="icon" type="image/png" href="">
	<link rel="apple-touch-icon" sizes="76x76" href="">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
	<meta name="description" content="Atrium blog is an article site">
	<meta name="author" content="Andrews Quarcoo">
	<title>
		@yield('title')
	</title>
	<!--     Fonts and icons     -->
	<link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" />
	<!-- CSS Files -->
	<link href="{{asset('fontawesome/css/all.min.css')}}" rel="stylesheet" />
	<link href="{{asset('css/sb-admin-2.min.css')}}" rel="stylesheet" />
	<link href="{{asset('css/dataTables.bootstrap4.min.css')}}" rel="stylesheet" />
	@yield('stylesheets')
</head>