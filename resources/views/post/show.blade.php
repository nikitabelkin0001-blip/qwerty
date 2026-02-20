<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>
<body>
	@foreach ($worker as $workers)
	{{ $workers['name'] }}  {{ $workers['age'] }} {{$workers['salary']}}<br>
	@endforeach
	@foreach ($worker as $workers)
	{{ $loop->count }}
	@break
	@endforeach
</body>
</html>