<?php

namespace Class;

class Hotel extends Cliente
{
    private int $habitaciones;
    private array $servicios;
    private int $habitacionesDisponibles;
    private float $precio;

    // Constructor de Hotel
    public function __construct(string $uuid){
        parent::__construct($uuid);
        $this->servicios = array();  // Corregido: 'servicio' a 'servicios'
    }

    // Métodos getters y setters

    public function getHabitaciones(): int
    {
        return $this->habitaciones;
    }

    public function setHabitaciones(int $habitaciones): Hotel
    {
        $this->habitaciones = $habitaciones;
        return $this;
    }

    public function getServicios(): array
    {
        return $this->servicios;
    }

    public function setServicios(array $servicios): Hotel
    {
        $this->servicios = $servicios;
        return $this;
    }

    public function getHabitacionesDisponibles(): int
    {
        return $this->habitacionesDisponibles;
    }

    public function setHabitacionesDisponibles(int $habitacionesDisponibles): Hotel
    {
        $this->habitacionesDisponibles = $habitacionesDisponibles;
        return $this;
    }

    public function getPrecio(): float
    {
        return $this->precio;
    }

    public function setPrecio(float $precio): Hotel
    {
        $this->precio = $precio;
        return $this;
    }

    // Método para comprobar la disponibilidad de habitaciones
    public function comprobarDisponibilidad(): bool
    {
        return $this->habitacionesDisponibles > 0;
    }

    // Método para añadir un servicio al array de servicios
    public function añadirServicio(string $servicio): Hotel
    {
        $this->servicios[] = $servicio;
        return $this;
    }

    // Método para mostrar la lista de servicios
    public function mostrarServicios(): void
    {
        echo "Servicios disponibles: " . implode(", ", $this->servicios) . PHP_EOL;
    }
}
