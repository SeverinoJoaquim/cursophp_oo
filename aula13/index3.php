<?php
// Namespaces
require 'classes/produto.php';
require 'models/produto.php';

use classes\produto;

$produto = new Produto();
$produto->mostrarDetalhes();