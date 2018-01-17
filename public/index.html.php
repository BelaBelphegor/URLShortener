<header class="masthead text-white text-center" style="background:url(http://www.jeremiecathala.com/img/portfolio/capHandi.jpg) no-repeat center center fixed; background-size: cover;">
	<div class="container">
		<h1 class="text-uppercase">Monitor every click, tap and use.</h1>
		<p class="font-weight-light mb-0">Brand, track and optimize every touchpoint with Bitly, the world's leading link management platform. <a href="#">Learn more.</a>
		</p>
		<form class=form" action="" method="POST">
			<div class="form-group">
				<div class="input-group mb-0">
					<input type="text" name="url" class="form-control" placeholder="Paste a link to shorten it !"></input>
					<div class="input-group-addon">
						<button type="submit" class="btn btn-primary btn">Shorten !</button>
					</div>
				</div>
			</div>
		</form>

	</div>
</header>

<section>
	<div class="row">
		<div class="col-md-12">
			<p class="text-center">
				<?php if (isset($error)) : ?>
				Error : <?php echo (isset($error)) ? h($error) : ""; ?><br />
				<?php endif; ?>
				Shortened link : <?php echo (isset($shortened)) ? h($shortened) : ""; ?><br/>
			</p>
		</div>
	</div>
	<hr>
	<div class="row">
		<div class="col-md-12">
			<h3 style="text-transform:uppercase;" class="text-center">Unleash the true power of the link !</h2>
			<p class="text-center">
				Links are everywhere. In each chain and platform. Only a dwarfen are powerful enough to allow you to cut down the internet channels.
			</p>
		</div>
	</div>
	<div class="row">
		<div class="col-md-12">
			<h3 style="text-transform:uppercase;" class="text-center">Personalized Urls</h3>
			<p class="text-center">When you sumbit url you can customize them with our tool that reduces URLs to a handful of characters!</p>
		</div>
	</div>
</section>
