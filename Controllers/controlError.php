<?php

class ErrorController {
    public function handleError($message) {
        // Charger les données ou les configurations nécessaires
        require 'Models/modelError.php';
        $errorDetails = getErrorDetails($message);

        // Préparer les données pour la vue
        require 'Template/viewError.php';
        renderErrorPage($errorDetails);
    }
}