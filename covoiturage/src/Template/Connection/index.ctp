<?php

//require_once('../../wp-config.php');
require_once '../../wp-config.php';

if ( is_user_logged_in() ) {
    $current_user = wp_get_current_user();
    echo 'hello' . $current_user->ID;
    var_dump($current_user);
}else{
//    include('../wp-login.php');
//    include('C:\wamp\www\gaillarde_wp\wp-login.php');
}