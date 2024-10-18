<?php

namespace Class;
include_once "Usuario.php";
use DateTime;

abstract class Cliente
{
    private string $uuid;
    private Usuario $usuario; // Asegúrate de inicializarlo antes de usarlo
    private string $nombre;
    private string $direccion;
    public array $telefonos;
    private float $coste;
    protected bool $abierto;

    // Constructor para inicializar la clase Cliente
    public function __construct(string $uuid)
    {
        $this->uuid = $uuid;
        $this->telefonos = array();
        $this->abierto = false; // Por defecto, no abierto
    }

    // Métodos getters y setters para cada propiedad

    public function getUuid(): string
    {
        return $this->uuid; // Corregido: 'Uuid' a 'uuid'
    }

    public function setUuid(string $uuid): Cliente
    {
        $this->uuid = $uuid;
        return $this;
    }

    public function getUsuario(): Usuario
    {
        return $this->usuario;
    }

    public function setUsuario(Usuario $usuario): Cliente
    {
        $this->usuario = $usuario;
        return $this;
    }

    public function getNombre(): string
    {
        return $this->nombre;
    }

    public function setNombre(string $nombre): Cliente
    {
        $this->nombre = $nombre;
        return $this;
    }

    public function getDireccion(): string
    {
        return $this->direccion;
    }

    public function setDireccion(string $direccion): Cliente
    {
        $this->direccion = $direccion;
        return $this;
    }

    public function getTelefonos(): array
    {
        return $this->telefonos;
    }

    public function setTelefonos(array $telefonos): Cliente
    {
        $this->telefonos = $telefonos;
        return $this;
    }

    public function getCoste(): float
    {
        return $this->coste;
    }

    public function setCoste(float $coste): Cliente
    {
        $this->coste = $coste;
        return $this;
    }

    public function isAbierto(): bool
    {
        return $this->abierto;
    }

    public function setAbierto(bool $abierto): Cliente
    {
        $this->abierto = $abierto;
        return $this;
    }

    // Método para comprobar la disponibilidad
    public function comprobarDisponibilidad(): bool
    {
        // Aquí deberías devolver true o false en lugar de solo mostrar un mensaje
        return $this->abierto;
    }
}
