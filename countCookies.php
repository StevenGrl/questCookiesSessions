<?php
/**
 * Created by PhpStorm.
 * User: wilder4
 * Date: 10/04/18
 * Time: 14:55
 */

session_start();

$count = 0;
if (isset($_COOKIE['carts'])) {
    foreach ($_COOKIE['carts'] as $cart => $value) {
        $count += $value;
        echo 'value = ' . $value . '<br/>';
    }
}
echo 'count : ' . $count;

setcookie("nbCarts", $count, time() + 365*24*3600);
var_dump($_COOKIE);

if ($_SESSION['page'] == 'index') {
    header('Location: index.php');
    exit();
} else {
    header('Location: cart.php');
    exit();
}

