<!DOCTYPE html>
<html>
<head>
	<title>Book Ninja</title>
	@include('header')

</head>
<body>
	@include('nav')
		
	<div class="container">

		<h2 class="text-body"><i class="fas fa-tags mb-4"></i> Book your reservations</h2>

		<div class="row">
			<div class="col">
				<div class="card my-2">
				  <div class="card-body">
				    <div class="row">
				    	<div class="col">
				    		<img src="{{asset('images/food.jpg')}}" style="width:250px;">
				    	</div>
				    	<div class="col">
				    		<h4 class="mt-4">Chesa Bianca</h4>
				    		<p class="text-muted">Reservation is at $50.00 on lunch and dinner service.</p>
				    	</div>
				    	<div class="col ml-5">
				    			<a href="{{ url('/items') }}" class="btn btn-lg btn-success mt-5 ml-5">View Offer</a>
				    	</div>
				    </div>
				  </div>
				</div>
				<div class="card my-2">
				  <div class="card-body">
				    <div class="row">
				    	<div class="col">
				    		<img src="{{asset('images/food2.jpeg')}}" style="width:250px;">
				    	</div>
				    	<div class="col">
				    		<h4 class="mt-4">The Bowery NY</h4>
				    		<p class="text-muted">Reservation is at $70.00 on lunch and dinner service.</p>
				    	</div>
				    	<div class="col ml-5">
				    			<button class="btn btn-lg btn-success mt-5 ml-5">View Offer</button>
				    	</div>
				    </div>
				  </div>
				</div>
				<div class="card my-2">
				  <div class="card-body">
				    <div class="row">
				    	<div class="col">
				    		<img src="{{asset('images/food3.jpg')}}" style="width:250px;">
				    	</div>
				    	<div class="col">
				    		<h4 class="mt-4">Restoranti Aldos</h4>
				    		<p class="text-muted">Reservation is at $36.00 on lunch and dinner service.</p>
				    	</div>
				    	<div class="col ml-5">
				    			<button class="btn btn-lg btn-success mt-5 ml-5">View Offer</button>
				    	</div>
				    </div>
				  </div>
				</div>
			</div>
		</div>
				
	</div>	 	
</body>
</html>