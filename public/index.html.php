<section>
	<div class="row">
		<div class="col-md-12">
			<p>
				<?php if (isset($error)) : ?>
				Error : <?php echo (isset($error)) ? h($error) : ""; ?><br />
				<?php endif; ?>
				Shortened link : <?php echo (isset($shortened)) ? h($shortened) : ""; ?><br/>
				<form action="" method="POST">
					<div class="form-group">
						<div class="col-md-5 col-md-offset-3">
							<input type="text" name="url" class="form-control" placeholder="Paste a link to shorten it !"></input>
						</div>
						<div class="col-md-4">
							<button type="submit" class="btn btn-primary btn">Shorten !</button>
						</div>
					</div>
				</form>
			</p>
		</div>
	</div>
</section>
