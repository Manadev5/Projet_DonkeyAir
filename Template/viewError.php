<?php

function renderErrorPage($data) {
    echo "<h1>Erreur : </h1>";
    echo "<p>" . $data['errorMessage'] . "</p>";
    echo "<p>" . $data['suggestions'] . "</p>";
}