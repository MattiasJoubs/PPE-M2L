<h1>Liste des Salles Informatiques</h1>
<?php
for ($i = 0; $i < count($listeSalle); $i++) 
{
    ?>
    <div class="card">
        <div class="descrCard"><?= "<div class='titreSalle'><a href='./?action=detail&nSalle=" . $listeSalle[$i]['nSalle'] . "'>" . $listeSalle[$i]['nomSalle'] . "</a></div>"; ?>
            <br />
            <?= "Il y a ",$listeSalle[$i]["nbPoste"], " postes dans la salle : " ?>
            <?php for ($j = 0; $j < count($listePoste); $j++) {
               if($listeSalle[$i]["nomSalle"] == $listePoste[$j]["nomSalle"]) {?>
                <?= " ",$listePoste[$j]["nomPoste"],", ";
            }}?>
            <br />
            <?= "L'ip est ",$listeSalle[$i]["indIP"] ?>
            <br />
        </div>

    </div>
    <?php
}
?>


