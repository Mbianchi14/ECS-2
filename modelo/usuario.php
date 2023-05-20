<?php

class Usuario 
{
    public $Id;
    public $NombreUsuario;
    public $Clave;
    public $Email;
    public $Nombre;
    public $Apellido;
    public $FechaNacimiento;
    public $NroDocumento;
    public $FechaAlta;
    

    public function MostrarDatos () 
    {
        echo 'Id: ' . $this->Id . '<br>';
        echo 'NombreUsuario: ' . $this->NombreUsuario . '<br>';
        echo 'Clave: ' . $this->Clave . '<br>';
        echo 'Email: ' . $this->Email . '<br>';
        echo 'Nombre: ' . $this->Nombre . '<br>';
        echo 'Apellido: ' . $this->Apellido . '<br>';
        echo 'FechaNacimiento: ' . $this->FechaNacimiento . '<br>';
        echo 'NroDocumento: ' . $this->NroDocumento . '<br>';
        echo 'FechaAlta: ' . $this->FechaAlta . '<br>';
    }
}