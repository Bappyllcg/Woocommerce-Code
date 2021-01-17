<?php 

// Form Checkout
add_filter( 'woocommerce_checkout_fields' , 'quadlayers_checkout_fields' );
function quadlayers_checkout_fields( $fields ) { 
    // Billing 
     $fields['billing']['billing_first_name']['placeholder'] = 'First Name*';      
     $fields['billing']['billing_last_name']['placeholder'] = 'Last Name*';      
     $fields['billing']['billing_company']['placeholder'] = 'Company';      
     $fields['billing']['billing_address_1']['placeholder'] = 'Address*';      
     $fields['billing']['billing_address_2']['placeholder'] = 'Apt/Suite';      
     $fields['billing']['billing_country']['placeholder'] = 'Country / Region*';      
     $fields['billing']['billing_city']['placeholder'] = 'Town / City*';      
     $fields['billing']['billing_state']['placeholder'] = 'State*';      
     $fields['billing']['billing_phone']['placeholder'] = 'Phone*';      
     $fields['billing']['billing_email']['placeholder'] = 'Email*';      
     $fields['billing']['billing_postcode']['placeholder'] = 'ZIP';  
     // Shiping
     $fields['shipping']['shipping_first_name']['placeholder'] = 'First Name*';      
     $fields['shipping']['shipping_last_name']['placeholder'] = 'Last Name*';      
     $fields['shipping']['shipping_company']['placeholder'] = 'Company';   
     $fields['shipping']['shipping_address_1']['placeholder'] = 'Address*';      
     $fields['shipping']['shipping_address_2']['placeholder'] = 'Apt/Suite';    
     $fields['shipping']['shipping_country']['placeholder'] = 'Country / Region*';      
     $fields['shipping']['shipping_city']['placeholder'] = 'Town / City*';      
     $fields['shipping']['shipping_state']['placeholder'] = 'State*';      
     $fields['shipping']['shipping_phone']['placeholder'] = 'Phone*';      
     $fields['shipping']['shipping_email']['placeholder'] = 'Email*';      
     $fields['shipping']['shipping_postcode']['placeholder'] = 'ZIP';  


     return $fields; 

}


?>
