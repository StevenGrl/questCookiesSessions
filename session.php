<?php
/**
 * Created by PhpStorm.
 * User: wilder4
 * Date: 10/04/18
 * Time: 12:28
 */

session_start();
if (empty($_SESSION['log'])) {
    header('Location:login.php');
}