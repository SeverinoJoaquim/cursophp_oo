<?php
// Namespaces
require 'classes/produto.php';
require 'models/produto.php';

use models\produto;

$produto = new Produto();
$produto->mostrarDetalhes();