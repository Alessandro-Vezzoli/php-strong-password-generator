<?php

function generatePassword($length) {
    $lettereMinuscole = 'abcdefghijklmnopqrstuvwxyz';
    $lettereMaiuscole = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $numeri = '0123456789';
    $simboli = '!@#$%^&*()-_+=<>?';

    $tuttiICaratteri = $lettereMinuscole . $lettereMaiuscole . $numeri . $simboli;

    $caratteriMescolati = str_shuffle($tuttiICaratteri);

    $passwordGenerata = substr($caratteriMescolati, 0, $length);

    return $passwordGenerata;
}

?>