<div class="container-fluid">
    <div class="content-wrapper">	
		<div class="item-container">	
			<div class="container" ng-app="priceApp" ng-controller="priceController" >	
				<div class="col-md-12">
					<div class="product col-md-5 service-image-left">
                    
							<img id="item-display" src="img/m9.jpg" alt=""></img>
	
				</div>
					
				<div class="col-md-7">
					<div class="product-title">Leica M9</div>
					<div class="product-desc">The Leica M9 is a digital full-frame rangefinder camera. It was introduced by Leica Camera AG in September 2009. It uses an 18.5-megapixel Kodak image sensor, and is compatible with almost all M mount lenses.</div>
					<div class="product-rating"><i class="fa fa-star gold"></i> <i class="fa fa-star gold"></i> <i class="fa fa-star gold"></i> <i class="fa fa-star gold"></i> <i class="fa fa-star-o"></i> </div>
					<hr>
				<div class="row">
					<div class="col-md-6">
						<p id="product-price">18</p>
						<div class="product-stock">In Stock</div>
					</div>
					<div class="col-md-6">
						<div class="btn-group cart">
							<button type="button" class="btn btn-success">
								Add to cart 
							</button>
						</div>
						<div class="btn-group wishlist">
							<button type="button" class="btn btn-danger">
								Add to wishlist 
							</button>
						</div>
					</div>
				</div>


				<hr>
				<div class="row" >
					<div class="col-md-3">
						<input type="number" class="form-control bfh-number" style="width:100px;" ng-model="quantity">
					</div>
					<div class="col-md-3">
						<button type="button" class="btn btn-default addButton" id="addButton"><i class="fa fa-plus"></i></button>
						<button type="button" class="btn btn-default minusButton" onclick="minusQuantity()"><i class="fa fa-minus"></i></button>
					</div>
					<div class="col-md-3">
						Total Price: <div id="total-price">{{price*quantity}}</div>
					</div>
					<div class="col-md-3">
						<div class="btn-group buynow">
							<!-- Trigger the modal with a button -->
					  		<button type="button" class="btn btn-primary" id="buyButton" data-toggle="modal" data-target="#myModal">Buy now</button>
					  		<?php include('functions/payment.php'); ?>
						</div>
					</div>

				</div>
					


				</div>
			</div> 
		</div>		
		<div class="container-fluid">		
			<div class="col-md-12 product-info">
					<ul id="myTab" class="nav nav-tabs nav_tabs">
						
						<li class="active"><a href="#service-one" data-toggle="tab">DESCRIPTION</a></li>
						<li><a href="#service-two" data-toggle="tab">PRODUCT INFO</a></li>
						<li><a href="#service-three" data-toggle="tab">REVIEWS</a></li>
						
					</ul>
				<div id="myTabContent" class="tab-content">
						<div class="tab-pane fade in active" id="service-one">
						 
							<section class="container product-info">
								Superior sharpness and the finest reproduction of detail. The Leica M features a newly-designed, high resolution, 24-Megapixel CMOS sensor in full 35 mm format – the Leica Max 24-MP sensor. When combined with the Leica Maestro image processor, only outstanding images are created. Additionally, the low noise performance makes the M ideal for available-light photography.

								<h3>M9 Features:</h3>
								<li>Sharp images guaranteed</li>
								<li>Motion pictures with Leica look</li>
								<li>Faster results</li>
								<li>Universal capabilities</li>
								<li>Use in any weather conditions</li>
								<li>For long-endurance missions</li>
								<li>Ergonomic handling</li>
								<li>Compatibility with Leica R-Lenses</li>
					
							</section>
										  
						</div>
					<div class="tab-pane fade" id="service-two">
						
						<section class="container">
								
						</section>
						
					</div>
					<div class="tab-pane fade" id="service-three">
												
					</div>
				</div>
				<hr>
			</div>
		</div>
	</div>
</div>

<script>
	var app = angular.module('priceApp',[]);
	app.controller('priceController',function($scope){
		$scope.quantity = 0;
		$scope.price = parseInt($('#product-price').text());	
	});
	var totalPrice = parseInt($('#total-price').text());

</script>





