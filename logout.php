<!-- DÉCONNEXION ADMIN - Détruit la session administrateur et redirige vers la page de connexion -->

<?php
// Démarrer la session pour pouvoir la détruire
session_start();

// Vider toutes les variables de session
session_unset();

// Détruire complètement la session
session_destroy();

// Rediriger vers la page de connexion
header("Location: login.php");
exit;