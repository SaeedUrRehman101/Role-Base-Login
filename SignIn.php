<?php
include("components/header.php");
?>

	<!-- Title page -->
	<section class="bg-img1 txt-center p-lr-15 p-tb-92" style="background-image: url('images/blog-03.jpg');">
		<h2 class="ltext-105 cl0 txt-center">
			Sign In
		</h2>
	</section>	


	<!-- Content page -->
	<section class="bg0 p-t-104 p-b-116">
		<div class="container">
			<div class="register">
				<div class="form-div bor10 p-lr-70 p-t-55 p-b-70 p-lr-15-lg w-full-md">
					<form method="post">
						<h4 class="mtext-105 cl2 txt-center p-b-30">
							Sign In to Your Account
						</h4>

                        <div class="bor8 m-b-20 how-pos4-parent">
							<input class="stext-111 cl2 plh3 size-116 p-l-62 p-r-30" type="email" id="email" name="email" placeholder="Your Email Address">
							<img class="how-pos4 pointer-none" src="images/icons/email.png" alt="ICON">
						</div>
						<small style='color : red; font-weight: 600; letter-spacing: .1vw' class="email_error stext-111 cl2 plh3 size-116 p-l-62 p-r-30"><?php echo $email_vali ?></small>
						<?php
							echo $currentUser ? "<div id='fileHelpId' class='stext-111 cl2 plh3 size-116 p-l-62 p-r-30' style='color: red; font-weight: 600; letter-spacing: .1vw'>{$error_email}</div>" : " ";
						?>

                        <div class="bor8 m-b-20 how-pos4-parent">
							<input class="stext-111 cl2 plh3 size-116 p-l-62 p-r-30" type="password" id="password" name="password" placeholder="Your Password">
							<img class="how-pos4 pointer-none" src="images/icons/password.png" alt="ICON">
						</div>
						<small style='color : red; font-weight: 600; letter-spacing: .1vw' class="phone_error stext-111 cl2 plh3 size-116 p-l-62 p-r-30"><?php echo $password_vali ?></small>

						<button type="submit" name="signIn" class="flex-c-m stext-101 cl0 size-121 bg3 bor1 hov-btn3 p-lr-15 trans-04 pointer">
							Sign In
						</button>
					</form>
				</div>
			</div>
		</div>
	</section>	


<?php
include("components/footer.php");
?>