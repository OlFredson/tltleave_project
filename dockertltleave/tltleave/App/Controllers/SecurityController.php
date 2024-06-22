<?php

namespace App\Controllers;

class SecurityController {

    /**
     * Nettoie les données en supprimant les espaces et en convertissant les caractères spéciaux en entités HTML.
     * @param mixed $data Les données à nettoyer.
     * @return false|string Les données nettoyées ou false si les données sont vides ou non définies.
     */
    public function cleanInput($data): false|string {

        // Vérifie si les données sont définies et non vides.
        if (!isset($data) || empty($data)){
            return false;
        }
        // Nettoie les données en convertissant les caractères spéciaux en entités HTML et en supprimant les espaces.
        return htmlspecialchars(trim($data));
    }

    /**
     * Génère un jeton CSRF aléatoire et le stocke dans la session.
     * @return string Le jeton CSRF généré.
     */
    public function generateCsrfToken(): string
    {
        // Génère un jeton CSRF aléatoire de 32 octets et le convertit en une chaîne hexadécimale.
        $_SESSION['csrf_token'] = bin2hex(random_bytes(32));
        // Retourne le jeton CSRF généré.
        return $_SESSION['csrf_token'];
    }

    /**
     * Vérifie si le jeton CSRF fourni correspond au jeton CSRF stocké dans la session.
     * @param string $token Le jeton CSRF fourni par le formulaire.
     * @return bool True si le jeton CSRF est valide, sinon False.
     */
    public function verifyCsrfToken(string $token): bool
    {
        // Vérifie si le jeton CSRF fourni correspond au jeton CSRF stocké dans la session.
        $tokenIsValid = isset($_SESSION['csrf_token']) && $_SESSION['csrf_token'] === $token;
        // Retourne True si le jeton CSRF est valide, sinon False.
        return $tokenIsValid;
    }
}
