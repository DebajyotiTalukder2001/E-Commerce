<div class="container-fluid main">
		<div class="row">
			<div class="col-md-2 col-sm-12 top-left m-0 p-0">
				<div class="logo-area">
					<img src="img/logo.png" alt="..." height="90px" width="130px">
					<span class="fas fa-bars" id="bars" onclick="bars()"></span>
				</div>
				<hr>
				<div class="das_icon" id="navi">
					<nav>
						<a href="#"
							style="background-color: #CDF0EA; color: #4649FF; margin-right: 14px; border-radius: 5px;"><i
								class="fas fa-th-large"
								style="margin-right: 13px; color: #4649FF; padding-left: 10px;"></i> Dashboard</a>


						<a href="#" style="margin-top: 10px;" onclick="show()"><i class="fab fa-product-hunt"
								style="margin-right: 13px;"></i> Products <i class="fas fa-angle-right"
								id="drop1"></i></a>
						<div id="submenu">
							<a href="/E-Commerce/admin/Index/Add_Product.php"><i class="fas fa-plus"></i> Add</a>
							<a href="/E-Commerce/admin/Index/view.php"><i class="fas fa-eye"></i> View</a>
						</div>

						<a href="#" onclick="show1()"><i class="fas fa-shopping-cart" style="margin-right: 12px;"></i>
							Orders <i class="fas fa-angle-right" id="drop2"></i></a>

						<div id="submenu2">
							
							<a href="/E-Commerce/admin/Index/orderview.php"><i class="fas fa-eye"></i> View</a>
						</div>

						<a href="#" onclick="show3()"><i class="fas fa-user-friends" style="margin-right: 11px;"></i>
							Customers <i class="fas fa-angle-right" id="drop3"></i></a>

						<div id="submenu3">
							<a href="/E-Commerce/admin/Index/customerview.php"><i class="fas fa-eye"></i> View</a>
						</div>

						<a href="#"><i class="fas fa-sticky-note" style="margin-right: 16px;"></i> Transactions</a>
						<a href="#"><i class="far fa-star" style="margin-right: 14px;"></i> Reviews</a>

					</nav>
				</div>

			</div>