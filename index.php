<?php
header('Content-Type: text/html; charset=utf-8');
require realpath(dirname(__FILE__)) . '/vendor/autoload.php';

$config = new \Doctrine\DBAL\Configuration();

$connectionParams = array(
    'dbname' => 'shop',
    'user' => 'alex',
    'password' => 'mutabor',
    'host' => 'localhost',
    'driver' => 'pdo_mysql',
);
$conn = \Doctrine\DBAL\DriverManager::getConnection($connectionParams);
$sql = "SELECT * FROM catalogs";
$stmt = $conn->query($sql);
while ($row = $stmt->fetch()) {
	echo $row['name'] . '<br/>';
}