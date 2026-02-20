<!DOCTYPE html>
<html>

<head>
	<title>title</title>
</head>

<body>
	<p style={{ $class }}>{{ $name }}</p>
	<p>{{ $age }}</p>
	<p>{{ $salary }}</p>
	curent timestamp: {{ time() }}<br>
	<input type="text" placeholder="abcd" value="{{ $input }}"><br>
	<input type="text" placeholder="abcd" value="{{ $input }}"><br>
	<input type="text" placeholder="abcd" value="{{ $input }}"><br>
	<p><a href="{{ $href }}">{{ $textLink }}</a></p>
	<p>@php
	Echo date('d.m.Y', mktime(0,0,0,2,3,2026))
	@endphp
	</p>
</body>

</html>