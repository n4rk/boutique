<?php
	include "connexion.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Boutique</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
	<link rel="stylesheet" href="assets/css/style.css">
</head>

<body>
	<nav class="navbar navbar-expand-lg nav">
		<div class="container justify-content-between">
			<div class="logo">
				<a class="navbar-brand me-2 mb-1 d-flex align-items-center" href="index.php">
					<img src="assets/img/logo2.png" width="70" loading="lazy"/>
				</a>
			</div>
			<ul class="navbar-nav flex-row d-none d-md-flex">
				<li class="nav-item me-3 me-lg-1 link">
					<a class="nav-link" href="index.php"><i class="fa fa-home mr-1"></i> Home</a>
				</li>
				<li class="nav-item me-3 me-lg-1 link">
					<a class="nav-link" href="about.php"><i class="fa fa-info-circle mr-1"></i> About</a>
				</li>
				<li class="nav-item me-3 me-lg-1 link">
					<a class="nav-link" href="contact.php"><i class="fa fa-envelope mr-1"></i> Contact</a>
				</li>
				<li class="nav-item me-3 me-lg-1 link">
					
				
				<div class="container">
					<a class="btn text-white cartIcon" data-toggle="modal" data-target="#cartModal">
						<i class="fa fa-shopping-cart"></i>
					</a>  
					</div>

					<div class="modal fade" id="cartModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
					<div class="modal-dialog modal-lg modal-dialog-centered" role="document">
						<div class="modal-content">
						<div class="modal-header border-bottom-0">
							<h5 class="modal-title" id="exampleModalLabel">Panier :</h5>
							<button type="button" class="close" data-dismiss="modal" aria-label="Close">
							<span aria-hidden="true">&times;</span>
							</button>
						</div>
						<div class="modal-body">
							<table class="table table-image">
							<thead>
								<tr>
								<th scope="col">Image</th>
								<th scope="col">Product</th>
								<th scope="col">Price</th>
								<th scope="col">Quantity</th>
								<th scope="col">Total</th>
								<th scope="col">Remove</th>
								</tr>
							</thead>
							<tbody>
								<tr>
								<td class="col-3">
									<img src="https://s3.eu-central-1.amazonaws.com/bootstrapbaymisc/blog/24_days_bootstrap/vans.png" class="img-fluid img-thumbnail" alt="Sheep">
								</td>
								<td class="col-4">Vans Sk8-Hi MTE Shoes</td>
								<td class="col-1">89$</td>
								<td class="col-2"><input type="text" class="form-control" id="input1" value="2"></td>
								<td class="col-1">178$</td>
								<td class="col-1"><a href="#" class="rmv"><i class="fa fa-times"></i></a></td>
								</tr>
							</tbody>
							</table> 
							<div class="d-flex justify-content-start">
							<h6>Total: <span class="price text-success">89$</span></h6>
							</div>
						</div>
						<div class="modal-footer border-top-0 justify-content-center">
							<button type="button" class="btn btn-success btn-block">Confirm</button>
						</div>
						</div>
					</div>
				</div>

				</li>
			</ul>
		</div>
	</nav>