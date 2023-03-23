<?php 

if (isset($_SESSION['alerte']) && $_SESSION['alerte'] == "alertauploadsuccess") {
    echo '<div class="alert">Alerte de afisat!</div>';
}

$_Session["alerte"]="0";

?>