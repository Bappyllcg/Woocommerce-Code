add_filter( 'woocommerce_my_account_my_orders_query', 'sa_custom_my_account_orders', 10, 1 );
function sa_custom_my_account_orders( $args ) {

    $args['posts_per_page'] = -1;
    return $args;
}
