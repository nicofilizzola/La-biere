<?php

    if (isset($_GET['error'])){
        $error = $_GET['error'];
        
        if($error == 'input'){
            echo '
                <p class="error_message"><span class="text-important">Vous n\'avez pas rempli toutes les cases. Réessayez.</span><p>
            ';
        }
        elseif($error == 'invalid_email'){
            echo '
                <p class="error_message"><span class="text-important">L\'adresse email que vous avez renseigné n\'est pas valide.</span><p>
            ';
        }
        if($error == 'invalid_firstname'){
            echo '
                <p class="error_message"><span class="text-important">Le prénom que vous avez renseigné n\'est pas valide.</span><p>
            ';
        }
        if($error == 'invalid_lastname'){
            echo '
                <p class="error_message"><span class="text-important">Le nom que vous avez renseigné n\'est pas valide.</span><p>
            ';
        }
        if($error == 'none'){
            echo '
                <p class="error_message"><span class="text-important">Votre message a été envoyé avec succès !</span><p>
            ';
        }
    }
