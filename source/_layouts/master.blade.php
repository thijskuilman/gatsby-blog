<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ mix('css/main.css', 'assets/build') }}">
    <script src="https://identity.netlify.com/v1/netlify-identity-widget.js"></script>
</head>

@include('_partials.header')

<body>
	<div id="app">
		@yield('body')
	</div>
</body>

{{--@include('_partials.footer')--}}

<script src="{{ mix('js/main.js', 'assets/build') }}"></script>

</html>
