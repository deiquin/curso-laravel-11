<?php

namespace App\Enums;

enum EstadoProveedor : string
{
    case ACTIVO = 'ACT';
    case INACTIVO = 'INA';
    case SUSPENDIDO = 'SUS';
}
