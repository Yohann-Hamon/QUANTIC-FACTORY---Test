<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Find your Way</title>
    <link rel="stylesheet" href="style.css">
    
</head>
<body>
    <?php 
        require'data/data-f-request.php'
    ?>

    <header class="header">Find your way</header>

    <button class="button fontaine-button" value="fontaine-button">Fontaines</button>
    <button class="button activites-equipement-button" value="equipement-activite-button">Activités et Équipements</button>
    <button class="button espaces-verts-button" value="espaces-verts-button">Espaces Verts</button>

    <div class="search-window">
        <div class="window-fontaine">
            <form action="#" method="post">
                <?php 
                echo $select;
                include'data/data-f-request.php';
                echo $listeFontaines;
                ?>
                <input class="hidden-f" name="hidden-f" type="hidden" value="">
            </form>
        </div>
        <iframe class="iframe-f" src="https://parisdata.opendatasoft.com/explore/embed/dataset/fontaines-a-boire/map/?disjunctive.type_objet&disjunctive.modele&disjunctive.commune&disjunctive.statut_obj&disjunctive.udi&disjunctive.dispo&basemap=jawg.dark&location=12,48.86459,2.35787&static=false&datasetcard=true&scrollWheelZoom=true" width="400" height="400" frameborder="0"></iframe>
        <div class="window-activites-equipement">
            <form action="#" method="post">
                <?php 
                echo $select;
                include'data/data-a-e-request.php';
                ?>
            </form>
            <ul id="activites-equipements">
            </ul>
        </div>
        <iframe class="iframe-a-e" src="https://opendata.paris.fr/explore/embed/dataset/ilots-de-fraicheur-equipements-activites/map/?disjunctive.type&disjunctive.payant&disjunctive.arrondissement&disjunctive.horaires_periode&basemap=jawg.dark&location=12,48.85867,2.35181&static=false&datasetcard=true&scrollWheelZoom=true" width="400" height="400" frameborder="0"></iframe>
        <div class="window-espaces-verts">
            <form action="index.php" method="post">
                <input type="hidden" name="commune" id="commune">
                <select id="commune">
                    <?php foreach ($fontaines as $fontaine) { ?>
                        <option value="<?php echo $fontaine['commune']; ?>"><?php echo $fontaine['commune']; ?></option>
                    <?php } ?>
                </select>
            </form>
            <ul id="fontaines">
            </ul>
        </div>
        <iframe class="iframe-e-v" src="https://parisdata.opendatasoft.com/explore/embed/dataset/ilots-de-fraicheur-espaces-verts-frais/map/?disjunctive.type&disjunctive.arrondissement&disjunctive.statut_ouverture&disjunctive.ouvert_24h&disjunctive.canicule_ouverture&disjunctive.ouverture_estivale_nocturne&disjunctive.horaires_periode&basemap=jawg.dark&location=10,48.85133,2.10189&static=false&datasetcard=true&scrollWheelZoom=true" width="400" height="400" frameborder="0"></iframe>

    <script src="script.js"></script>
</body>
</html>