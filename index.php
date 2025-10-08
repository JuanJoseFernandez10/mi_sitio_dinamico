<?php
$titulo = "Mi primer sitio modular con PHP";
$contenido = "elementos/contenido.php";
$menu = [
  'inicio' => 'Inicio',
  'contenido' => 'Productos',
  'contactos' => 'Contactos'
];
$p = $_GET['p'] ?? 'inicio';
include "layout.php";
