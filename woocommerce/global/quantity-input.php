<?php
/**
 *******************************************************************************
 * //woocommerce/global/quantity-input.php
 *******************************************************************************
 *
 * Product quantity inputs
 *
 * @author
 * @copyright
 * @link
 * @todo
 * @license
 * @since
 * @version
**/

if ( ! defined( 'ABSPATH' ) ) 
{
    exit; // Exit if accessed directly
}

?>

<div class="quantity form-group">
    <input type="number" step="<?php echo esc_attr( $step ); ?>" min="<?php echo esc_attr( $min_value ); ?>" max="<?php echo esc_attr( $max_value ); ?>" name="<?php echo esc_attr( $input_name ); ?>" value="<?php echo esc_attr( $input_value ); ?>" title="<?php echo esc_attr_x( 'Qty', 'Product quantity input tooltip', 'woocommerce' ) ?>" class="form-control input-text qty text" size="4" />
</div>
