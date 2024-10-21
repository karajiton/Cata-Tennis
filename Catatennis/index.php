<?php
require_once('Jugador.php');
require_once('Partido.php');
$juego1 = new Juegos(2,4,3,0,0);
$juego2 = new Juegos(6,6,6,0,0);
$jugador1 = new Jugador('jona',$juego1);
$jugador2 = new Jugador('mei',$juego2);

$partido = new Partido();

$partido->agregarJugador($jugador1);
$partido->agregarJugador($jugador2);


echo $partido;
$partido->verGanador();
$partido->setConMayorDiferencia();
