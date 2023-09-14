<?php

include 'include/header.php';
include 'include/sidebar.php';
include 'include/top-header.php';

?>




				<div class="container-fluid body-area mt-5">

					<div class="row mt-3">

						<div class="col-md-12 col-sm-12">
							<h5 class="pt-4"><a href="/E-Commerce/admin/Index/index.php"
									style="text-decoration: none; font-weight: bold;">Home</a></h5>
						</div>
					</div>

					<div class="row">

						<div class="col-md-12 col-sm-12 lower-area mt-5 p-2">



							<div class="card">


								<div class="card-header">
									<h4 class="text-center">Add Products</h4>

								</div>



								<div class="card-body">
									<form action="/E-Commerce/admin/Index/Sql/p_add.php" method="post" enctype="multipart/form-data">
										<div class="row p-1">

											<div class="col-md-6 col-sm-12">
												<label for="">Product Name</label>
												<input type="text-area" name="pname" placeholder="Enter Product Name"
													class="form-control" required>
											</div>
											<div class="col-md-6 col-sm-12">
												<label for="">Product Price</label>
												<input type="number" name="pprice" placeholder="Enter Product Price"
													class="form-control" required>
											</div>

											<div class="col-md-6 col-sm-12 mt-3">
												<label for="">Upload Product Image</label>
												<input type="file" name="pimg" class="form-control-file" required>
											</div>

											<div class="col-md-6 col-sm-12 mt-3">
												<label for="">Product Quantity</label>
												<input type="number" name="pquantity"
													placeholder="Enter Product Quantity" class="form-control" required>
											</div>

											<div class="col-md-12 col-sm-12 mt-3">
												<label for="">Description</label>
												<textarea rows="3" placeholder="Enter Description" name="pdesc"
													class="form-control" required></textarea>
											</div>

											<div class="col-md-12 col-sm-12 mt-3">
												<button type="submit" name="submit" class="btn btn-primary">Submit</button>
											</div>


										</div>

									</form>
								</div>
							</div>








						</div>



					</div>




				</div>


			</div>




		<?php

include 'include/footer.php';

?>