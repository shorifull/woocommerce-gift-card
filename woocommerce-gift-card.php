<?php 

/**
 * Plugin Name: Woocommerce Gift Card 
 * Description: It is a plugin that can customize the woocommerce and  it enables you to send gift card to to your near one.
 * Plugin URI: http://www.apesteam.com/
 * Author: Ratan Mia
 * Author URI: http://www.apesteam.com/users/ratan-mia
 * Version: 1.0.0
 * License: GPL2
 * Text Domain: woocommerce
 * Domain Path: domain/path
 */

/*
    Copyright (C) 2017  Ratan  shorifull@gmail.com

    This program is free software; you can redistribute it and/or modify
    it under the terms of the GNU General Public License, version 2, as
    published by the Free Software Foundation.

    This program is distributed in the hope that it will be useful,
    but WITHOUT ANY WARRANTY; without even the implied warranty of
    MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
    GNU General Public License for more details.

    You should have received a copy of the GNU General Public License
    along with this program; if not, write to the Free Software
    Foundation, Inc., 51 Franklin St, Fifth Floor, Boston, MA  02110-1301  USA
*/

 

// Hook in
add_filter( 'woocommerce_billing_fields' , 'adding_gift_giver_info' );

// Our hooked in function - $address_fields is passed via the filter!
function adding_gift_giver_info( $address_fields ) {
	 $address_fields['billing_first_name']['label'] = "Gift Giver Name";
     $address_fields['billing_first_name']['class']=array('form-row-wide');
     unset($address_fields['billing_last_name']);
    

     return $address_fields;

}
?>