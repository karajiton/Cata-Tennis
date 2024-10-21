<?php
class Juegos{
private array $juegos;
private int $juego1;
private int $juego2;
private int $juego3;
private int $juego4;
private int $juego5;

public function __construct(int $juego1,int $juego2,int $juego3,int $juego4 = 0,int $juego5 = 0) {
    $this->juegos = [$juego1,$juego2,$juego3,$juego4,$juego5];

}
public function totalJuegos(){
    return array_sum($this->juegos);
}
public function getJuegoArray(): array{
    return $this->juegos;
}
public function getJuego(){
    return $this->juegos;
}
public function __toString()
{
    return  implode(",",$this->juegos);
}


}
