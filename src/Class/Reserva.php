<?php

namespace Class;

use DateTime;

class Reserva
{
    private string $id; // UUID de la reserva
    private Usuario $usuario; // Relación con la clase Usuario
    private DateTime $fecha; // Fecha de la reserva
    private int $unidades; // Cantidad de unidades reservadas
    private float $coste; // Coste total de la reserva
    private Cliente $cliente; // Relación con la clase Cliente
    private string $metodoPago; // Método de pago (podría ser un Enum)
    private int $numCambios; // Número de cambios realizados en la reserva

    // Constructor de la clase Reserva
    public function __construct()
    {
        $this->fecha = new DateTime();
        $this->numCambios = 0; // Inicializamos a 0 los cambios
    }

    // Métodos getters y setters

    public function getId(): string
    {
        return $this->id;
    }

    public function setId(string $id): Reserva
    {
        $this->id = $id;
        return $this;
    }

    public function getUsuario(): Usuario
    {
        return $this->usuario;
    }

    public function setUsuario(Usuario $usuario): Reserva
    {
        $this->usuario = $usuario;
        return $this;
    }

    public function getFecha(): DateTime
    {
        return $this->fecha;
    }

    public function setFecha(DateTime $fecha): Reserva
    {
        $this->fecha = $fecha;
        return $this;
    }

    public function getUnidades(): int
    {
        return $this->unidades;
    }

    public function setUnidades(int $unidades): Reserva
    {
        $this->unidades = $unidades;
        return $this;
    }

    public function getCoste(): float
    {
        return $this->coste;
    }

    public function setCoste(float $coste): Reserva
    {
        $this->coste = $coste;
        return $this;
    }

    public function getCliente(): Cliente
    {
        return $this->cliente;
    }

    public function setCliente(Cliente $cliente): Reserva
    {
        $this->cliente = $cliente;
        return $this;
    }

    public function getMetodoPago(): string
    {
        return $this->metodoPago;
    }

    public function setMetodoPago(string $metodoPago): Reserva
    {
        $this->metodoPago = $metodoPago;
        return $this;
    }

    public function getNumCambios(): int
    {
        return $this->numCambios;
    }

    public function setNumCambios(int $numCambios): Reserva
    {
        $this->numCambios = $numCambios;
        return $this;
    }

    // Método para modificar la reserva
    public function modificarReserva(int $nuevasUnidades, float $nuevoCoste): bool
    {
        // Simulamos que la reserva puede ser modificada un máximo de 3 veces
        if ($this->numCambios < 3) {
            $this->unidades = $nuevasUnidades;
            $this->coste = $nuevoCoste;
            $this->numCambios++; // Incrementamos el número de cambios
            return true; // Modificación exitosa
        }
        return false; // No se puede modificar más veces
    }
}