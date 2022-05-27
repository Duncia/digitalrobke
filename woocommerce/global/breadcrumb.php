<?php
/**
 * Shop breadcrumb
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/global/breadcrumb.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see         https://docs.woocommerce.com/document/template-structure/
 * @package     WooCommerce\Templates
 * @version     2.3.0
 * @see         woocommerce_breadcrumb()
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

if ( ! empty( $breadcrumb ) ) {

	//echo $wrap_before;
	echo '<div class="woo-custom-breadcrumbs">';

	foreach ( $breadcrumb as $key => $crumb ) {

		echo $before;

		if ( ! empty( $crumb[1] ) && sizeof( $breadcrumb ) !== $key + 1 ) {
			echo '<p><a href="' . esc_url( $crumb[1] ) . '">' . esc_html( $crumb[0] ) . '</a></p>';
		} else {
			echo '<p class="clr-purple">'. esc_html( $crumb[0] ) .'</p>';
		}

		echo $after;

		if ( sizeof( $breadcrumb ) !== $key + 1 ) {
			echo '<p>&nbsp;/&nbsp;</p>';
		}
	}

	//echo $wrap_after;
	echo '</div>';

}