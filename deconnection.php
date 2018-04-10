<?php
/**
 * Created by PhpStorm.
 * User: wilder4
 * Date: 10/04/18
 * Time: 12:53
 */

session_start();
session_destroy();
header('Location: login.php');