<?php
namespace Prestamos\Enums;


use Prestamos\Models\Laptop;
use Prestamos\Models\Proyector;

enum TipoEquipo: string
{
    case Laptop = "laptop";
    case Proyector = "proyector";

    public function crearEquipo(string $codigo, string $nombre): Equipo
    {
        return match($this) {
            self::Laptop => new Laptop($codigo, $nombre),
            self::Proyector => new Proyector($codigo, $nombre)
        };
    }
}



?>