<form role="search" method="get" id="searchform" action="<?php echo home_url('/'); ?>">
	<div class="row collapse postfix-radius">
		<div class="large-10 small-9 columns">
			<input type="text" value="" name="s" id="s" placeholder="<?php esc_attr_e('Search', 'reverie'); ?>">
		</div>
		<div class="large-2 small-3 columns">
			<input type="submit" id="searchsubmit" value="Go" class="button postfix">
		</div>
	</div>
</form>