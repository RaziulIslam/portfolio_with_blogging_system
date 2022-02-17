<?php include_once "site/header.php";?>

	<style type="text/css">
		.form-signin {
			max-width: 300px;
			padding: 19px 29px 29px;
			margin: 0 auto 20px;
			background-color: #fff;
			border: 1px solid #e5e5e5;
			-webkit-border-radius: 5px;
			-moz-border-radius: 5px;
			border-radius: 5px;
			-webkit-box-shadow: 0 1px 2px rgba(0,0,0,.05);
			-moz-box-shadow: 0 1px 2px rgba(0,0,0,.05);
			box-shadow: 0 1px 2px rgba(0,0,0,.05);
		}

		.form-signin .form-signin-heading,
		.form-signin .checkbox {
			margin-bottom: 10px;
		}
		
		.form-signin input[type="text"],
		.form-signin input[type="password"] {
			font-size: 16px;
			height: auto;
			margin-bottom: 15px;
			padding: 7px 9px;
		}

	</style>

	<!-- contact section start -->
	<div id="login-form" class="login-form pad-top140 parallax bg-img-2 alter-text">
		<div class="container">
			<!-- indicactor start -->
			<div class="row">
				<form class="form-signin" action="<?= $my_root;?>auth.php" method="post">
					<h2 class="form-signin-heading">Please sign in</h2>
					<div style="color:red; font-weight:900;">
						<?php echo (isset($_GET['err'])?'Login incorrect':'');?>
					</div>

					<input name="email" type="text" class="input-block-level" placeholder="Email address">
					<input name="password" type="password" class="input-block-level" placeholder="Password">
					
					<button class="btn btn-large btn-primary" type="submit">Sign in</button>
				</form>
			</div> 
		</div> 
	</div> 

<?php include_once "site/footer.php";?>