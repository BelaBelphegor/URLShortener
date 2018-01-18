<header class="masthead text-white text-center" style="background:url(https://c.pxhere.com/photos/dc/15/office_desk_business_working_mobile_phone_macbook_computer-860251.jpg!d) no-repeat center center fixed; background-size: cover;">
	<div class="container">
		<div class="row mt-5">
			<div class="col-xs-12 col-md-12 mx-auto mt-5">
				<h1 class="text-uppercase mt-5 page-title">Monitor every click, tap and use.</h1>
				<p class="font-weight-light mb-0 mt-2 header-description">Brand, track and optimize every touchpoint with Bitly, the world's leading link management platform. <a href="#">Learn more.</a>
				</p>
			</div>
		</div>
	</div>
	<div class="container">
		<div class="header-content-wrapper">
			<div class="row mt-4">
				<div class="col-xs-12 col-md-12 mx-auto">
					<form class="mt-3" class=form" action="" method="POST">
						<div class="form-group">
							<div class="input-group mb-0">
								<input type="text" name="url" class="form-control border" placeholder="Paste a link to shorten it !"></input>
								<div class="input-group-btn">

									<button type="submit" class="btn btn-primary btn-block">Shorten !</button>
								</div>
							</div>
						</div>
					</form>
				</div>
			</div>
			<?php if (isset($shortened)) : ?>
			<div class="bg-white rounded border border-dark p-4 mt-2 mb-4">
				<div class="row">
						<div class="col-xs-12 col-md-12 mx-auto text-left">
							<a class="article-title" href="<?php echo (isset($origin_url)) ? h($origin_url) : ""; ?>">
								<?php echo (isset($origin_url)) ? h($origin_url) : ""; ?>
							</a>	
						</div>
					</div>
				<div class="row mt-3 pb-3">
					<div class="col-xs-12 col-md-8 mx-auto text-left text-warning">
						<a class="short-url" href="<?php echo (isset($shortened)) ? h($shortened) : ""; ?>"><?php echo (isset($shortened)) ? h($shortened) : ""; ?></a>
						<button class="btn btn-outline-warning btn-sm" type="button">Copy</button>
					</div>
					<div class="col-xs-12 col-md-4 my-auto mx-auto text-right text-muted">
						<span class="info-page">Hits: 0</a>
					</div>
				</div>
			</div>
			<?php endif; ?>
		</div>
	</div>
</header>
