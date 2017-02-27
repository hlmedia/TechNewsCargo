<?php

# Initialisation de la Session
session_start();

# Affichage des Errors DEV
ini_set("display_errors", 1);

# Racine du Site Internet
# N�cessite PHP 7+
define('RACINE_SITE', dirname(__FILE__, 2));

# Chemin Relatif vers le Site Internet
define('SITE_URL', '/TechNews');

# Chemin Relatif vers le Dossier Public
define('PUBLIC_URL', '/TechNews/public');

# En-tete du site
define('HEADER_SITE', RACINE_SITE.'/Application/Layout/header.inc.php');

# Pied de page du site
define('FOOTER_SITE', RACINE_SITE.'/Application/Layout/footer.inc.php');

# Autoloader
require_once 'Autoloader.php';
Autoloader::register();















