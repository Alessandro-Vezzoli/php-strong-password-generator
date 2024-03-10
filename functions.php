<?php

function generatePassword($length) {
    // Definisci i set di caratteri per la password
    $lettereMinuscole = 'abcdefghijklmnopqrstuvwxyz';
    $lettereMaiuscole = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $numeri = '0123456789';
    $simboli = '!@#$%^&*()-_+=<>?';

    // Combina tutti i set di caratteri
    $tuttiICaratteri = $lettereMinuscole . $lettereMaiuscole . $numeri . $simboli;

    // Mescola i caratteri combinati
    $caratteriMescolati = str_shuffle($tuttiICaratteri);

    // Ottieni i primi $length caratteri come password
    $passwordGenerata = substr($caratteriMescolati, 0, $length);

    return $passwordGenerata;
}

?>