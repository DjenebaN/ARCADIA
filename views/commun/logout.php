<?php
session_destroy();
session_start();
unset($_SESSION['utilisateur']);
header('Location: http://localhost/projetfin/');
?>