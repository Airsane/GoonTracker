<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<title>GoonRADAR</title>
	<link rel="shortcut icon" href="img/favicon.webp" type="image/x-icon">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
	<link href="https://bootswatch.com/5/cyborg/bootstrap.min.css" rel="stylesheet">
	<link rel="stylesheet" href="{{ asset('assets/css/global.css') }}">
	<link rel="stylesheet" href="{{ asset('assets/css/main.css') }}">
	<link rel="stylesheet" href="{{ asset('assets/css/footer.css') }}">
	<link rel="stylesheet" href="{{ asset('assets/css/login.css') }}">

</head>

<body>

    @include('components.header')

	@yield('content')

	@include('components.footer')
	@yield('scripts')
		<script>
			setTimeout(()=>{
				document.querySelector('div[style="clear:both;width:100%;height:90px;padding:0px;z-index:99;position:relative;"]').remove();
			document.querySelector('div[style="width: 663px; height: 152px; bottom: 5px; position: fixed; background: rgba(0, 0, 0, 0.9); color: rgb(255, 255, 255); border-radius: 5px; z-index: 101; left: 949px; display: block;"]').remove();
		},100);
	</script>
</body>
</html>