<?php
/**
 * Created by PhpStorm.
 * User: wilder4
 * Date: 10/04/18
 * Time: 13:12
 */

if (isset($_COOKIE['carts'][$_GET['add_to_cart']])) {
    $countCart = $_COOKIE['carts'][$_GET['add_to_cart']] + 1;
} else {
    $countCart = 1;
}

setcookie('carts[' . $_GET['add_to_cart'] . ']', $countCart, time() + 365*24*3600);


header('Location: countCookies.php');
exit();