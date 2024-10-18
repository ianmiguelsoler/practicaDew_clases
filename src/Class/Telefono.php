<?php

namespace Class;

class Telefono
{

    private string $prefijo;
    private string $numero;

    /**
     * @param string $prefijo
     * @param string $numero
     */
    public function __construct(string $prefijo, string $numero)
    {
        $this->prefijo = $prefijo;
        $this->numero = $numero;
    }

    public function getPrefijo(): string
    {
        return $this->prefijo;
    }

    public function setPrefijo(string $prefijo): Telefono
    {
        $this->prefijo = $prefijo;
        return $this; // Devuelve la instancia para encadenamiento de métodos
    }

    public function getNumero(): string
    {
        return $this->numero;
    }

    public function setNumero(string $numero): Telefono
    {
        $this->numero = $numero;
        return $this; // Devuelve la instancia para encadenamiento de métodos
    }

    /**
     * Devuelve el teléfono formateado con el prefijo y el número.
     * Ejemplo de salida: +34 123456789
     *
     * @return string
     */
    public function getTelefonoFormateado(): string
    {
        return $this->prefijo . ' ' . $this->numero;
    }

}
