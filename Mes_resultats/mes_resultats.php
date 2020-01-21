<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <link rel="stylesheet" href="mes_resultats.css" />
        <title>Mes résultats</title>
		<?php
			session_start();
			$prenomUser = $_SESSION['prenomUser'];
            $donnesUser = $_SESSION['donnesUser'];
            
			require '../Se_connecter/fonctions.php';
			$bdd = getBdd();

			// récupération des test
			$requete = "SELECT * FROM tests WHERE idUser=? ORDER BY dateTime";
			$resultat = $bdd->prepare($requete);
			$resultat->execute(array($donnesUser['id']));
            
            $testsUser = $resultat->fetchAll();
            $nb_data = count($testsUser);
           

            // WHERE idUser =? ORDER BY dateTime
            

		?>
    </head>

    <body>
        <!-- <div id="alignement">
            <img id="image" src="IMG_6986.jpg"/>
            <div id="table">
                <?php
            // $datagrid = new C_DataGrid("SELECT * FROM tests","idTest","tests");
            //     $datagrid -> set_query_filter("idUser = " .$donnesUser['id']);
            //     $datagrid -> display();
                ?>
        </div> -->

    <table id="resultats">
        <thead>
            <tr id="nomsColonnes">
                <th>N° du test</th>
                <th>Date et heure</th>
                <th>Capteur</th>
                <th>Valeur du test</th>
            </tr>
        </thead>
        <tbody>
            <!--Use a while loop to make a table row for every DB row-->
            <?php for($i = $nb_data-1; $i >= 0; $i--)
            {
             ?>
            <tr>
                <!--Each table column is echoed in to a td cell-->
                <td><?php echo escape($testsUser[$i]['idTest']); ?></td>
                <td><?php echo escape($testsUser[$i]['dateTime']); ?></td>
                <td><?php echo escape($testsUser[$i]['idCapteur']); ?></td>
                <td><?php echo escape($testsUser[$i]['valeur']); ?></td>
            </tr>
            <?php } ?>
        </tbody>
    </table>
    </div>
		<?php $title = 'Mes résultats'; ?>
		<?php $currentPage = 'tests'; ?>
    	<?php require('../Nav_Bar_Website/nav_bar_principale.inc.php'); ?>

    
    </body>
</html>