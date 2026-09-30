<?php
namespace App\Controladores;


abstract class Equipo
{
    public function __construct(
        public readonly string $codigo,
        public readonly string $nombre
    ){
    }

    abstract public function diasMaximoPrestamo(): int;
}

?>