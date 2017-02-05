<?php require('partials/header.php'); ?>
<div class="container-fluid">
	<div class="row">
		<div class="main">
			<h1 class="page-header">Pizza Dashboard</h1>
			<div class="row placeholders">
				<div class="col-xs-6 col-sm-3 placeholder">
					<a href="pizza.php">
						<img src="images/pizza.jpg" width="200" height="200" class="img-responsive" alt="Generic placeholder thumbnail">
						<h4>Pizzas</h4>
						<span class="text-muted">View/Create/Edit</span>
					</a>
				</div>
				<div class="col-xs-6 col-sm-3 placeholder">
					<a href="topping.php">
						<img src="images/pepperoni.jpg" width="200" height="200" class="img-responsive" alt="Generic placeholder thumbnail">
						<h4>Toppings</h4>
						<span class="text-muted">View/Create</span>
					</a>
				</div>
			</div>
		</div>
	</div>
</div>
<?php require('partials/footer.php'); ?>