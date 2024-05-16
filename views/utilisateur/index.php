<?php ob_start(); ?>


<h2 >Liste des Utilisateurs</h2>

   <table class="table">
       <tr class="table-success">
            <th>ID</th>
            <th>Nom</th>
            <th>Login</th>
            <th>Statut</th>
            <th>E-mail</th>

        </tr>

        
            <?php foreach($utilisateurs as $user): ?>
                <tr>      
                    <td> <?= $user->getId(); ?> </td>
                    <td> <?= $user->getNom(); ?> </td>
                    <td> <?= $user ->getLogin(); ?> </td>
                    <td> <?= $user->getStatut(); ?> </td>
                    <td> <?= $user->getEmail(); ?> </td>
                </tr> 
            <?php endforeach; ?>

        


    </table>



<?php
$content = ob_get_clean();
include "views/template.php";
?>