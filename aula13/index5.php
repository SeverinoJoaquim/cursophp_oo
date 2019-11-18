<?php
// Namespaces
require 'classes/produto.php';
require 'models/produto.php';

use classes\produto as productClass;

$produto = new productClass();
$produto->mostrarDetalhes();