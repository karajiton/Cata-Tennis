<?php 
require_once("Juegos.php");

class Jugador {
    private string $nombre;
    private $juegos;

    public function __construct(string $nombre, Juegos $juegos) {
        $this->nombre = $nombre;
        $this->juegos = $juegos;
    }
    public function juegosTotales(){
        return $this->juegos->totalJuegos();
    }
    public function getNombre(){
        return $this->nombre;
    }
    public function getJuegosArray(): array{
        return $this->juegos->getJuegoArray();
    }
    public function getJuegos(){
        return $this->juegos;
    }
    
    public function __toString(){
        return 'Nombre:' . $this->nombre .', Juegos:' . $this->juegos;
    }
}