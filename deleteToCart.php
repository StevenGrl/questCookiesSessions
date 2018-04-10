<?php
/**
 * Created by PhpStorm.
 * User: wilder4
 * Date: 10/04/18
 * Time: 15:14
 */

if ($_COOKIE['carts'][$_GET['delete_to_cart']] - 1 > 0) {
    $nbCookie = $_COOKIE['carts'][$_GET['delete_to_cart']];
    $nbCookie -= 1;
    $_COOKIE['carts'][$_GET['delete_to_cart']] = $nbCookie;
} else {
    unset($_COOKIE['carts'][$_GET['delete_to_cart']]);
}

setcookie('carts[' . $_GET['delete_to_cart'] . ']', $_COOKIE['carts'][$_GET['delete_to_cart']], time() + 365*24*3600);

header('Location: countCookies.php');
exit();