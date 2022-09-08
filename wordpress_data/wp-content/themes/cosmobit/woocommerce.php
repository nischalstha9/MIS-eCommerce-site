<?php
get_header();
$cosmobit_shop_pg_sidebar_option = get_theme_mod('cosmobit_shop_pg_sidebar_option', 'right_sidebar'); 
?>
<section class="woo-products dt-py-default">
	<div class="dt-container">
		<div class="dt-row dt-g-5">
			<?php if($cosmobit_shop_pg_sidebar_option == 'left_sidebar'): get_sidebar('woocommerce'); endif; ?>
			<?php if($cosmobit_shop_pg_sidebar_option == 'no_sidebar'): ?>
				<div class="dt-col-lg-12 dt-col-md-12 dt-col-12 wow fadeIn">
			<?php else: ?>	
				<div class="dt-col-lg-8 dt-col-md-12 dt-col-12 wow fadeIn">
			<?php endif; ?>	
				<?php woocommerce_content();  // WooCommerce Content ?>
			</div>
			<?php if($cosmobit_shop_pg_sidebar_option == 'right_sidebar'): get_sidebar('woocommerce'); endif; ?>
		</div>
	</div>
</section>
<?php get_footer(); ?>

