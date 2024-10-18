<?php
// db.php - Fichier pour la connexion à la base de données avec PDO

$host = '';
$dbname = '';
$username = '';
$password = '';

try {
    $pdo = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    // Optionnel : Vous pouvez enregistrer les erreurs dans un fichier journal au lieu de les afficher
    error_log($e->getMessage(), 3, 'errors.log');
    exit; // Arrête le script en cas d'erreur de connexion
}
?>
