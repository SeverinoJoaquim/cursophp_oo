<?php
// Namespaces
require 'classes/produto.php';
require 'models/produto.php';

use classes\produto as productModel;

$produto = new productModel();
$produto->mostrarDetalhes();