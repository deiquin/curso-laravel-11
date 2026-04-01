<?php

//namespace App;

//enum EstadoTrabajador;
// app/Enums/EstadoTrabajador.php
namespace App\Enums;

enum EstadoTrabajador: string{
    case ACTIVO = 'ACT';
    case INACTIVO = 'INA';
    case SUSPENDIDO = 'SUS';
    case CESADO = 'CES';

    // 🔥 lógica de negocio centralizada
    // public function puedeEditar(): bool
    // {
    //     return match($this) {
    //         self::ACTIVO, self::INACTIVO => true,
    //         self::SUSPENDIDO, self::CESADO => false,
    //     };
    // }

    // public function label(): string
    // {
    //     return match($this) {
    //         self::ACTIVO => 'Activo',
    //         self::INACTIVO => 'Inactivo',
    //         self::SUSPENDIDO => 'Suspendido',
    //         self::CESADO => 'Cesado',
    //     };
    // }
}