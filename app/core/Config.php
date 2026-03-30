<?php

// Déterminer le chemin de base du projet automatiquement
// Calcule le chemin depuis la racine web jusqu'au dossier racine du projet

if (!defined('BASE_URL')) {
    $script_path = dirname($_SERVER['SCRIPT_NAME']);
    
    // Trouver la position du dossier qui contient nos fichiers (Campus_helpdesk, projetTicketAWC, etc)
    // On cherche le dossier parent d'index.php
    $parts = explode('/', trim($script_path, '/'));
    
    // Enlever le dernier élément qui serait vide ou un sous-dossier
    if (end($parts) === '') {
        array_pop($parts);
    }
    
    // Reconstituer le chemin racine
    $base_path = '/' . implode('/', $parts);
    if ($base_path === '/') {
        $base_path = '';
    }
    
    define('BASE_URL', $base_path);
}
