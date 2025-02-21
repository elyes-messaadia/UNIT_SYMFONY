<?php
$dsn = 'mysql:host=127.0.0.1;port=3306;dbname=symfony;charset=utf8';
$user = 'symfony';
$pass = 'symfony';

try {
    $pdo = new PDO($dsn, $user, $pass);
    echo "Connexion réussie !";
} catch (PDOException $e) {
    echo "Erreur : " . $e->getMessage();
}
