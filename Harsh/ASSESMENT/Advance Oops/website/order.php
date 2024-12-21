<?php include_once('header.php'); ?>
<hr>

<div class="row">
	<div class="card mt-4 col-md-4">
		<div class="card-title">
			<h1 class="m-3 text-center border-bottom">Profile</h1>
			<div class="card-body border">
				<h3 class="m-3">Name: <?php echo $res->name; ?></h3>
				<h3 class="m-3">Email: <?php echo $res->email; ?></h3>
				<h3 class="m-3">Contact: <?php echo $res->contact; ?></h3>
				<h3 class="m-3">Gender: <?php echo $res->gender; ?></h3>
			</div>
		</div>
	</div>
	<div class="col-md-7 m-4  ">
		<h1 class="text-center border-bottom">Your Orders</h1>
		<div class="row g-4">
			<?php foreach ($order as $od) { ?>
				<div class="card col-md-5 m-4">
					<img src="images/<?php echo $od->image?>" alt="" class="">
					<div class="card-title">
						<h2 class="m-3"><?php echo $od->Name?><span class="float-right text-secondary p-2" style="border:2px solid black"><?php echo $od->o_date?></span></h2>
					</div>
					<div class="card-body mt-3">
						<h3>Product Type:	<?php echo $od->Types?></h3>
						<h3>Product Price:	<?php echo $od->Price?></h3>
						<h3>Order Address:	<?php echo $od->address?></h3>
						<h3>Order qty:	<?php echo $od->qty?></h3>
						<h3 class="text-secondary">Price You Have to Pay:	<?php echo $od->qty * $od->Price?></h3>
					</div>
				</div>
			<?php } ?>
		</div>
	</div>
</div>



</body>

</html>
<?php include_once('footer.php') ?>