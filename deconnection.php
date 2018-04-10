<?php
/**
 * Created by PhpStorm.
 * User: wilder4
 * Date: 10/04/18
 * Time: 12:53
 */

session_start();
session_destroy();

if(isset($_COOKIE['carts'])){
    foreach ($_COOKIE['carts'] as $cart => $value) {
        setcookie('carts['.$cart.']', null, time() - 3600);
    }
}
if(isset($_COOKIE['nbCarts'])) {
    setcookie('nbCarts', null, time() - 3600);
}
header('Location: login.php');
exit();