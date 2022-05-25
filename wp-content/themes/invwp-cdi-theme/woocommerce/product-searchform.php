<?php
/**
 * The template for displaying product search form
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/product-searchform.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see     https://docs.woocommerce.com/document/template-structure/
 * @package WooCommerce\Templates
 * @version 3.3.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

?>
<form role="search" method="get" class="woocommerce-product-search" action="<?php echo esc_url( home_url( '/' ) ); ?>">
	<label class="screen-reader-text" for="woocommerce-product-search-field-<?php echo isset( $index ) ? absint( $index ) : 0; ?>"><?php esc_html_e( 'Search for:', 'woocommerce' ); ?></label>
	<input type="search" id="woocommerce-product-search-field-<?php echo isset( $index ) ? absint( $index ) : 0; ?>" class="search-field" placeholder="<?php echo esc_attr__( 'Search products&hellip;', 'woocommerce' ); ?>" value="<?php echo get_search_query(); ?>" name="s" />
	<?php
	$args = array(
   'taxonomy' => 'product_cat',
   'name' => 'product_cat',
   'value_field' => 'slug',
   'class' => 'something',
	 'show_option_all'=> 'All Categories'
	);
	wp_dropdown_categories( $args );
	/*
 	?>
	<select class="product_cat" name="product_cat">
		<option value="">All Categories</option>
		<?php
		$cats = invwp_get_product_categories ();
		if (! empty ($cats)) {
			foreach ($cats as $id => $cat) {
				?>
				<option value="<?php echo $id; ?>" class="cat"><?php echo $cat['name']; ?></option>
				<?php
				if (! empty ($cat['sub_cats'])) {
					foreach ($cat['sub_cats'] as $sub_cat) {
						?>
						<option value="<?php echo $sub_cat['id']; ?>" class="sub-cat"><?php echo $sub_cat['name']; ?></option>
						<?php
					}
				}
				?>
				<?php
			}
		}
		?>
	</select>
	<?php */ ?>
	<button type="submit" value="<?php echo esc_attr_x( 'Search', 'submit button', 'woocommerce' ); ?>"><?php echo esc_html_x( 'Search', 'submit button', 'woocommerce' ); ?></button>
	<input type="hidden" name="post_type" value="product" />
</form>
