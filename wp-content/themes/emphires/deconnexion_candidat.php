<?php
/* template name:deconnexion candidat*/
session_start();
session_destroy();
header('Location: http://localhost/candidature/');
?>