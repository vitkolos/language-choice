<?php
function _t($group, $key) {
    $strings = array(
        'form' => array(
            'sid' => 'spisové číslo',
            'email' => 'e-mail',
            'name' => 'celé jméno',
            'class' => 'třída',
            'choice' => 'volba jazyka'
        ),
        'confirm' => array(
            'delete-student' => 'smazat studenta'
        ),
        'success' => array(
            'login' => 'Výborně! Byli jste přihlášeni.',
            'done' => 'Hotovo.'
        )
    );

    return (isset($strings[$group]) && isset($strings[$group][$key])) ? $strings[$group][$key] : "$group.$key";
}
