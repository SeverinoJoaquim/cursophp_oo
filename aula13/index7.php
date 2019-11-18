<?php
// Namespaces
require 'classes/produto.php';
require 'models/produto.php';

use classes\produto as productClass;
use models\produto as productModel;

$produto = new productClass();
$produto->mostrarDetalhes();

echo "<br>";

$produto2 = new productModel();
$produto2->mostrarDetalhes();
