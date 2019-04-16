<!DOCTYPE html>
<html>
<head>
	<title>BookNinja</title>
	@include('header')
</head>
<body>

<div class="content">
    <img src="{{asset('images/ninja.png')}}" class="image-index mb-5">
        <br>
    <a href="{{ url('/catalog') }}" class='btn btn-success btn-lg text-white'>Start</a>
</div>
    
</body>
</html>