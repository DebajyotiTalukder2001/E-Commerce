<!DOCTYPE html>
<html>

<head>
	<title>Ecommerce Software Admin</title>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
	<script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300&display=swap" rel="stylesheet">
</head>

<body>


<?php

include 'include/sidebar.php';
include 'include/top-header.php';

?>

	<!--//////////////////////////////////////////////BODY/////////////////////////////////////////////////////////////// -->
	            <div class="container-fluid body-area mt-5">
					<div class="row mt-3">
						<div class="col-md-12 col-sm-12">
							<h5 class="pt-4 ml-3">Dashboard</h5>
						</div>
					</div>
					<div class="row">
						<div class="col-md-4 col-sm-12 card-area  mt-3">
							<div class="card">
								<div class="parent">
									<div class="icon">
										<i class="fas fa-rupee-sign"></i>
									</div>
									<div class="total-area">
										<p class="text-muted pt-4">Total Sales</p>
										<h6><i class="fas fa-rupee-sign"></i> 19,255,050.20</h6>
									</div>
								</div>
							</div>
						</div>
						<div class="col-md-4 col-sm-12 card-area mt-3">
							<div class="card">
								<div class="parent">
									<div class="icon">
										<i class="fas fa-shopping-cart" id="icon"></i>
									</div>
									<div class="total-area2">
										<p class="text-muted pt-4">Total Orders</p>
										<h6> 3290</h6>
									</div>
								</div>
							</div>
						</div>
						<div class="col-md-4 col-sm-12 card-area mt-3">
							<div class="card">
								<div class="parent">
									<div class="icon">
										<i class="fas fa-shopping-bag" id="icon2"></i>
									</div>
									<div class="total-area2">
										<p class="text-muted pt-4">Total Products</p>
										<h6>322</h6>
									</div>
								</div>
							</div>
						</div>
					</div>


					<div class="col-md-12 col-sm-12 lower-area mt-5 p-3">

						<h5>Latest Orders</h5>

						<div class="table-responsive mt-3">
							<table class="table noborder">

								<tbody>
									<tr>
										<td class="text-muted">2323</td>
										<td>Devon Lane</td>
										<td class="text-muted">devon@example.com</td>
										<td class="text-muted">Rs.778.35</td>
										<td class="text-success"><mark class="bgs">Delivered</mark></td>
										<td class="text-muted">07.01.2023</td>
										<td class="text-muted">...</td>
									</tr>
									
									<tr>
										<td class="text-muted">2458</td>
										<td>Darell Steward</td>
										<td class="text-muted">darell@example.com</td>
										<td class="text-muted">Rs.219.78</td>
										<td class="text-success"><mark class="bgs">Delivered</mark></td>
										<td class="text-muted">03.03.2023</td>
										<td class="text-muted">...</td>
									</tr>

									<tr>
										<td class="text-muted">6289</td>
										<td>Darlene Robertson</td>
										<td class="text-muted">darlene@example.com</td>
										<td class="text-muted">Rs.928.41</td>
										<td class="text-danger"><mark class="bgd">Cancelled</mark></td>
										<td class="text-muted">23.02.2023</td>
										<td class="text-muted">...</td>
									</tr>

									<tr>
										<td class="text-muted">3869</td>
										<td>Courtney Henry</td>
										<td class="text-muted">courtney@example.com</td>
										<td class="text-muted">Rs.90.51</td>
										<td class="text-warning"><mark class="bgw">Pending</mark></td>
										<td class="text-muted">14.03.2023</td>
										<td class="text-muted">...</td>
									</tr>

									<tr>
										<td class="text-muted">1247</td>
										<td>Eleanor Pena</td>
										<td class="text-muted">eleanor@example.com</td>
										<td class="text-muted">Rs.275.43</td>
										<td class="text-success"><mark class="bgs">Delivered</mark></td>
										<td class="text-muted">10.03.2023</td>
										<td class="text-muted">...</td>
									</tr>

									<tr>
										<td class="text-muted">3961</td>
										<td>Ralph Edwards</td>
										<td class="text-muted">ralph@example.com</td>
										<td class="text-muted">Rs.630.44</td>
										<td class="text-success"><mark class="bgs">Delivered</mark></td>
										<td class="text-muted">23.02.2023</td>
										<td class="text-muted">...</td>
									</tr>

								</tbody>
							</table>
						</div>

					</div>

				</div>

				
<?php

include 'include/footer.php';

?>