<?php
/**
 *******************************************************************************
 * //woocommerce/emails/email-customer-details.php
 *******************************************************************************
 *
 * Additional Customer Details
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
    exit;
}

?>

<h2><?php _e( 'Customer details', 'woocommerce' ); ?></h2>

<ul>
    <?php foreach ( $fields as $field ) : ?>
        <li><strong><?php echo wp_kses_post( $field['label'] ); ?>:</strong> <span class="text"><?php echo wp_kses_post( $field['value'] ); ?></span></li>
    <?php endforeach; ?>
</ul>
