<?php
/**
 * ========================================
 * CONFIGURATION BASE DE DONNÉES - Maraud'App
 * ========================================
 * Connexion MySQL via mysqli
 * Gestion d'erreurs stricte
 * Encodage UTF-8 (utf8mb4)
 * ========================================
 */

// Activer le mode strict pour les erreurs MySQL
// Lance des exceptions au lieu d'afficher des warnings
mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);

// ========================================
// CONNEXION À LA BASE DE DONNÉES
// ========================================
$link = mysqli_connect(
    "mysql-filytr.alwaysdata.net",  // Hôte
    "filytr",                        // Utilisateur
    "Firdaws03!",                    // Mot de passe
    "filytr_maraudapp"               // Nom de la base
);

// Vérification de la connexion
if (!$link) {
    // Message générique pour l'utilisateur (pas d'infos techniques)
    die("La base de données est temporairement indisponible. Réessaie dans quelques minutes.");
}

// ========================================
// CONFIGURATION DE L'ENCODAGE
// ========================================
// Utiliser utf8mb4 pour supporter tous les caractères Unicode (emojis inclus)
mysqli_set_charset($link, "utf8mb4");