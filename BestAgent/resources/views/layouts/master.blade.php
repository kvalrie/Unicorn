<!DOCTYPE html>
<html lang="en">
<head>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
	<link href="https://fonts.googleapis.com/css?family=Roboto+Condensed" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Oswald" rel="stylesheet">
	<link  href="{{asset('css/master.css')}}" rel="stylesheet">
	<link  href="{{asset('css/css_header.css')}}" rel="stylesheet">
	<link  href="{{asset('css/css_avis.css')}}" rel="stylesheet">

	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta charset="UTF-8">

	<meta charset="UTF-8">
	<title>Best Agent</title>
</head>
<body >


@include('layouts.nav')



 @yield('content')

 @include('layouts.footer')


</body>
</html>
