<?php
require_once('Jugador.php');

class Partido{
    private array $partido;

public function __construct() {
    $this->partido = [];
}
public function agregarJugador(Jugador $jugador): void {
    $this->partido [] = $jugador;
}
public function verGanador(): void{
    $jugador1 = $this->partido[0];
    $jugador2 = $this->partido[1];
    $setsJugador1 = $jugador1->getJuegosArray();
    $setsJugador2 = $jugador2->getJuegosArray();
    $ganador1 = 0;
    $ganador2 = 0;
    for ($i = 0; $i < count($setsJugador1); $i++) {
        
        $puntosJugador1 = $setsJugador1[$i];
        $puntosJugador2 = $setsJugador2[$i];
        if($puntosJugador1 > $puntosJugador2){
            $ganador1++;
        }else{
            $ganador2++;
        } 
    }
    if($ganador1 == 3){
    echo "el ganador del partido es:" . $jugador1->getNombre() . PHP_EOL;
    }else{
    echo "el ganador del partido es:" . $jugador2->getNombre() . PHP_EOL;
    } 
}
public function setConMayorDiferencia(): void {
    $mayorDiferencia = 0;
    $setGanador = null;

    $jugador1 = $this->partido[0];
    $jugador2 = $this->partido[1];
    $setsJugador1 = $jugador1->getJuegosArray();
    $setsJugador2 = $jugador2->getJuegosArray();

    for ($i = 0; $i < count($setsJugador1); $i++) {
        
        $puntosJugador1 = $setsJugador1[$i];
        $puntosJugador2 = $setsJugador2[$i];

        $diferencia = abs($puntosJugador1 - $puntosJugador2);
        
        if ($diferencia > $mayorDiferencia) {
            $mayorDiferencia = $diferencia;
            $setGanador = $i + 1; 
        }
    }
    if ($setGanador !== null) {
        echo "El set con mayor diferencia de puntos fue el set " . $setGanador . " con una diferencia de " . $mayorDiferencia . " puntos" . PHP_EOL;
    } else {
        echo "No se encontraron sets con diferencia significativa.". PHP_EOL;
    }
}

public function __toString(): string{
    $resultado = "Partido :". PHP_EOL; 
    foreach($this->partido as $jugador){
        $resultado .= $jugador . PHP_EOL;
    }
    return $resultado;
}
}