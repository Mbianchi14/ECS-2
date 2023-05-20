<?php

require_once 'modelo/usuario.php';

$u = new Usuario();
$u->Id = '1';
$u->NombreUsuario = 'Mbianchi1';
$u->Clave = 'asd123';
$u->Email = 'noposee@gmail.com';
$u->Nombre = 'Mauricio';
$u->Apellido = 'Bianchi';
$u->FechaNacimiento = '14/10/1995';
$u->NroDocumento = 37825634;
$u->FechaAlta = '19/05/2023';
$u->MostrarDatos();