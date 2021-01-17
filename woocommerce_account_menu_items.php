<?php

// My account navigation 
add_filter( 'woocommerce_account_menu_items', function($items) {
    //unset( $items['dashboard'] ); // Remove Dashboard
    //unset( $items['payment-methods'] ); // Remove Payment Methods
    //unset( $items['orders'] ); // Remove Orders
    unset( $items['downloads'] ); // Disable Downloads
    unset( $items['edit-account'] ); // Remove Account details tab
    unset( $items['customer-logout'] ); // Remove Logout link
    $items['orders'] = 'My Orders'; 
    $items['dashboard'] = 'My Information'; 

    return $items;
}, 99, 1 );

?>
