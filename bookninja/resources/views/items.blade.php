<!DOCTYPE html>
<html>
<head>
	<title>Book Ninja</title>
	@include('header')
</head>
<body>
	@include('nav')

	<div class="container">

		<a href="{{ url('/catalog') }}" class="btn btn-lg btn-success"><i class="fas fa-arrow-circle-left"></i> Catalog</a>
		<div id="item-card" class="card my-5 text-white">
		 <div class="card-body">
			<div class="row">
				<div class="col">
				    <img src="{{asset('images/food.jpg')}}" style="width:250px;">
				</div>
				<div class="col">
				    <h4 class="mt-4">Chesa Bianca</h4>
				    <p>Reservation is at $50.00 on lunch and dinner service.</p>
			    </div>
				<div class="col ml-5">

					  <input type="date" class="form-control border-dark" aria-label="date" >

					
				    <a href="{{ url('/items') }}" class="btn btn-lg btn-outline-light btn-success border-0 mt-3 mr-5">Book a Table</a>
				
		   </div>
		</div>
	  </div>
	</div>

</body>
</html>