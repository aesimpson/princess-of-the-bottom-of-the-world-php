<?php include('../includes/header.php') ?>
<main class="container-fluid page series">
	<div class="main-content row justify-content-end">
		<div class="content-column">
			<h2 class="mt-5 mx-5 mb-4 text-center">
				<img src="<?php echo $base_url.'images/title_black.png'; ?>" width="180px">
				<span class="text-uppercase">Contact</span>
			</h2>
			<div class="container-fluid">
				<div class="row justify-content-center">
					<div class="col-sm-12 col-md-10 col-xl-8 p-5 white-bkgr">
						<form name="contactform" method="POST" action="">
							<div class="form-group">
						  		<label for="first_name">Name *</label>
						  		<input class="form-control" type="text" name="name">
						  	</div>
						  	<div class="form-group">
						  		<label for="email">Email *</label>
						  		<input class="form-control" type="text" name="email">
						  	</div>
						  	<div class="form-group">
						  		<label for="comments">Message *</label>
						  		<textarea rows="3" name="message"></textarea>
						  	</div>
							<!-- field for the honeypot -->
							<input name="company" type="text" id="company" class="hide-robot">
						  <input type="submit" value="Submit"> 
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
</main>
<?php include('../includes/footer.php') ?>