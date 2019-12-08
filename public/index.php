<?php
use app\services\Autoload;
use app\services\DB;
use app\modules\Good;
use app\modules\User;
use app\modules\Basket;

include $_SERVER['DOCUMENT_ROOT'] . "/../services/Autoload.php";

spl_autoload_register([new Autoload(), 'loadClass']);

$db = new DB();
$db->getConnection();

$good = new Good($db);
var_dump($good->getOne(12));

$user = new User($db);
var_dump($user->getAll());

$basket = new Basket($db);
var_dump($basket->getOne(15));