<?php
// --- Connexion à la base de données ---
$servername = "localhost";
$username = "root";    // Par défaut sous XAMPP/WAMP
$password = "";        // Mot de passe root (souvent vide en local)
$dbname = "chaotic_db";

// Créer la connexion
$conn = new mysqli($servername, $username, $password, $dbname);

// Vérifier la connexion
if ($conn->connect_error) {
    die("❌ Échec de connexion : " . $conn->connect_error);
}

// --- Récupérer les données du formulaire ---
$nom = $_POST['nom'];
$prenom = $_POST['prenom'];
$date_naissance = $_POST['date_naissance'];
$telephone = $_POST['telephone'];
$email = $_POST['email'];
$reseaux = $_POST['reseaux'];
$niveau = $_POST['niveau'];
$annee = $_POST['annee'];
$autre = $_POST['autre'];
$interet = $_POST['interet'];
$password = $_POST['password'];
$confirm_password = $_POST['confirm_password'];

// --- Vérification des mots de passe ---
if ($password !== $confirm_password) {
    die("❌ Les mots de passe ne correspondent pas !");
}

// Séc