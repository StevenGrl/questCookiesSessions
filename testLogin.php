<?php
/**
 * Created by PhpStorm.
 * User: wilder4
 * Date: 10/04/18
 * Time: 12:30
 */
session_start();

if (!empty($_POST['loginname'])) {
    $_SESSION['log'] = $_POST['loginname'];
    header('Location:index.php');
}