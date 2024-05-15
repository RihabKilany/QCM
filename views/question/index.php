    <?php ob_start(); ?>

    <a href="?action=ajoutQuestion" class="btn btn-success" >Ajout_Question</a>
    <h2>Liste des Questions</h2>

    <table class="table-success">
        <tr class="table-success">
            <td>ID</td>
            <td>Libelle</td>
            <td>Auteur</td>
            <td>Points</td>
            <td>ID_Utilisateur</td>
            <td>ID_QCM</td>
            <td>Action</td>
        </tr>

        <tr>
            <?php foreach($questions as $question): ?>       
                <td> <?= $question->getId(); ?> </td>
                <td> <?= $question->getLibelle(); ?> </td>
                <td> <?= $question->getAuteur(); ?> </td>
                <td> <?= $question->getPoint(); ?> </td>
                <td> <?= $question->getIdUser(); ?> </td>
                <td> <?= $question->getIdQcm(); ?> </td>
                <td>
                    <a href="?action=deleteQuestion&id=<?= $question->getId(); ?>">Supprimer</a>
                    <a href="?action=updateQuestion&id=<?= $question->getId(); ?>">Modifier</a>
                </td>
            <?php endforeach; ?>

        </tr>
    </table>
    <?php
    $content = ob_get_clean();
    include "views/template.php";
    ?>