<?php
/**
 * Created by PhpStorm.
 * User: wilder4
 * Date: 10/04/18
 * Time: 13:12
 */
$count = count($_COOKIE['carts']);

setcookie("carts[$count]", $_GET['add_to_cart'], time() + 365*24*3600);
setcookie("nbCarts", $count, time() + 365*24*3600);

header('Location: index.php');